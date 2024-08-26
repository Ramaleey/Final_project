<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WebController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about_us(){
        return view ('about-us');
    }

    public function service(){
        return view ('service');
    }

    public function contact_us(){
        return view ('contact-us');
    }

    
    public function product_details($id){
        $product=Product::find($id);
        return view ('product-details', compact('product'));
    }


    public function product(){
        $categories = Category::all();
        $product=Product::all();
        return view ('product', compact('categories', 'product'));
    }

    public function cart(){
        $categories = Category::all();
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view ('cart', compact('categories', 'cartItem'));
    }


}
