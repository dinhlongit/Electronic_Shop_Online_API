<?php

namespace App\Http\Controllers;

use App\Import;
use App\Repositories\Import\ImportRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private  $_importRepository;

    public function __construct(ImportRepositoryInterface $importRepository)
    {
        $this->_importRepository = $importRepository;
    }

    public function index()
    {
        $result = $this->_importRepository->getImports();
        return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
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
        try {

            $date = Carbon::createFromFormat('d-m-Y',$request->get('import_date'));

            $this->_importRepository->create([
                'import_date' => $date->format('Y-m-d'),
                'user_id' => $request->get('user_id'),
                'supplier_id' => $request->get('user_id')
            ]);
            $result = array(
                'status' => 'OK',
                'message' => 'Insert Successfully',
                'data' => ''
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
     * @param  \App\Import  $import
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_find = $this->_importRepository->find($id);

        if (is_null($data_find)){
            return response()->json("Record id not found",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
        }
        $data = $this->_importRepository->getImmportById($id);
        $result = array(
            'status' => 'OK',
            'message'=> 'Show Successfully',
            'data'=> $data
        );
        return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Import  $import
     * @return \Illuminate\Http\Response
     */
    public function edit(Import $import)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Import  $import
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data_find = $this->_importRepository->find($id);
            if (is_null($data_find)){
                return response()->json("Record is not found",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
            }
            $date = Carbon::createFromFormat('d-m-Y',$request->get('import_date'));

            $this->_importRepository->update($id,[
                'import_date' => $date->format('Y-m-d'),
                'user_id' => $request->get('user_id'),
                'supplier_id' => $request->get('user_id')
            ]);
            $result = array(
                'status' => 'OK',
                'message'=> 'Update Successfully',
                'data'=> $data_find
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
     * @param  \App\Import  $import
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
