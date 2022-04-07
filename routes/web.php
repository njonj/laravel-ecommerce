<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;
use App\Models\Categories;

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

// Route::get('/pages/index', [PagesController::class, 'index']);


Route::get('/categories/cars', [CategoriesController::class, 'cars']);
Route::get('/categories/clothing', [CategoriesController::class, 'clothing']);

// registering resource route
Route::resource('products', ProductsController::class);

Route::get('/show', [ProductsController::class, 'show']);
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/edit', [ProductsController::class, 'edit']);
Auth::routes();


// Route::group(['middleware' => ['auth','isAdmin']], function () {

//     Route::get('/dashboard', function () {
//        return view('admin.dashboard');
//     });

//  });






