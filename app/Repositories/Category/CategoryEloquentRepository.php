<?php


namespace App\Repositories\Category;


use App\Category;
use App\Repositories\EloquentRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
       return \App\Category::class;
    }

    public function getCategories()
    {
      //  \DB::connection()->enableQueryLog();
        $data = Category::where('parrent_id',null)->with('childrenCategories')->get()->toArray();
      //  dd($query = \DB::getQueryLog());
       return $result = array(
            'status' => 'OK',
            'message'=> 'Fetch Successfully',
            'data'=> $data
        );


    }
}
