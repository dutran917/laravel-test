<?php

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
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route để hiển thị danh sách sản phẩm
Route::resource('products', 'ProductController');
// Route::get('/products', 'ProductController@index')->name('products');

// Route::resource('contact', ContactController::class);
// Route::get('/contact', [ContactController::class, 'showForm']);
// Route::post('/contact', [ContactController::class, 'submitForm']);