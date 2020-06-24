<?php


namespace App\Repositories\Report;


use App\Repositories\EloquentRepository;
use App\Repositories\RepositoryInterface;
use Illuminate\Support\Facades\App;
use DB;

class ReportEloquentRepository implements ReportRepositoryInterface
{
    public function getTranSactionStatus()
    {
        return DB::table('transactions as t')
            ->leftJoin('users','t.user_id','=','users.id')
            ->leftJoin('transaction_products','t.id','=','transaction_products.transaction_id')
            ->leftJoin('addresses','t.address_id','=','addresses.id')
            ->leftJoin('transaction_statuses','t.status_id','=','transaction_statuses.id')
            ->select(DB::raw('COUNT(t.status_id) as number_order'),'t.transaction_statuses')
            ->groupBy('t.status_id')
            ->get();
    }


}
