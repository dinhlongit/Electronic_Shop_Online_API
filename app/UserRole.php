<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $guarded=[];
    public function role(){
        $this->belongsTo('App/Role','role_id','id');
    }

    public function user(){
        $this->belongsTo('App/User','user_id','id');
    }
}
