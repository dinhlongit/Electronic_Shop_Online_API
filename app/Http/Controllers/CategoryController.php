<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Repositories\Category\CategoryRepositoryInterface;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    private $_categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->middleware('auth.role:Admin',['except' => ['index','show','getAllCategory','getSubCategory']]);
       $this->_categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = $this->_categoryRepository->getCategories();
        $result = array(
            'status' => 'OK',
            'message'=> 'Fetch Successfully',
            'data'=> $data
        );
        return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
    }
    public function getSubCategory(){
        $data = $this->_categoryRepository->getSubCategories();
        $result = array(
            'status' => 'OK',
            'message'=> 'Fetch Successfully',
            'data'=> $data
        );
        return response()->json($data,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
    }

    public function getAllCategory(){
        $data = $this->_categoryRepository->getAll();
        return response()->json($data,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
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
        try{
          $data = $request->only('name','photo','parrent_id');
          $category =   $this->_categoryRepository->create($data);
            $result = array(
                'status' => 'OK',
                'message'=> 'Insert Successfully',
                'data'=> $category
            );
            return response()->json($result,Response::HTTP_CREATED,[],JSON_NUMERIC_CHECK);
        }catch (Exception $e){
            $result = array(
                'status' => 'ER',
                'message'=> 'Insert Failed',
                'data'=> ''
            );
            return response()->json($result,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_find = $this->_categoryRepository->find($id);
        if (is_null($data_find)){
            return response()->json("Record id not found",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
        }
        $result = array(
            'status' => 'OK',
            'message'=> 'Show Successfully',
            'data'=> $data_find
        );
        return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data_find = $this->_categoryRepository->find($id);
            if (is_null($data_find)){
                return response()->json("Record is not found",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
            }
           $data =  $this->_categoryRepository->update($id,$request->only('name','photo','parrent_id'));
            $result = array(
                    'status' => 'OK',
                    'message'=> 'Update Successfully',
                    'data'=> $data
                );
            return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
           } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message'=> 'Update Failed',
                'data'=> ''
            );
            return response()->json($result,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
        }
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          try {
           $cate =  $this->_categoryRepository->delete($id);
              $result = array(
                  'status' => 'OK',
                  'message'=> 'Delete Successfully',
                  'data'=> $cate
              );
              return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
          } catch (Exception $e) {
              $result = array(
                  'status' => 'ER',
                  'message'=> 'Delete Failed',
                  'data'=> ''
              );
              return response()->json($result,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
          }
    }

}
