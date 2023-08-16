<?php

use Illuminate\Support\Facades\App;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;

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

Route::group(['prefix' => 'products'], function () {
    Route::get('/trash', [ProductController::class, 'trash'])->name('products.trash');
    Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
    Route::get('/delete_forever/{id}', [ProductController::class, 'delete_forever'])->name('products.delete_forever');
});
// Route::group([
//     'prefix' => 'products'
// ],function(){
//     Route::get('/',[ProductController::class,'index'])->name('products.index');
//     Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
//     Route::post('/product/store',[ProductController::class,'store'])->name('products.store');
//     Route::get('/product/{id}',[ProductController::class,'show'])->name('products.show');
//     Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
//     Route::put('/product/{id}',[ProductController::class,'update'])->name('products.update');
//     Route::delete('/product/{id}',[ProductController::class,'destroy'])->name('products.destroy');
// });
Route::group(['prefix' => 'categories'], function () {
    Route::get('/trash', [CategoryController::class, 'trash'])->name('categories.trash');
    Route::get('/restore/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::get('/delete_forever/{id}', [CategoryController::class, 'delete_forever'])->name('categories.delete_forever');
});



Route::group(['prefix' => 'customers'], function () {
    Route::get('/trash', [CustomerController::class, 'trash'])->name('customers.trash');
    Route::get('/restore/{id}', [CustomerController::class, 'restore'])->name('customers.restore');
    Route::get('/delete_forever/{id}', [CustomerController::class, 'delete_forever'])->name('customers.delete_forever');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/trash', [UserController::class, 'trash'])->name('users.trash');
    Route::get('/restore/{id}', [UserController::class, 'restore'])->name('users.restore');
    Route::get('/delete_forever/{id}', [UserController::class, 'delete_forever'])->name('users.delete_forever');
});

Route::resource('customers', CustomerController::class);

//Frontend
Route::resource('/home', ShopController::class);
// Route::get('/load-more-products',ShopController::class,);
Route::get('/', [ShopController::class, 'index'])->name('home.index');
Route::get('/login_home', [ShopController::class, 'index2'])->name('home.index2');

// Route::get('/products',function(){
//     return view('shops.products');
// })->name ('home.products');

// Route::group(['prefix'=>'users'],function(){
//     Route::get('/login',[UserController::class,'login'])->name('users.login');
//     Route::post('/CheckLogin',[UserController::class,'CheckLogin'])->name('users.CheckLogin');
// });
// Route::resource('users',UserController::class);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/checkLogin', [AuthController::class, 'loginPost'])->name('checkLogin');
});


Route::group(['middleware' => 'auth'], function () {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('users', UserController::class);
    Route::resource('groups', GroupController::class);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


//ShopController
Route::get('/login.shop', [ShopController::class, 'login'])->name('login.shop');
Route::post('/checkLoginShop', [ShopController::class, 'loginPost'])->name('checkLoginShop');
Route::get('/register.shop', [ShopController::class, 'register'])->name('register.shop');
Route::post('/register.shop', [ShopController::class, 'registerPost'])->name('register.shop');
Route::delete('/logout.shop', [ShopController::class, 'logout'])->name('logout.shop');

Route::get('/detail/{id}', [GroupController::class, 'detail'])->name('groups.detail');
Route::put('/group_detail/{id}', [GroupController::class, 'group_detail'])->name('groups.group_detail');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');

Route::get('/products/shop', [ShopController::class,'products_index' ])->name('products.shop');
Route::get('/products/shop/{id}', [ShopController::class,'add_to_Cart'])->name('add.to.cart');
Route::get('/cart', [ShopController::class,'products_cart'])->name('shop.cart');
Route::patch('update-cart', [ShopController::class, 'update']);
Route::delete('remove-from-cart', [ShopController::class, 'remove']);
Route::post('/order', [ShopController::class, 'Order'])->name('orders');