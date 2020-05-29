<?php


namespace App\Repositories\Order;


use App\Product;
use App\Repositories\EloquentRepository;
use App\Transaction;
use DB;

class OrderEloquentRepository extends EloquentRepository implements OrderRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Transaction::class;
    }


    public function getOrders()
    {
        return DB::table('transactions as t')
               ->leftJoin('users','t.user_id','=','users.id')
               ->leftJoin('transaction_products','t.id','=','transaction_products.transaction_id')
               ->leftJoin('addresses','t.address_id','=','addresses.id')
               ->leftJoin('transaction_statuses','t.status_id','=','transaction_statuses.id')
               ->select('t.id','t.user_id','t.full_name', 'transaction_statuses.name as status',
                'addresses.name as city' ,
                DB::raw('SUM(transaction_products.price * transaction_products.amount) as total'))
               ->groupBy('t.id')
               ->get();

    }

     public function submitOrder($cart,$transaction_info){
        $cart = json_decode($cart);
        // cart include [id product , price, amount]
         //  $cart =
         $check = false;
         try{
             DB::beginTransaction();
             // create an transaction
             $transaction = Transaction::create($transaction_info);
             // add item into product_transaction
             foreach ($cart as $item) {
             $product = Product::find($item['product_id']);
             $product->transaction()->actach($item['price'],$item['amount'],$transaction->id);
             }

             DB::commit();
             $check = true;
         }catch (Exception $ex){
             DB::rollback();
             return $check;
         }
         return $check;
    }

}
