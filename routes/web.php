<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

// Route::get('cache', [AdminController::class, 'caches']);



//Websites

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('about-us', [WebController::class, 'about_us'])->name('about-us');
Route::get('services', [WebController::class, 'service'])->name('services');
Route::get('contact-us', [WebController::class, 'contact_us'])->name('contact-us');
Route::get('product', [WebController::class, 'product'])->name('product');
Route::get('product-details/{id}', [WebController::class, 'product_details'])->name('product-details');
Route::post('add-coment', [AdminController::class, 'add_coments'])->name('add-coment');


Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('add-cart');



Route::get('product-by-category/{id}', [ProductController::class, 'productbycategory'])->name('product-by-category');
Route::get('categories/{id}', [ProductController::class, 'menubycategory'])->name('menubycategory');


Route::post('register-customer', [RegisterController::class, 'register_customer'])->name('register-customer');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');



Route::group(['prefix'=>'admin', 'middleware'=>['Admin','auth','PreventBackHistory']], function(){
    //product
    Route::get('GetSubCatAgainstMainCatEdit/{id}',[ProductController::class, 'GetSubCatAgainstMainCatEdit']);
    Route::get('admin-product', [AdminController::class, 'product'])->name('admin-product');
    Route::post('add-product',[ProductController::class, 'add_product'])->name('add-product');
    Route::get('delete-product/{id}',[ProductController::class, 'destroy'])->name('delete-product');
    Route::get('edit-product/{id}',[ProductController::class, 'edit_product'])->name('edit-product');
    Route::post('update-product/{id}',[ProductController::class, 'update_product'])->name('update-product');


    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('category', [AdminController::class, 'category'])->name('category');
    Route::get('subcategory', [AdminController::class, 'subcategory'])->name('subcategory');
    Route::get('customer', [AdminController::class, 'customer'])->name('customer');
    Route::get('paid-order', [AdminController::class, 'paid'])->name('paid-order');
    Route::get('pending-order', [AdminController::class, 'pending'])->name('pending-order');

    //Category
    Route::post('add-category', [AdminController::class, 'add_categories'])->name('add-category');
    Route::post('update-category/{id}', [AdminController::class, 'update_categories'])->name('update-category');
    Route::get('delete-category/{id}', [AdminController::class, 'delete_categories'])->name('delete-category');
    Route::get('edit-category/{id}', [AdminController::class, 'edit_category'])->name('edit-category');

    //subcategory
    Route::post('add-subcategory', [AdminController::class, 'addsubcategory'])->name('add-subcategory');
    Route::get('delete-sub/{id}',[AdminController::class, 'delete_sub']);
    Route::get('edit-sub/{id}',[AdminController::class, 'edit_sub'])->name('edit.sub-category');
    Route::post('update-sub/{sub}',[AdminController::class, 'update_sub'])->name('update.sub-category');

    //Customer
    Route::get('customer', [AdminController::class, 'customer_view'])->name('customer');


    //Coment
    Route::get('coment', [AdminController::class, 'coment'])->name('coment');
    Route::get('delete-coment/{id}',[AdminController::class, 'delete_coment']);

    Route::post('activate/{id}',[AdminController::class, 'activate_order'])->name('activate.order');
    Route::get('view-order/{id}',[AdminController::class, 'view_orders'])->name('view.orders');

    Route::post('payment-order/{id}',[AdminController::class, 'paid_order'])->name('payment-order');


    //Expenses
    Route::get('expenses', [ExpensesController::class, 'expense'])->name('expenses');
    Route::post('add-expenses', [ExpensesController::class, 'add_expenses'])->name('add-expenses');
    Route::get('delete-expenses/{id}', [ExpensesController::class, 'delete_expenses'])->name('delete-expenses');
    Route::post('update-expenses/{id}', [ExpensesController::class, 'update_expenses'])->name('update-expenses');
    Route::get('edit-expenses/{id}', [ExpensesController::class, 'edit_expenses'])->name('edit-expenses');

    Route::get('employee', [EmployeeController::class, 'employee'])->name('employee');
    Route::post('add-employee', [EmployeeController::class, 'add_employee'])->name('add-employee');
    Route::get('delete-employee/{id}', [EmployeeController::class, 'delete_employee'])->name('delete-employee');
    Route::get('edit-employee/{id}', [EmployeeController::class, 'edit_employee'])->name('edit-employee');
    Route::post('update-employee/{id}', [EmployeeController::class, 'update_employee'])->name('update-employee');

    //payroll

    Route::get('payroll', [EmployeeController::class, 'payroll'])->name('payroll');
    Route::post('add-payroll', [EmployeeController::class, 'add_payroll'])->name('add-payroll');
    Route::get('edit-payroll/{id}', [EmployeeController::class, 'edit_payroll'])->name('edit-payroll');
    Route::get('delete-payroll/{id}', [EmployeeController::class, 'delete_payroll'])->name('delete-payroll');
    Route::post('update-payroll/{id}', [EmployeeController::class, 'update_payroll'])->name('update-payroll');

    Route::post('paySalary/{id}', [EmployeeController::class, 'paySalary'])->name('paySalary');
    Route::get('paid-salary', [EmployeeController::class, 'paid_salary'])->name('paid-salary');









});

Route::group(['prefix'=>'customer', 'middleware'=>['Customer','auth','PreventBackHistory']], function(){
    Route::get('cart', [WebController::class, 'cart'])->name('cart');

    Route::post('/change-qty', [ProductController::class, 'changeQty'])->name('update-cart-qty');
    Route::post('/remove', [ProductController::class, 'removeFromCart'])->name('remove-cart-item');

    Route::get('checkout', [ProductController::class, 'checkout'])->name('user.check');
    Route::get('cart-count', [ProductController::class, 'cartcounts'])->name('cart.count');

    Route::post('placeOrder',[ProductController::class, 'place_Order'])->name('place.order');
    Route::get('my-orders', [ProductController::class, 'my_order'])->name('my-orders');

    Route::get('delete-orders/{id}', [ProductController::class, 'delete_order'])->name('delete-orders');
    Route::get('view-orders/{id}', [ProductController::class, 'view_order'])->name('view-orders');

    Route::get('print/{id}', [ProductController::class, 'receipt'])->name('receipt');



    
});





