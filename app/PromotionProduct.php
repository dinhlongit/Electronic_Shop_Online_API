<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionProduct extends Model
{
    protected $guarded=[];
    public function product()
    {
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function promotion()
    {
        return $this->belongsTo('App\Promotion','promotion_id','id');
    }
}
