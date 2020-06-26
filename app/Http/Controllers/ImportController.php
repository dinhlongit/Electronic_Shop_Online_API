<?php

namespace App\Http\Controllers;

use App\Import;
use App\Repositories\Import\ImportRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_importRepository;

    public function __construct(ImportRepositoryInterface $importRepository)
    {
        $this->_importRepository = $importRepository;
    }

    public function index(Request $request)
    {
        $paginate = $request->only('limit', 'page');
        if (count($paginate) > 0) {
            return response()->json($this->_importRepository->getImports()->paginate($paginate['limit']));
        }
        return response()->json($this->_importRepository->getImports()->get());
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
            'name' => 'required',
            'import_date' => 'required',
            'supplier_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }

        try {
            $date = Carbon::createFromFormat('d-m-Y', $request->get('import_date'));
            $import = $this->_importRepository->create([
                'import_date' => $date->format('Y-m-d'),
                'user_id' => $request->get('user_id'),
                'name' => $request->get('name'),
                'supplier_id' => $request->get('supplier_id')
            ]);


            $result = array(
                'status' => 'OK',
                'message' => 'Insert Successfully',
                'data' => $this->_importRepository->getImportId($import->id)
            );
            return response()->json($result, Response::HTTP_CREATED, [], JSON_NUMERIC_CHECK);
        } catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message' => 'Insert Failed',
                'data' => 'ERR'
            );
            return response()->json($result, Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Import $import
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_find = $this->_importRepository->find($id);

        if (is_null($data_find)) {
            return response()->json("Record id not found", Response::HTTP_NOT_FOUND, [], JSON_NUMERIC_CHECK);
        }
        $data = $this->_importRepository->getImmportById($id);
        $result = array(
            'status' => 'OK',
            'message' => 'Show Successfully',
            'data' => $data
        );
        return response()->json($result, Response::HTTP_OK, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Import $import
     * @return \Illuminate\Http\Response
     */
    public function edit(Import $import)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Import $import
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'import_date' => 'required',
            'supplier_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), Response::HTTP_BAD_REQUEST, [], JSON_NUMERIC_CHECK);
        }

        try {
            $data_find = $this->_importRepository->find($id);
            if (is_null($data_find)) {
                return response()->json("Record is not found", Response::HTTP_NOT_FOUND, [], JSON_NUMERIC_CHECK);
            }
            $date = Carbon::createFromFormat('d-m-Y', $request->get('import_date'));

            $data = $this->_importRepository->update($id, [
                'import_date' => $date->format('Y-m-d'),
                'user_id' => $request->get('user_id'),
                'name' => $request->get('name'),
                'supplier_id' => $request->get('supplier_id')
            ]);
            $result = array(
                'status' => 'OK',
                'message' => 'Update Successfully',
                'data' => $this->_importRepository->getImportId($id)
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
     * @param \App\Import $import
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_find = $this->_importRepository->find($id);

        if (is_null($data_find)) {
            return response()->json("Record id not found", Response::HTTP_NOT_FOUND, [], JSON_NUMERIC_CHECK);
        }
        try {
            $imp = $this->_importRepository->delete($id);
            $result = array(
                'status' => 'OK',
                'message' => 'Delete Successfully',
                'data' => $data_find
            );
            return response()->json($result, Response::HTTP_OK, [], JSON_NUMERIC_CHECK);
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
