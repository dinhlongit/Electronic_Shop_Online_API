<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Repositories\Post\UserInterface;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @SWG\GET(
     *   path="api/user",
     *   summary="All User",
     *   operationId="store",
     *   tags={"User"},
     *   security={
     *       {"ApiKeyAuth": {}}
     *   },
     *     @SWG\Parameter(
     *       name="first_name",
     *       in="query",
     *       required=true,
     *       type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */


    protected $_userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->_userRepository = $userRepository;
    }


    public function index()
    {
        $users=$this->_userRepository->all();
        return response()->json($users, 200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
