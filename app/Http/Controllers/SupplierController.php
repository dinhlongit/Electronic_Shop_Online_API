<?php

namespace App\Http\Controllers;

use App\Repositories\Supplier\SupplierRepositoryInterface;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class SupplierController extends Controller
{
    private $_supplierRepository;

    public function __construct(SupplierRepositoryInterface $supplierRepository)
    {
        $this->_supplierRepository = $supplierRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->_supplierRepository->getAll();
        return response()->json($result, Response::HTTP_OK, [], JSON_NUMERIC_CHECK);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }

        try {

            $data = $request->only('name');
            $supplier = $this->_supplierRepository->create($data);
            $result = array(
                'status' => 'OK',
                'message' => 'Insert Successfully',
                'data' => $supplier
            );
            return response()->json($result, Response::HTTP_CREATED, [], JSON_NUMERIC_CHECK);
        } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message' => 'Insert Failed',
                'data' => ''
            );
            return response()->json($result, Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_find = $this->_supplierRepository->find($id);

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
     * @param \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }

        try {
            $data_find = $this->_supplierRepository->find($id);
            if (is_null($data_find)) {
                return response()->json("Record is not found", Response::HTTP_NOT_FOUND, [], JSON_NUMERIC_CHECK);
            }
            $data = $this->_supplierRepository->update($id, $request->only('name'));
            $result = array(
                'status' => 'OK',
                'message' => 'Update Successfully',
                'data' => $data
            );
            return response()->json($result, Response::HTTP_OK, [], JSON_NUMERIC_CHECK);
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
     * @param \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $data_find = $this->_supplierRepository->find($id);
            if (is_null($data_find)) {
                return response()->json("Record is not found", Response::HTTP_NOT_FOUND, [], JSON_NUMERIC_CHECK);
            }
            $data = $this->_supplierRepository->delete($id);
            $result = array(
                'status' => 'OK',
                'message' => 'Delete Successfully',
                'data' => $data
            );
            return response()->json($result, Response::HTTP_NO_CONTENT, [], JSON_NUMERIC_CHECK);
        } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message' => 'Delete Failed',
                'data' => ''
            );
            return response()->json($result, Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }
    }
}
