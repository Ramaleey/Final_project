<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    
    public function GetSubCatAgainstMainCatEdit($id){
        echo json_encode(DB::table('sub_categories')->where('cat_id', $id)->get());
    }

    public function add_product(Request $request)
    {
        $request->validate([
            'category' => ['required'],
            'product_name' => ['required'],
            'image' => ['required','mimes:jpg,jpeg,png'],
            'price' => ['required'],
            'product_type' => ['required'],
        ]);

        $product = new Product();

        $path = 'product-images';
        $pdf=$request->image;
        $filename1 = time().'.'.$pdf->getClientOriginalName();
        $request->image->move(public_path($path),$filename1);


        $product->category_id = $request->category;
        $product->subCategory_id = $request->sub_category;
        $product->product_name = $request->product_name;
        $product->product_description = $request->description;
        $product->product_type = $request->product_type;
        $product->product_price = $request->price;
        $product->product_usage = $request->usage;
        $product->photo = $filename1;

        if($product->save()){
            return redirect()->back()->with('success','Product Added Successfully');
         }else{
             return redirect()->back()->with('error','Product Added Failed');
        }

    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $del = $product->delete();
        if($del){
            return redirect()->route('admin-product')->with('success',"Product Deleted Successfully..!");
        }else{
            return redirect()->route('admin-product')->with('fail',"Product Not Deleted");
        }
    }

    public function edit_product($id){
        $category = Category::all();
        $subcategory = SubCategory::all();
        $product = Product::find($id);
        return view('Admin.edit-product',compact('category','subcategory','product'));
    }

    public function update_product(Request $request, $pro)
    {
        $product = Product::find($pro);

        if($request->hasfile('image')){
            $destination = 'product-images/'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image=$request->file('image');
            $filename1 = time().'.'.$image->getClientOriginalName();
            $image->move('product-images/',$filename1);
            $product->photo = $filename1;
        }

        $product->category_id = $request->category;
        $product->subCategory_id = $request->sub_category;
        $product->product_name = $request->product_name;
        $product->product_description = $request->description;
        $product->product_type = $request->product_type;
        $product->product_price = $request->price;
        $product->product_usage = $request->usage;

        if($product->save()){
            return redirect()->route('admin-product')->with('success',"Product updated successfully");
        }else{
            return redirect()->back()->with('fail',"Product updated Failed");
        }

    }

    public function productbycategory($id){

        $categories = Category::all();
        $category = Category::find($id);
        $product = Product::where('category_id',$id)->get();
        // $subcategory = Subcategory::all();
        return view('product',['category'=>$category,'product'=>$product,'categories'=>$categories]);

    }

    public function menubycategory($id){

        $categories = Category::all();
        $product = Product::where('category_id',$id)->get();
        return view('product',['categories'=>$categories,'product'=>$product]);

    }

    public function addToCart(Request $req)
    {
        $id = $req->input('product_id');
        $qty = $req->input('product_qty');
    
        if (Auth::check()) {
            $product_check = Product::where('id', $id)->first();
            
            if ($product_check) {
                if (Cart::where('product_id', $id)->where('user_id', Auth::id())->exists()) {
                    return redirect()->route('product')->with('success', "Product is already Added To Cart");
                } else {
                    // Add product to the cart
                    $cartItem = new Cart();
                    $cartItem->product_id = $id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->product_qty = $qty;
                    $cartItem->save();
                    
                    return redirect()->route('product')->with('success', "Product added To Cart");
                }
            }
        } else {
            return redirect()->route('login')->with('error', "You have to log in first to add products to the cart.");
        }
    }

    public function changeQty(Request $req){
        $product_id = $req->input('product_id');
        $product_qty = $req->input('product_qty');

        if(Auth::check()){
            if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists()){
                $cart = Cart::where('product_id',$product_id)->where('user_id', Auth::id())->first();
                $cart->product_qty = $product_qty;
                $cart->update();
            }
        }
        // return redirect()->back();
    }

    public function removeFromCart(Request $req)
    {

        $product_id = $req->input('product_id');
        if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
            $cartItem = Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();
            $cartItem->delete();
            return response()->json(['status' => " Product deleted Successfully"]);
        }

    }

    public function checkout(){
        $categories = Category::all();
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('checkout',compact('cartItem','categories'));
    }

    public function cartcounts(){
        $cartcount = Cart::where('user_id', Auth::id())->count();
        return response()->json(['count' => $cartcount]);
    }

    public function place_Order(Request $req){

        $number = rand(100000,1000000);

        $cartitem = Cart::where('user_id', Auth::id())->get();
        $total = 0;
        foreach($cartitem as $item){
            $total += $item->products->product_price * $item->product_qty;
        }
        $order = new Orders();
        $order->user_id = Auth::id();
        $order->Reference_no = $number;
        $order->Total_price = $total;

        $order->save();

        $cartitem = Cart::where('user_id', Auth::id())->get();
        foreach($cartitem as $item){
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'qty' => $item->product_qty,
                'price' => $item->products->product_price,
            ]);

            Delivery::create([
                'user_id' => Auth::id(),
                'order_id' => $order->id,
                'delivery_location' => $req->delivery_location,
                'house_number' => $req->house_no,
            ]);
        }

        Cart::destroy($cartitem);

        return redirect()->route('cart')->with('success', "Order Placed Successfully");

    }

    public function my_order(){
        $orders = Orders::where('user_id', Auth::id())->orderBy('id','desc')->paginate(5);
        return view('my-order', compact('orders'));
    }

    public function view_order($id){
        $orders = Orders::with(['orderitems.products', 'customer'])
        ->where('id', $id)
        ->where('user_id', Auth::id())
        ->first();
        return view("view-orders", compact('orders'));
    }

    public function delete_order($id){
        $orders = Orders::find($id);
        $orders->delete();
       
        if( $orders ){
            return redirect()->back()->with('success', 'Order Deleted Successfully');
        }else{
            return redirect()->back()->with('error', 'Order Deleted Failed');
        }
    }

    public function receipt($id){
        $order = Orders::where('id',$id)->where('user_id', Auth::id())->first();
        return view("receipt", compact('order'));
    }
}
