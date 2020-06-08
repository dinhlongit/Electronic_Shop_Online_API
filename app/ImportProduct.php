<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportProduct extends Model
{
    protected $guarded=[];

    protected $fillable = ['amount','export_price','import_price','product_id','import_id'];
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function import(){
        return $this->belongsTo('App\Import','import_id','id');
    }
}
