<?php


namespace App\Repositories\Producer;


use App\Repositories\EloquentRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class ProducerEloquentRepository extends EloquentRepository implements ProducerRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Producer::class;
    }


}
