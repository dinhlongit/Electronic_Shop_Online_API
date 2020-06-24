<?php


namespace App\Repositories\PromotionProduct;
use App\Promotion;
use DB;

use App\Repositories\EloquentRepository;

class PromotionProductEloquentRepository extends EloquentRepository implements PromotionProductRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return \App\PromotionProduct::class;
    }

    public function getPromotionDetail()
    {
        return DB::table('promotions')
            ->join('promotion_products','promotion_products.promotion_id','=','promotions.id')
            ->join('products','products.id','=','promotion_products.product_id')
            ->select('promotion_products.*','products.name as product_name','promotions.name as promotion_name')
            ->orderBy('promotion_products.id')
            ->get();
    }

    public function getPromotionDetailById($id)
    {
        return DB::table('promotion_products')
            ->join('products','promotion_products.product_id','=','products.id')
            ->join('promotions','promotion_products.promotion_id','=','promotions.id')
            ->select('promotion_products.*','products.name as product_name','promotions.name as promotion_name')
            ->where('promotion_products.id',$id)
            ->get();
    }


    public function getPromotionDetailByListId($list_id)
    {
        return DB::table('promotion_products')
            ->join('products','promotion_products.product_id','=','products.id')
            ->join('promotions','promotion_products.promotion_id','=','promotions.id')
            ->select('promotion_products.*','products.name as product_name','promotions.name as promotion_name')
            ->whereIn('products.id', $list_id)
            ->get();
    }

    public function addPromotionProduct($promotion_id, $list_product, $title)
    {
        $check = false;


        try{

            DB::beginTransaction();
            $promotion = Promotion::find($promotion_id);
            $promotion->products()->attach($list_product);
            $promotion->products()->update([
                "title" => $title
            ]);

            DB::commit();
            $check= true;
        }catch (Exception $ex){
            DB::rollback();
            return $check;
        }
        return $check;
    }


}
