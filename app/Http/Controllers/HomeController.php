<?php

namespace App\Http\Controllers;

use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Producer\ProducerRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    private $_categoryRepository;
    private $_productRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository, ProductRepositoryInterface $productRepository)
    {
        $this->_categoryRepository = $categoryRepository;
        $this->_productRepository = $productRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $categories = $this->_categoryRepository->getCategories();


        $samsungphone = $this->_productRepository->getProductByCategory(14);
        $fan = $this->_productRepository->getProductByCategory(13);
        $fridge = $this->_productRepository->getProductByCategory(52);
        $tivi = $this->_productRepository->getProductByCategory(60);
        $bestsell = [
            array(
                "id"=> 11,
                "name"=> "Sony 2",
                "photo"=> "epK77FSq0Uu0At4ZtzTsAVF6rrBaw3DJaNTEzCwI.jpeg",
                "description"=> "u003cpu003eqqu0026lt;/pu0026gt;u003c/pu003e",
                "amount" => 115,
                "category"=> "Sony Xperia",
                "producer"=> "Sony",
                "price" => 8000000
            ),
            array(
                "id"=> 12,
                "name"=> "Sony 3",
                "photo"=> "8B24GjXCYt5IHbEekqlVaRHeI5YxS6UnsZpG29vr.jpeg",
                "description"=> "u003cpu003eqqu0026lt;/pu0026gt;u003c/pu003e",
                "amount" => 115,
                "category"=> "Sony Xperia",
                "producer"=> "Sony",
                 "price" => 9000000
            ),
            array(
                "id"=> 13,
                "name"=> "quat media 1",
                "photo"=> "3C0QlvpUzv67mpPjk8hm85nivnwWysbya6v7GsvF.png",
                "description"=> "u003cpu003enullu003c/pu003e",
                "amount" => 115,
                "category"=> "Quạt Điện Media",
                "producer"=> "Midea",
                "price" => 1000000
            )
        ];
        $newproduct =$this->_productRepository->getNewProduct();
        $saleproduct =$this->_productRepository->getSaleProduct();
        $result = array(
            'status' => 'OK',
            'message'=> 'Fetch Successfully',
            'data'=> ["categories" => $categories,
                      "products" => [
                         'samsungphone' => $samsungphone,
                         'fan' =>$fan,
                         'fridge' =>$fridge,
                         'tivi' =>$tivi
                     ],
                      "best_sells" => $bestsell,
                      "new_products" => $newproduct,
                      "sale_products" => $saleproduct,
                ]
        );
        return response()->json($result,Response::HTTP_OK,[],JSON_NUMERIC_CHECK);
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
