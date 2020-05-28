<?php

namespace App\Http\Controllers;

use App\Product;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    private $_productRepository;
    private $_categoryRepository;

    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository)
    {
     $this->_productRepository = $productRepository;
     $this->_categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //sdd($this->_productRepository->getProducts());
        return response()->json($this->_productRepository->getProducts());
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data_find = $this->_productRepository->find($id);
        if (is_null($data_find)){
            return response()->json("Record id not found",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
        }

        $result = array(
            'status' => 'OK',
            'message'=> 'Show Successfully',
            'data'=> $this->_productRepository->showProductById($id)
        );
        return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

    }

    public function getProductByCategory($cat){

        $data_find = $this->_categoryRepository->find($cat);
        if (is_null($data_find)){
            return response()->json("Record id not found",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
        }

        $result = array(
            'status' => 'OK',
            'message'=> 'Show Successfully',
            'data'=> $this->_productRepository->getProductByCategory($cat)
        );
        return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
