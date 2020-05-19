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
Route::resource('user','UserController');
Route::resource('categories','CategoryController');
Route::resource('products','ProductController');
Route::resource('producers','ProducerController');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
