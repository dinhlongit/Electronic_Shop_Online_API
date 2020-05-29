<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Auth::routes();
Route::resource('home','HomeController');
Route::resource('products','ProductController');
Route::resource('users','UserController');
Route::resource('promotions','PromotionController');
Route::resource('categories','CategoryController');
Route::get('categories/{cat}/products', 'ProductController@getProductByCategory');
Route::resource('producers','ProducerController');
Route::resource('orders','TransactionController');


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
