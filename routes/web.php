<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('products.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

/*---------------Admin Route------------*/

Route::prefix('admin')->group(function () {
    Route::get('/login', 'App\Http\Controllers\AdminController@index')->name('login_from');
    Route::post('/login/owner', 'App\Http\Controllers\AdminController@login')->name('admin.login');
    Route::get('/dashboard', 'App\Http\Controllers\AdminController@show')->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', 'App\Http\Controllers\AdminController@adminlogout')->name('admin.logout')->middleware('admin');
    Route::get('/register', 'App\Http\Controllers\AdminController@adminregister')->name('admin.register');
    Route::post('/register/owner', 'App\Http\Controllers\AdminController@adminregistercreate')->name('admin.register.create');
    Route::delete('destroy', 'App\Http\Controllers\AdminController@destroy')->name('admin.destroy');
});
/*--------------- End of Admin Route------------*/

/*---------------Seller Route------------*/

Route::prefix('seller')->group(function () {
    Route::get('/login', 'App\Http\Controllers\SellerController@sellerindex')->name('seller_login_from');
    Route::post('/login/owner', 'App\Http\Controllers\SellerController@sellerlogin')->name('seller.login');
    Route::get('/dashboard', 'App\Http\Controllers\SellerController@show')->name('seller.dashboard')->middleware('seller');
    Route::get('/logout', 'App\Http\Controllers\SellerController@sellerlogout')->name('seller.logout')->middleware('seller');
    Route::get('/register', 'App\Http\Controllers\SellerController@sellerregister')->name('seller.register');
    Route::post('/register/owner', 'App\Http\Controllers\SellerController@sellerregistercreate')->name('seller.register.create');
});
/*--------------- End of Seller Route------------*/

//products
Route::resource('products', ProductsController::class);
Route::get('/products/create', 'App\Http\Controllers\ProductsController@create')->name('products.create')->middleware('seller');

Route::get('/categories/phones', 'App\Http\Controllers\CategoriesController@phones');
Route::get('/categories/laptops', 'App\Http\Controllers\CategoriesController@laptops');
Route::get('/categories/electronics', 'App\Http\Controllers\CategoriesController@electronics');

// cart

Route::post('add-to-cart', 'App\Http\Controllers\CartController@addToCart')->name('add-to-cart')->middleware('auth');
Route::get('cart', 'App\Http\Controllers\CartController@cart')->name('cart')->middleware('auth');
Route::get('add-to-cart', 'App\Http\Controllers\CartController@addToCart')->middleware('auth');
Route::patch('update-cart', 'App\Http\Controllers\ProductsController@upgrade')->middleware('auth');
Route::delete('remove-from-cart', 'App\Http\Controllers\ProductsController@remove')->middleware('auth');


Route::post('/create/order', 'App\Http\Controllers\OrderController@add');
