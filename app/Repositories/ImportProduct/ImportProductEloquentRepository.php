<?php


namespace App\Repositories\ImportProduct;


use App\Repositories\EloquentRepository;
use App\Repositories\Import\ImportRepositoryInterface;
use DB;

class ImportProductEloquentRepository extends EloquentRepository implements ImportProductRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\ImportProduct::class;
    }


    public function getImportDetail()
    {
        return DB::table('import_products')
            ->join('products','import_products.product_id','=','products.id')
            ->join('imports','import_products.import_id','=','imports.id')
            ->select('import_products.*','products.name as product_name','imports.name as import_name')
            ->get();
    }

    public function getImportDetailById($id)
    {
        return DB::table('import_products')
            ->join('products','import_products.product_id','=','products.id')
            ->join('imports','import_products.import_id','=','imports.id')
            ->select('import_products.*','products.name as product_name','imports.name as import_name')
            ->where("import_products.id",$id)
            ->get();
    }

}
