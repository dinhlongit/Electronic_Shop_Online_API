<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {

       // $this->middleware('auth:api', ['except' => ['login','register','logout','me','refresh','update']]);
    }

    /**
     * Get a JWT token via given credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            return $this->respondWithToken($token);
        }
         $result = [
             "status" => 400,
             "data" => "unauthorize"
         ];
        return response()->json($result, 400);
    }

    /**
     * Get the authenticated User
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user = auth()->user();
        if ($user) {
            return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $this->guard()->user()],200
            );
        }
        return response()->json([
            'status' => 400,
            'message' => 'You must login before see info',
            'data' => ''
        ],400);
    }

    /**
     * Log the user out ok (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $user = auth()->user();
        if ($user) {
            $this->guard()->logout();
            return response()->json(['message' => 'Successfully logged out'],200    );
        }

        return response()->json([
        'status' => 400,
        'message' => 'You must login before logout',
        'data' => ''
    ],400);
    }

    public function register(Request $request){

           try {
               $user = User::create([
                   'name' => $request->get('name'),
                   'email' => $request->get('email'),
                   'phone_number' => $request->get('phone_number'),
                   'address' => $request->get('address'),
                   'address_id' => $request->get('address_id'),
                   'password' => Hash::make($request->get('password')),
               ]);
               $user->roles()->attach([3]);
               return response()->json([
                   'status' => 200,
                   'message' => 'User created successfully',
                   'data' => $user
               ],200);
           }catch (\Exception $ex){
               return response()->json([
                   'status' => 400,
                   'message' => 'Not Ok',
                   'data' => ''
               ],400);
           }

    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    { $user = auth()->user();
        if ($user) {
            return $this->respondWithToken($this->guard()->refresh());
        }
        return response()->json([
            'status' => 400,
            'message' => 'You must login to refresh',
            'data' => ''
        ],400);

    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        $user = auth()->user();
        return response()->json([
            'id' => $user['id'],
            'username' => $user['name'],
            'email' => $user['email'],
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60 * 24 * 1000,
            'role' => $user->roles->pluck('name'),

        ]);
    }


    public function updateUser(Request $request,$id){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'address' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }

        $data = $request->all();

        $check = false;
        try{
            DB::beginTransaction();
            User::where('id',$id)->update([
                'name' => $data['name'],
                'phone_number' => $data['phone_number'],
                'email' => $data['email'],
                'address' => $data['address'],
            ]);
            DB::table('user_roles')->where('user_id', $id)->delete();
            $userCreate = User::find($id);
            $userCreate->roles()->attach([3]);
            DB::commit();
            $check =  $userCreate->toArray()+['role' => $userCreate->roles()->pluck("name")->toArray()[0]];
        }catch (Exception $ex){
            DB::rollback();
            return response()->json($check);
        }
        return response()->json($check);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard();
    }
}
