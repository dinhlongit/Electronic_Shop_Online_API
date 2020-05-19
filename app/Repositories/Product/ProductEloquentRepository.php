<?php


namespace App\Repositories\Product;


use App\Product;
use App\Repositories\EloquentRepository;
use App\User;
use DB;

class ProductEloquentRepository extends EloquentRepository implements ProductRepositoryInterface
{


    /**
     * get model
     * @return string
     */
    public function getModel()
    {
       return \App\Product::class;
    }

    public function getProducts()
    {
        return DB::table('products')
                ->leftJoin('categories','products.category_id','=','categories.id')
                ->leftJoin('producers','producers.id','=','products.producer_id')
                ->select('products.id','products.name','products.photo','products.description','products.information','categories.name as category','producers.name as producer')
                ->get();

    }

    public function getProductByCategory($id)
    {
        return DB::table('products')
                ->leftJoin('categories','products.category_id','=','categories.id')
                ->leftJoin('producers','producers.id','=','products.producer_id')
                ->where('categories.id',$id)
               ->orWhere('categories.parrent_id',$id)
               ->select('products.id','products.name','products.photo','products.description','products.information','categories.name as category','producers.name as producer')
                ->get();

    }







}
