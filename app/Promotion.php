<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $guarded=[];
   public function promotionproduct(){
      $this->hasMany('App/PromotionProduct','promotion_id','id');
    }
    public function products(){
        return $this->belongsToMany(\App\Product::class,'promotion_products')->withPivot('product_id','promotion_id','title');
    }
    //
}
