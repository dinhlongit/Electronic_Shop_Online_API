<?php


namespace App\Repositories\Import;


use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\DB;

class ImportEloquentRepository extends EloquentRepository implements ImportRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
       return \App\Import::class;
    }

    public function getImports()
    {
        return DB::table('imports')
               ->leftJoin('users','imports.user_id','=','users.id')
               ->leftJoin('suppliers','suppliers.id','=','imports.supplier_id')
               ->leftJoin('import_products','imports.id','=','import_products.import_id')
               ->select('imports.*','users.name as full_name','suppliers.name',
                   DB::raw('SUM(import_products.amount * import_products.import_price) as total'))
               ->groupBy('imports.id','users.name','suppliers.name')
                ->get();
    }
}
