<?php

namespace App\Http\Controllers;

use App\PromotionProduct;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\PromotionProduct\PromotionProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PromotionProductController extends Controller
{


    private $_promotionProductRepository,$_productRepository;
    public function __construct(PromotionProductRepositoryInterface $promotionProductRepository, ProductRepositoryInterface $productRepository)
    {
        $this->_promotionProductRepository = $promotionProductRepository;
        $this->_productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->_promotionProductRepository->getPromotionDetail();
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
      $promotion_id = $request->only("promotion_id");
      $category_id = $request->only("category_id");
      $title = $request->only("title");
      $listproduct = $this->_productRepository->getProductByCategory($category_id)->pluck("id")->toArray();
      if (count($listproduct) == 0 ) {
      return response()->json("Not have Product In This Category",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
      }
      $check =  $this->_promotionProductRepository->addPromotionProduct($promotion_id['promotion_id'],$listproduct,$title['title']);
      if ($check){
       $return_data = $this->_promotionProductRepository->getPromotionDetailByListId($listproduct);

       return response()->json($return_data,Response::HTTP_CREATED,[],JSON_NUMERIC_CHECK);
      }else{
          $result = array(
              'status' => 'ER',
              'message'=> 'Insert Failed',
              'data'=> ""
          );
          return response()->json($result,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
      }
        }catch (Exception $e) {
            $result = array(
                'status' => 'ER',
                'message'=> 'Insert Failed',
                'data'=> ""
            );
      return response()->json($result,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PromotionProduct  $promotionProduct
     * @return \Illuminate\Http\Response
     */
    public function show(PromotionProduct $promotionProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PromotionProduct  $promotionProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(PromotionProduct $promotionProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PromotionProduct  $promotionProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PromotionProduct $promotionProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PromotionProduct  $promotionProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product =  $this->_promotionProductRepository->delete($id);
            $result = array(
                'status' => 'OK',
                'message'=> 'Delete Successfully',
                'data'=> $product
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
