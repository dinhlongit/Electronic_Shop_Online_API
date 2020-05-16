<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];

    public function categories()
    {
        return $this->hasMany(Category::class,'parrent_id');
    }
    public function childrenCategories()
    {
        return $this->hasMany(Category::class,'parrent_id')->with('categories');
    }

}
