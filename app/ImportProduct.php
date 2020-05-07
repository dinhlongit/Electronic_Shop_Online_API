<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportProduct extends Model
{
    protected $guarded=[];
    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function import(){
        return $this->belongsTo('App\Import','import_id','id');
    }
}
