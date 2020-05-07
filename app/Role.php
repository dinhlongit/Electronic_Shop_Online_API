<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function userrole(){
        $this->hasMany('App/UserRole','role_id','id');
    }
}
