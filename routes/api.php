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
//Auth::routes();
Route::resource('home','HomeController');
Route::resource('products','ProductController');
Route::resource('imports','ImportController');
Route::resource('users','UserController');
Route::resource('reviews','ReviewController');
Route::resource('roles','RoleController');
Route::resource('promotions','PromotionController');
Route::resource('categories','CategoryController');
Route::get('categories/{cat}/products', 'ProductController@getProductByCategory');
Route::resource('producers','ProducerController');
Route::resource('suppliers','SupplierController');
Route::resource('orders','TransactionController');
Route::get('users/{user_id}/orders', 'TransactionController@getOrderByUser');



Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('login', 'Auth\AuthController@login');
    Route::post('register', 'Auth\AuthController@register');
    Route::post('logout', 'Auth\AuthController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');

});


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
