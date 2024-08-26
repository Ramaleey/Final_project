<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coment;
use App\Models\Delivery;
use App\Models\Expenses;
use App\Models\Orders;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function dashboard(){
        $customer = User::where('role', 2)->get();
        $paid_order = Orders::where('status', 2)->where('Payment_status', 1)->get();
        $pending_order = Orders::where('status', 0)->where('Payment_status', 0)->get();
        $coment = Coment::all();
        $income =  Orders::where('status', 2)->where('Payment_status', 1)->sum('Total_price');
        $product = Product::all();

        return view('Admin.dashboard', compact('customer', 'paid_order', 'pending_order', 'coment', 'income','product'));
    }

    public function category(){
        $category = Category::orderBy('id', 'desc')->get();
        return view('Admin.category', compact('category'));
    }

   

    public function coment(){
        $coment = Coment::orderBy('id', 'desc')->get();
        return view('Admin.coment', compact('coment'));
    }

    public function subcategory(){
        $subcategory = SubCategory::orderBy('id', 'desc')->get();
        $category = Category::all();
        return view('Admin.subcategory', compact('category', 'subcategory'));
    }

    public function product(){
        $product = Product::orderBy('created_at' , 'desc')->get();
        $categories = Category::all();
        return view('Admin.product', compact('categories', 'product'));
    }

    public function paid(){
        $orders = Orders::where('Payment_status', 1)->get();
        return view('Admin.paid-order',compact('orders'));
    }
    
    public function pending(){
        $orders = Orders::where('Payment_status', 0)->get();
        return view('Admin.pending-order',compact('orders'));
    }

    //Category

    public function add_categories(Request $request){
        
        $request->validate([
            'categoryname' =>['required']
        ]);

        $data = new Category();
        $data->category_name = $request->categoryname;

        if($data->save()){
            return redirect()->back()->with('success', 'categories added successfully');
        }else{
            return redirect()->back()->with('error', 'categories  added Failed ');
        }

    }

    public function delete_categories($id){

        $data = Category::find($id);
       $del = $data->delete();
        if($del){
            return redirect()->back()->with('success', 'categories deleted successfully');
        }else{
            return redirect()->back()->with('error', 'categories deleted Failed ');
        }

    }

    public function update_categories(Request $request, $id){
        
        $request->validate([
            'categoryname' =>['required']
        ]);

        $data = Category::find($id);
        $data->category_name = $request->categoryname;

        if($data->save()){
            return redirect()->route('category')->with('success', 'categories updated successfully');
        }else{
            return redirect()->back()->with('error', 'categories updated Failed');
        }

    }


    
    //Subcategory
    public function addsubcategory(Request $request){
        $request->validate([
            'category_id' => ['required'],
            // 'sub_category' => ['required'],
            'description' => ['required']
        ]);

        $data = new SubCategory;
        $data->cat_id=$request->category_id;
        $data->sub_category=$request->sub_category;
        $data->description=$request->description;
        if( $data->save() ){
            return redirect()->back()->with('success','Sub category added Successfully');
         }else{
             return redirect()->back()->with('error','Failed to add');
         }
    }

    public function edit_sub($id)
    {
        $category = Category::all();
        $sub = SubCategory::find($id);
        return view('Admin.update-subcategory',compact('sub', 'category'));
    }

    public function update_sub(Request $request, $sub)
    {
        $request->validate([
            'category_id' => ['required'],
            // 'sub_category' => ['required'],
            'description' => ['required']
        ]);

        $input=$request->all();
        $sub=SubCategory::find($sub);
        $sub->cat_id=$input['category_id'];
        $sub->sub_category=$input['sub_category'];
        $sub->description=$input['description'];
        $sub_cat = $sub->save();

        if( $sub_cat ){
            return redirect()->route('subcategory')->with('success','Sub-category Updated Successfully');
         }else{
             return redirect()->route('subcategory')->with('error','Failed To Update Sub-category');
         }
    }

    public function delete_sub($id)
    {
        $data = Subcategory::find($id);
        $del = $data->delete();

        if($del){
            return redirect()->back()->with('success','Sub-category Deleted Successfully');
        }else{
            return redirect()->back()->with('error','Failed To Delete Sub-category');
        }
    }

    //coment

    public function add_coments(Request $coment){

        $coment->validate([
            'full_name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'subject' => ['required']
        ]);

        $data  = new Coment();

        $data->full_name = $coment->full_name;
        $data->email = $coment->email;
        $data->subject = $coment->subject;
        $data->message = $coment->message;

        if( $data->save() ){
            return redirect()->back()->with('success','Coment Added Successfully');
        }else{
            return redirect()->back()->with('error','Failed To Added Coment');
        }

    }

    public function delete_coment($id)
    {
        $data = Coment::find($id);
        $del = $data->delete();

        if($del){
            return redirect()->back()->with('success','Coment Deleted Successfully');
        }else{
            return redirect()->back()->with('error','Failed To Delete Coment');
        }
    }

    public function activate_order(REQUEST $request, $id)
    {
        try{
            $order = Orders::find($id);
            $newStatus = $request->get('Status');

            $order->status  = $newStatus;


            if($order->save()){
                return redirect()->route('pending-order')->with('success','Order status has been updated.');
            }else{
                return redirect()->route('pending-order')->with('error','Failed to update order status.');
            }
        }catch (\Exception $e){
            $message = 'AN error occurred: ' . $e->getMessage();
            return response()->json(['message' =>$message],500);
        }
     
    }

    public function paid_order(REQUEST $request, $id)
    {
        try{
            $order = Orders::find($id);
            $newpayment = $request->get('payment');

            $order->Payment_status  = $newpayment;


            if($order->save()){
                return redirect()->route('pending-order')->with('success','Payment status has been updated.');
            }else{
                return redirect()->route('pending-order')->with('error','Failed to update Payment status.');
            }
        }catch (\Exception $e){
            $message = 'AN error occurred: ' . $e->getMessage();
            return response()->json(['message' =>$message],500);
        }
     
    }

    public function view_orders($id){

        // $orders = Orders::whereHas('orderitems', function($query){
        //     $query->where('order_id', $id);
        // })->with('orderitems', 'delivery')->get();

        $orders = Orders::with(['orderitems.products', 'customer'])
        ->where('id', $id)
        ->first();
        return view("Admin.view-order", compact('orders'));
    }

    //customer
    public function customer_view(){
        $customers = User::where('role', 2)->get(); 
        return view('Admin.customer', compact('customers'));
    }
    

    
}

