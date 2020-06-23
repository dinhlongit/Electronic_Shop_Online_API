<?php

use Illuminate\Http\Request;


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
// add any additional headers you need to support here
header('Access-Control-Allow-Headers: Origin, Content-Type,X-Requested-With,Authorization');
/*
 *
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
//getProductByProducer
Route::resource('home','HomeController');

Route::resource('categories','CategoryController');
Route::get('getcategories','CategoryController@getAllCategory');
Route::get('getsubcategories','CategoryController@getSubCategory');
Route::get('categories/{cat}/products', 'ProductController@getProductByCategory');

Route::resource('products','ProductController');
Route::get('products','ProductController@filterProduct');

Route::get('products/filter/getSale','ProductController@getSaleProduct');
Route::get('products/filter/getNew','ProductController@getNewProduct');
Route::get('products/filter/price','ProductController@filterProductByPrice');
Route::get('producers/{id}/products','ProductController@getProductByProducer');
Route::get('products/{id}/photos','ProductController@getPhotosOfProduct');
Route::resource('imports','ImportController');
Route::resource('importproducts','ImportProductController');


Route::get('users/{user_id}', 'UserController@show')->middleware('auth.belongto:Admin,Nhân Viên');
Route::resource('users','UserController');

Route::Post('users/{user_id}/reviews', 'ReviewController@store');
Route::resource('reviews','ReviewController');

Route::resource('roles','RoleController');
Route::resource('promotions','PromotionController');
Route::resource('promotionproducts','PromotionProductController');
Route::resource('producers','ProducerController');


Route::resource('suppliers','SupplierController');
Route::resource('orders','TransactionController');
Route::resource('orderstatuses','TransactionStatusController');
Route::resource('productstatuses','ProductStatusController');
Route::get('users/{user_id}/orders', 'TransactionController@getOrderByUser')->middleware('auth.belongto:Admin,Nhân Viên');

Route::resource('photoarrays','PhotoArrayController');


//Route::get('users/{id}', 'UserController@show')->middleware('auth.belongto:Admin');
//Route::PUT('users/{id}', 'UserController@update')->middleware('auth.belongto:Admin');
Route::resource('addresses','AddressController');






Route::group([
    'middleware' => ['api','cors'],
    'prefix' => 'auth'
], function ($router) {
   // Route::post('register', 'Auth\AuthController@register');
    Route::post('register', [ 'as' => 'register', 'uses' => 'Auth\AuthController@register']);
    Route::post('login', 'Auth\AuthController@login');
    Route::post('logout', 'Auth\AuthController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');

});


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
