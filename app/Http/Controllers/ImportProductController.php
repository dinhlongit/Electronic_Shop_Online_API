<?php

namespace App\Http\Controllers;

use App\ImportProduct;
use App\Repositories\ImportProduct\ImportProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

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

    public function index(Request $request)
    {
        $paginate = $request->only('limit', 'page');
        $data = $this->_importProduct->getImportDetail();

        if (count($paginate) > 0) {
            return response()->json($this->_importProduct->getImportDetail()->paginate($paginate['limit']));
        }
        return response()->json($this->_importProduct->getImportDetail()->get());

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'export_price' => 'required|numeric',
            'import_price' => 'required|numeric',
            'product_id' => 'required|numeric',
            'import_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }

        try {
            $data = $request->only('amount', 'export_price', 'import_price', 'product_id', 'import_id');
            $import_product = $this->_importProduct->create($data);
            $return_data = $this->_importProduct->getImportDetailById($import_product->id);
            $result = array(
                'status' => 'OK',
                'message' => 'Insert Successfully',
                'data' => $return_data
            );
            return response()->json($return_data, Response::HTTP_CREATED, [], JSON_NUMERIC_CHECK);
        } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message' => 'Insert Failed',
                'data' => ""
            );
            return response()->json($result, Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ImportProduct $importProduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_find = $this->_importProduct->find($id);
        if (is_null($data_find)) {
            return response()->json("Record id not found", Response::HTTP_NOT_FOUND, [], JSON_NUMERIC_CHECK);
        }
        $result = array(
            'status' => 'OK',
            'message' => 'Show Successfully',
            'data' => $data_find
        );
        return response()->json($result, Response::HTTP_OK, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ImportProduct $importProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ImportProduct $importProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ImportProduct $importProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'export_price' => 'required|numeric',
            'import_price' => 'required|numeric',
            'product_id' => 'required|numeric',
            'import_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }


        try {
            $data_find = $this->_importProduct->find($id);
            if (is_null($data_find)) {
                return response()->json("Record is not found", Response::HTTP_NOT_FOUND, [], JSON_NUMERIC_CHECK);
            }
            $this->_importProduct->update($id, $request->only('amount', 'export_price', 'import_price', 'product_id', 'import_id'));
            $return_data = $this->_importProduct->getImportDetailById($id);
            $result = array(
                'status' => 'OK',
                'message' => 'Update Successfully',
                'data' => $return_data
            );
            return response()->json($return_data, Response::HTTP_OK, [], JSON_NUMERIC_CHECK);
        } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message' => 'Update Failed',
                'data' => ''
            );
            return response()->json($result, Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ImportProduct $importProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $import_product = $this->_importProduct->delete($id);
            $result = array(
                'status' => 'OK',
                'message' => 'Delete Successfully',
                'data' => $import_product
            );
            return response()->json($result, Response::HTTP_OK, [], JSON_NUMERIC_CHECK);
        } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message' => 'Delete Failed',
                'data' => 'ER'
            );
            return response()->json($result, Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }
    }
}
