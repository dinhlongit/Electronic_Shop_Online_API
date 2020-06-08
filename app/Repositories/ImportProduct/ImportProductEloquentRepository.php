<?php


namespace App\Repositories\ImportProduct;


use App\Repositories\EloquentRepository;
use App\Repositories\Import\ImportRepositoryInterface;

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
}
