<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function producer()
    {
        return $this->belongsTo('App/Producer','producer_id','id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function photoarray()
    {
            return $this->hasMany('App\PhotoArray','product_id','id');
    }

    public function promotionproduct()
    {
        return $this->hasMany('App\PromotionProduct','product_id','id');
    }

    public function promotions(){
        return $this->belongsToMany(\App\Promotion::class,'promotion_products')->withPivot('title','product_id','promotion_id');
    }
    public function reviews(){
        return $this->hasMany('App\Review','product_id','id');
    }


    public function importproduct(){
        return $this->hasMany("App\ImportProduct","product_id","id");
    }

    public function transactions(){
        return $this->belongsToMany("App\Transaction","transaction_products")->withPivot('product_id','transantion_id','price','amount');
    }


    public function productstatus()
    {
        return $this->hasMany('App\ProductStatus','status_id','id');
    }

    //....
}
