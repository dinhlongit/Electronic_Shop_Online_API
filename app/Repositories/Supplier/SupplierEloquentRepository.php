<?php


namespace App\Repositories\Supplier;


use App\Repositories\EloquentRepository;

class SupplierEloquentRepository extends EloquentRepository implements SupplierRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Supplier::class;
    }
}
