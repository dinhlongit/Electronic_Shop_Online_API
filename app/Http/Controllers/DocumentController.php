<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
//*******************************************************Authentication*******************************************************************//
    /**
     * @OA\Post(path="/api/auth/login",
     *   tags={"Auth"},
     *   summary="Logs user into the system",
     *   description="",
     *   operationId="login",
     *   @OA\Parameter(
     *     name="email",
     *     required=true,
     *     in="query",
     *     description="The user name for login",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="password",
     *     in="query",
     *     @OA\Schema(
     *         type="string",
     *     ),
     *     description="The password for login in clear text",
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *     @OA\Schema(type="string"),
     *     @OA\Header(
     *       header="X-Rate-Limit",
     *       @OA\Schema(
     *           type="integer",
     *           format="int32"
     *       ),
     *       description="calls per hour allowed by the user"
     *     ),
     *     @OA\Header(
     *       header="X-Expires-After",
     *       @OA\Schema(
     *          type="string",
     *          format="date-time",
     *       ),
     *       description="date in UTC when token expires"
     *     )
     *   ),
     *   @OA\Response(response=400, description="Invalid username/password supplied")
     * )
     */

    /**
     * @OA\Post(
     *     path="/api/auth/me",
     *     tags={"Auth"},
     *     summary="Get info user by Bearer token",
     *     operationId="me",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     ),
     *   @OA\Response(response=400, description="Invalid username/password supplied"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */



    /**
     * @OA\Post(path="/api/auth/logout",
     *   tags={"Auth"},
     *   summary="Logs out current logged in user session",
     *   description="",
     *   operationId="logout",
     *   parameters={},
     *   @OA\Response(response="default", description="successful operation"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */

    /**
     * @OA\Post(path="/api/auth/register",
     *   tags={"Auth"},
     *   summary="Register user",
     *   description="",
     *   operationId="register",
     *   @OA\Parameter(
     *     name="name",
     *     required=true,
     *     in="query",
     *     description="name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="email",
     *     required=true,
     *     in="query",
     *     description="email",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="password",
     *     in="query",
     *     @OA\Schema(
     *         type="string",
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="phone_number",
     *     required=true,
     *     in="query",
     *     description="phone_number",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="address",
     *     required=true,
     *     in="query",
     *     description="address",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="address_id",
     *     required=true,
     *     in="query",
     *     description="address_id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *     @OA\Schema(type="string"),
     *     @OA\Header(
     *       header="X-Rate-Limit",
     *       @OA\Schema(
     *           type="integer",
     *           format="int32"
     *       ),
     *       description="calls per hour allowed by the user"
     *     ),
     *     @OA\Header(
     *       header="X-Expires-After",
     *       @OA\Schema(
     *          type="string",
     *          format="date-time",
     *       ),
     *       description="date in UTC when token expires"
     *     )
     *   ),
     *   @OA\Response(response=400, description="Invalid username/password supplied")
     * )
     */

    /**
     * @OA\Post(
     *     path="/api/auth/refresh",
     *     tags={"Auth"},
     *     summary="Refresh token",
     *     operationId="refresh",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     ),
     *   @OA\Response(response=400, description="Invalid username/password supplied"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */


//*******************************************************Category*******************************************************************//
    /**
     * @OA\Get(
     *     path="/api/categories",
     *     tags={"Category"},
     *     summary="Get all categories ",
     *     operationId="someRoute",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     )
     * )
     *
     */



    /**
     * @OA\Get(path="/api/categories/{id}",
     *   tags={"Category"},
     *   summary="Get Category by id",
     *   description="",
     *   operationId="show",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found")
     * )
     */




    /**
     * @OA\Post(path="/api/categories",
     *   tags={"Category"},
     *   summary="Add category",
     *   description="",
     *   operationId="store",
     *   @OA\Parameter(
     *     name="name",
     *     required=true,
     *     in="query",
     *     description="name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="photo",
     *     required=true,
     *     in="query",
     *     description="photo",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="parrent_id",
     *     required=true,
     *     in="query",
     *     description="parrent_id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *     @OA\Schema(type="string"),
     *     @OA\Header(
     *       header="X-Rate-Limit",
     *       @OA\Schema(
     *           type="integer",
     *           format="int32"
     *       ),
     *       description="calls per hour allowed by the user"
     *     ),
     *     @OA\Header(
     *       header="X-Expires-After",
     *       @OA\Schema(
     *          type="string",
     *          format="date-time",
     *       ),
     *       description="date in UTC when token expires"
     *     )
     *   ),
     *   @OA\Response(response=400, description="Invalid "),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */


    /**
     * @OA\Delete(path="/api/categories/{id}",
     *   tags={"Category"},
     *   summary="Delete Category by id",
     *   description="",
     *   operationId="destroy",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */


    /**
     * @OA\PUT(path="/api/categories/{id}",
     *   tags={"Category"},
     *   summary="Update Category by id",
     *   description="",
     *   operationId="update",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="name",
     *     required=true,
     *     in="query",
     *     description="name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="photo",
     *     in="query",
     *     description="parrent_id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="parrent_id",
     *     required=true,
     *     in="query",
     *     description="parrent_id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */



//*******************************************************Product*******************************************************************//


    /**
     * @OA\Get(
     *     path="/api/products",
     *     tags={"Product"},
     *     summary="Get all products",
     *     operationId="someRoute",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     )
     * )
     */




    /**
     * @OA\Get(path="/api/products/{id}",
     *   tags={"Product"},
     *   summary="Get Products by id",
     *   description="",
     *   operationId="show",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found")
     * )
     */

    /**
     * @OA\Get(path="/api/categories/{id}/products",
     *   tags={"Product"},
     *   summary="Get Products by Category",
     *   description="",
     *   operationId="getProductByCategory",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */




//*******************************************************Order*******************************************************************//

    /**
     * @OA\Get(
     *     path="/api/orders",
     *     tags={"Orders"},
     *     summary="Get all orders",
     *     operationId="index",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */

    /**
     * @OA\Schema(
     *   schema="Orders",
     *   @OA\Property(
     *     property="product_id",
     *     type="integer"
     *   ),
     *   @OA\Property(
     *     property="amount",
     *     type="integer"
     *   ),
     *   @OA\Property(
     *     property="price",
     *     type="integer"
     *   ),
     * )
     */


    /**
     * @OA\Schema(
     *   schema="Transactions",
     *   @OA\Property(
     *     property="full_name",
     *     type="json"
     *   ),
     *   @OA\Property(
     *     property="user_id",
     *     type="integer"
     *   ),
     *   @OA\Property(
     *     property="street",
     *     type="string"
     *   ),
     *   @OA\Property(
     *     property="address_id",
     *     type="integer"
     *   ),
     * )
     */



    /**
     * @OA\Post(path="/api/orders",
     *   tags={"Orders"},
     *   summary="Place an order",
     *   description="",
     *   operationId="placeOrder",
     *        @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="id",
     *                     type="string"
     *                 ),
     *                 example={"cart":{{"product_id" : 1, "amount" : 3, "price" : 4},{"product_id" : 2, "amount" : 44, "price" : 4}},"transaction_info" : {"user_id" : 1, "full_name" : "dinh long" ,"street" : "27 Thai Thi Boi", "address_id" : 1}}
     *             )
     *         )
     *     ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",

     *   ),
     *   @OA\Response(response=400, description="Invalid Order"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */


    /**
     * @OA\PUT(path="/api/orders/{id}",
     *   tags={"Orders"},
     *   summary="Update Status order by id",
     *   description="",
     *   operationId="update",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="status_id",
     *     required=true,
     *     in="query",
     *     description="name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */


    /**
     * @OA\Get(path="/api/users/{id}/orders",
     *   tags={"Orders"},
     *   summary="Get Order of user",
     *   description="",
     *   operationId="getOrderByUser",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,

     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */






    //*******************************************************Role*******************************************************************//
    /**
     * @OA\Get(
     *     path="/api/roles",
     *     tags={"Role"},
     *     summary="Get all role ",
     *     operationId="someRoute",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Get(path="/api/roles/{id}",
     *   tags={"Role"},
     *   summary="Get Role by id",
     *   description="",
     *   operationId="show",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */



    /**
     * @OA\Post(path="/api/roles",
     *   tags={"Role"},
     *   summary="Add Role",
     *   description="Add new Eole",
     *   operationId="store",
     *   @OA\Parameter(
     *     name="name",
     *     required=true,
     *     in="query",
     *     description="name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid "),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */



    /**
     * @OA\Delete(path="/api/roles/{id}",
     *   tags={"Role"},
     *   summary="Delete Role by id",
     *   description="",
     *   operationId="destroy",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="Role not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */

    /**
     * @OA\PUT(path="/api/roles/{id}",
     *   tags={"Role"},
     *   summary="Edit Role",
     *   description="Edit new Eole",
     *   operationId="update",
     *   @OA\Parameter(
     *     name="id",
     *     required=true,
     *     in="path",
     *     description="id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="name",
     *     required=true,
     *     in="query",
     *     description="name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid "),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */









    //*******************************************************Producer*******************************************************************//
    /**
     * @OA\Get(
     *     path="/api/producers",
     *     tags={"Producer"},
     *     summary="Get all producer ",
     *     operationId="someRoute",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Get(path="/api/producers/{id}",
     *   tags={"Producer"},
     *   summary="Get producer by id",
     *   description="",
     *   operationId="show",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */



    /**
     * @OA\Post(path="/api/producers",
     *   tags={"Producer"},
     *   summary="Add Producer",
     *   description="Add new Producer",
     *   operationId="store",
     *   @OA\Parameter(
     *     name="name",
     *     required=true,
     *     in="query",
     *     description="name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid "),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */



    /**
     * @OA\Delete(path="/api/producers/{id}",
     *   tags={"Producer"},
     *   summary="Delete producer by id",
     *   description="",
     *   operationId="destroy",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="Role not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */

    /**
     * @OA\PUT(path="/api/producers/{id}",
     *   tags={"Producer"},
     *   summary="Edit Producer",
     *   description="Edit Producer",
     *   operationId="update",
     *   @OA\Parameter(
     *     name="id",
     *     required=true,
     *     in="path",
     *     description="id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="name",
     *     required=true,
     *     in="query",
     *     description="name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid "),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */


    //*******************************************************User*******************************************************************//
    /**
     * @OA\Get(
     *     path="/api/users",
     *     tags={"User"},
     *     summary="Get all user ",
     *     operationId="someRoute",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     *
     */
    /**
     * @OA\Get(path="/api/users/{id}",
     *   tags={"User"},
     *   summary="Get user by id",
     *   description="",
     *   operationId="show",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */


    /**
     * @OA\Post(path="/api/users",
     *   tags={"User"},
     *   summary="Add new User",
     *   description="",
     *   operationId="placeOrder",
     *        @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="id",
     *                     type="string"
     *                 ),
     *               example = {"name":"dinhlong","phone_number":"0888999043","email":"dinhlongit1998@gmail.com","birthday":"2012-02-02","password":"123456","address":"Phu Da","address_id":"1","roles": 1}
     *             )
     *         )
     *     ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",

     *   ),
     *   @OA\Response(response=400, description="Invalid Order"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */


    /**
     * @OA\PUT(path="/api/users/{id}",
     *   tags={"User"},
     *   summary="Edit User",
     *   description="",
     *   operationId="placeOrder",
     *   @OA\Parameter(
     *     name="id",
     *     required=true,
     *     in="path",
     *     description="id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *        @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="id",
     *                     type="string"
     *                 ),
     *               example = {"name":"dinhlong","phone_number":"0888999043","email":"dinhlongit1998@gmail.com","birthday":"2012-02-02","password":"123456","address":"Phu Da","address_id":"1","roles": 1}
     *             )
     *         )
     *     ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",

     *   ),
     *   @OA\Response(response=400, description="Invalid Order"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */

    /**
     * @OA\Delete(path="/api/users/{id}",
     *   tags={"User"},
     *   summary="Delete user by id",
     *   description="",
     *   operationId="destroy",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="Role not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */




    //*******************************************************Review*******************************************************************//
    /**
     * @OA\Get(
     *     path="/api/reviews",
     *     tags={"Review"},
     *     summary="Get all reviews ",
     *     operationId="someRoute",
     *     @OA\Response(
     *         response=200,
     *         description="Success with some route data"
     *     ),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Get(path="/api/reviews/{id}",
     *   tags={"Review"},
     *   summary="Get reviews by id",
     *   description="",
     *   operationId="show",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="category not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */



    /**
     * @OA\Post(path="/api/users/{user_id}/reviews",
     *   tags={"Review"},
     *   summary="Add reviews",
     *   description="Add new reviews",
     *   operationId="store",
     *   @OA\Parameter(
     *     name="user_id",
     *     required=true,
     *     in="path",
     *     description="user_id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="content",
     *     required=true,
     *     in="query",
     *     description="content",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="rating",
     *     required=true,
     *     in="query",
     *     description="rating",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="product_id",
     *     required=true,
     *     in="query",
     *     description="product_id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid "),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */



    /**
     * @OA\Delete(path="/api/reviews/{id}",
     *   tags={"Review"},
     *   summary="Delete reviews by id",
     *   description="",
     *   operationId="destroy",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid id supplied"),
     *   @OA\Response(response=404, description="Role not found"),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */

    /**
     * @OA\PUT(path="/api/reviews/{id}",
     *   tags={"Review"},
     *   summary="Edit reviews",
     *   description="Edit reviews",
     *   operationId="update",
     *   @OA\Parameter(
     *     name="id",
     *     required=true,
     *     in="path",
     *     description="id",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="content",
     *     required=true,
     *     in="query",
     *     description="content",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(response=200, description="successful operation"),
     *   @OA\Response(response=400, description="Invalid "),
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */

}