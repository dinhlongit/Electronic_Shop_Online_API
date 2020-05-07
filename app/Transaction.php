<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded=[];
    public function transactionstatus(){
        return $this->belongsTo('App\TransactionStatus','status_id','id');
    }
    public function transactionproduct() {
        return $this->hasMany('App\TransactionProduct','transaction_id','id');
    }
}
