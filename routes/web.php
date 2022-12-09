<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

require __DIR__.'/auth.php';



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
Route::resource('products', 'App\Http\Controllers\ProductsController');
Route::get('/products/create', 'App\Http\Controllers\ProductsController@create')->name('products.create')->middleware('seller');

Route::get('/categories/phones', 'App\Http\Controllers\CategoriesController@phones');
Route::get('/categories/laptops', 'App\Http\Controllers\CategoriesController@laptops');
Route::get('/categories/electronics', 'App\Http\Controllers\CategoriesController@electronics');


// subcategories
Route::prefix('/categories/phones')->group(function(){
Route::get('/subcategories/huawei', 'App\Http\Controllers\SubController@huawei');
Route::get('/subcategories/nokia', 'App\Http\Controllers\SubController@nokia');
Route::get('/subcategories/samsung', 'App\Http\Controllers\SubController@samsung');
Route::get('/subcategories/oppo', 'App\Http\Controllers\SubController@oppo');
Route::get('/subcategories/xiaomi', 'App\Http\Controllers\SubController@xiaomi');
Route::get('/subcategories/hp', 'App\Http\Controllers\SubController@hp');
Route::get('/subcategories/dell', 'App\Http\Controllers\SubController@dell');
Route::get('/subcategories/lenovo', 'App\Http\Controllers\SubController@lenovo');
Route::get('/subcategories/toshiba', 'App\Http\Controllers\SubController@toshiba');
Route::get('/subcategories/accessories', 'App\Http\Controllers\SubController@accessories');
Route::get('/subcategories/tv', 'App\Http\Controllers\SubController@tv');



});



// cart

Route::post('/addcart/{products_id}', 'App\Http\Controllers\CartController@addcart')->name('addcart');
Route::get('/carts/cart', 'App\Http\Controllers\CartController@showcart')->name('showcart')->middleware('auth');
Route::delete('delete/{id}', 'App\Http\Controllers\CartController@deletecart')->name('delete');



// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::post('/order', 'App\Http\Controllers\CartController@confirmorder')->name('order');
Route::get('/carts/order', 'App\Http\Controllers\CartController@getOrder')->name('checkout');
Route::get('/carts/checkout', 'App\Http\Controllers\CartController@checkout')->name('cartcheck');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
