<?php

namespace App\Http\Controllers;

use App\ImportProduct;
use App\Repositories\ImportProduct\ImportProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ImportProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_importProduct;
    public function __construct(ImportProductRepositoryInterface $importProductRepository)
    {
        $this->_importProduct = $importProductRepository;
    }

    public function index()
    {
        $data = $this->_importProduct->getImportDetail();
        $result = array(
            'status' => 'OK',
            'message'=> 'Fetch Successfully',
            'data'=> $data
        );
        return response()->json($data,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            $data = $request->only('amount','export_price','import_price','product_id','import_id');
            $import_product =   $this->_importProduct->create($data);
            $return_data = $this->_importProduct->getImportDetailById($import_product->id);
            $result = array(
                'status' => 'OK',
                'message'=> 'Insert Successfully',
                'data'=> $this->_importProduct->getImportDetailById($import_product->id)
            );
            return response()->json($return_data,Response::HTTP_CREATED,[],JSON_NUMERIC_CHECK);
        }catch (Exception $e){
            $result = array(
                'status' => 'ER',
                'message'=> 'Insert Failed',
                'data'=> $this->_importProduct->getImportById($import_product->id)
            );
            return response()->json($return_data,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImportProduct  $importProduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_find = $this->_importProduct->find($id);
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
     * @param  \App\ImportProduct  $importProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ImportProduct $importProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImportProduct  $importProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data_find = $this->_importProduct->find($id);
            if (is_null($data_find)){
                return response()->json("Record is not found",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
            }
            $this->_importProduct->update($id,$request->only('amount','export_price','import_price','product_id','import_id'));
            $return_data = $this->_importProduct->getImportDetailById($id);
            $result = array(
                'status' => 'OK',
                'message'=> 'Update Successfully',
                'data'=> $this->_importProduct->getImportDetailById($id)
            );
            return response()->json($return_data,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
        } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message'=> 'Update Failed',
                'data'=> ''
            );
            return response()->json($return_data,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImportProduct  $importProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $import_product =  $this->_importProduct->delete($id);
            $result = array(
                'status' => 'OK',
                'message'=> 'Delete Successfully',
                'data'=> $import_product
            );
            return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
        } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message'=> 'Delete Failed',
                'data'=> 'ER'
            );
            return response()->json($result,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
        }
    }
}
