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
            ->select('t.status_id','t.user_id','t.full_name',
                't.street','addresses.name as city','users.phone_number','users.name',
                DB::raw('SUM(transaction_products.price * transaction_products.amount) as total')
                , 'transaction_statuses.name as status')
            ->groupBy('t.status_id')
            ->get();
    }


}
