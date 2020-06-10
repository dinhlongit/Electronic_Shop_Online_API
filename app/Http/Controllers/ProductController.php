<?php

namespace App\Http\Controllers;
use Exception;
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
      $this->middleware('auth.role:Admin',['except' => ['index','show','filterProductByPrice','getPhotosOfProduct','getSaleProduct','getNewProduct','getProductByCategory']]);
     $this->_productRepository = $productRepository;
     $this->_categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate = $request->only('limit','page');
        if (count($paginate) > 0){
            return response()->json($this->_productRepository->getProducts()->paginate($paginate['limit']));
        }
        return response()->json($this->_productRepository->getProducts()->get());
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
            if ($request->hasFile('photo')){
                $file = $request->file('photo');
                $file_format = $file->getClientOriginalExtension();
                if ($file_format != "jpg" && $file_format != "png" && $file_format != "jpeg"){
                    return  response()->json(['content'=>'Format File Not Accept',"error"=>true],400);
                }
                $name=str_random(4)."_".$file->getClientOriginalName();
                $file->move("upload/product",$name);

            }   else {
                return  response()->json(['content'=>'Please Choose File',"error"=>true],400);
            }
            $data = $request->only('name','description','information','category_id','producer_id','status_id')+['photo' => $name];
            $product =   $this->_productRepository->create($data);
            $result = array(
                'status' => 'OK',
                'message'=> 'Insert Successfully',
                'data'=> $product
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

    public function getProductByCategory(Request $request,$cat){

        $data_find = $this->_categoryRepository->find($cat);
        if (is_null($data_find)){
            return response()->json("Record id not found",Response::HTTP_NOT_FOUND,[],JSON_NUMERIC_CHECK);
        }

        $paginate = $request->only('limit','page');
        if (count($paginate) > 0){
            $result = array(
                'status' => 'OK',
                'message'=> 'Show Successfully',
                'data'=> $this->_productRepository->getProductByCategory($cat)->paginate($paginate['limit'])
            );
            return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
        }

        $result = array(
            'status' => 'OK',
            'message'=> 'Show Successfully',
            'data'=> $this->_productRepository->getProductByCategory($cat)->get()
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
    public function update(Request $request, $id)
    {

        try{
            if ($request->hasFile('photo')){
                $file = $request->file('photo');
                $file_format = $file->getClientOriginalExtension();
                if ($file_format != "jpg" && $file_format != "png" && $file_format != "jpeg"){
                    return  response()->json(['content'=>'Format File Not Accept',"error"=>true],400);
                }
                $name=str_random(4)."_".$file->getClientOriginalName();
                $file->move("upload/product",$name);

            }   else {
                return  response()->json(['content'=>'Please Choose File',"error"=>true],400);
            }
            $data = $request->only('name','description','information','category_id','producer_id','status_id')+['photo' => $name];
            $product =   $this->_productRepository->update($id,$data);
            $result = array(
                'status' => 'OK',
                'message'=> 'Updated Successfully',
                'data'=> $product
            );
            return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
        }catch (Exception $e){
            $result = array(
                'status' => 'ER',
                'message'=> 'Updated Failed',
                'data'=> ''
            );
            return response()->json($result,Response::HTTP_BAD_REQUEST,[],JSON_NUMERIC_CHECK);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $pr =  $this->_productRepository->delete($id);
            $result = array(
                'status' => 'OK',
                'message'=> 'Delete Successfully',
                'data'=> $pr
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

    public function getNewProduct(Request $request){
        $paginate = $request->only('limit','page');
        if (count($paginate) > 0){
            return response()->json($this->_productRepository->getNewProduct()->paginate($paginate['limit']));
        }
        return response()->json($this->_productRepository->getProducts()->get());
    }

    public function getSaleProduct(Request $request){
        $paginate = $request->only('limit','page');
        if (count($paginate) > 0){
            return response()->json($this->_productRepository->getProducts()->paginate($paginate['limit']));
        }
        return response()->json($this->_productRepository->getSaleProduct()->get());
    }

    public function filterProductByPrice(Request $request){
        $limit = $request->only('start','end');
        if (count($limit) == 0 ){
            return response()->json("Please fill param {start} {end} price",400);
        }
        $paginate = $request->only('limit','page');
        if (count($paginate) > 0){
            return response()->json($this->_productRepository->filterProductByPrice($limit['start'],$limit['end'])->paginate($paginate['limit']));
        }
        return response()->json($this->_productRepository->filterProductByPrice($limit['start'],$limit['end'])->get());
    }

    public function getPhotosOfProduct($id){
        return response()->json($this->_productRepository->getPhotosOfProduct($id),200);
    }

}
