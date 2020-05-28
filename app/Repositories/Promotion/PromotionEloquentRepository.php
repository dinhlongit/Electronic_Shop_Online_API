<?php


namespace App\Repositories\Promotion;


use App\Promotion;
use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\DB;

class PromotionEloquentRepository extends EloquentRepository implements PromotionRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Promotion::class;
    }


}
