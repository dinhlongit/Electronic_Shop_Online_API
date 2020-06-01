<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function importproduct(){
        return $this->hasMany('App\Import_Product','import_id','id');
    }
    public function supplier(){
        return $this->belongsTo('App\Supplier','supplier_id','id');
    }

    public function products(){
        return $this->belongsToMany(\App\Product::class,'import_products')->withPivot('amount','export_price','import_price');
    }
}
