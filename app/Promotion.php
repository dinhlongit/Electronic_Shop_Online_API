<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $guarded=[];
   public function promotionproduct(){
      $this->hasMany('App/PromotionProduct','promotion_id','id');
    }
    //
}
