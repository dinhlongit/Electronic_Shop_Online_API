<?php


namespace App\Repositories\Order;

use App\Product;
use App\Repositories\EloquentRepository;
use App\Transaction;
use App\User;
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
               ->select('t.id','t.user_id','t.full_name',
                't.street','addresses.name as city','users.phone_number','users.name',
                DB::raw('SUM(transaction_products.price * transaction_products.amount) as total')
                , 'transaction_statuses.name as status')
                ->groupBy('t.id');
    }


    public function getAmountProduct($id)
    {
        $nows = date(now()->toDateString());
        return DB::table('products as p')
            ->leftJoin('import_products', 'p.id', '=', 'import_products.product_id')
            ->select(
                DB::raw('SUM(import_products.amount) 
                 - (SELECT IFNULL(SUM(transaction_products.amount),0) FROM transaction_products 
                 INNER JOIN transactions ON transaction_products.transaction_id = transactions.id
                 INNER JOIN transaction_statuses ON transaction_statuses.id = transactions.status_id
                 WHERE transaction_products.product_id = p.id AND transaction_statuses.id <> 5)
                 AS amount'))
            ->where('p.id',$id)
            ->get()->toArray();
    }

     public function submitOrder($cart,$transaction_info){
        //$cart = '[{"product_id" : 1, "amount" : 3, "price" : 4, "tracsaction_id" : 2 }]';
         // transactioninfo = 'full_name', 'user_id',street,address_id,status_id,
         // ['Thi Nhan',4,'123 Nguyen Luong Bang',2,1],


         $nows = date(now()->toDateString());

         $newCart = [];
         foreach ($cart as $item){
             $amount = $this->getAmountProduct($item['product_id']);
             if ($amount[0]->amount <= 0){
                 return false;
             }
             $ar = Product::find($item['product_id'])->promotions
                 ->where('end_date','>=',$nows)
                 ->where('start_date','<=',$nows)->pluck('pivot.title')->toArray();
             $newItem = $item;

             if (count($ar)){
                 $newItem['price'] = $newItem['price']  * (100 - (int)$ar[0])/100;
             }
             $newCart[] = $newItem;
         }


         $check = false;
         try{
             DB::beginTransaction();
             // create an transaction
             $transaction = Transaction::create($transaction_info);

             foreach ($newCart as $item) {
             DB::table('transaction_products')->insert(
                  [
                      'product_id' => $item['product_id'],
                      'amount' => $item['amount'],
                      'price' => $item['price'],
                      'transaction_id' =>$transaction['id']
                  ]
              );
             }
             DB::commit();
             $check = true;
         }catch (Exception $ex){
             DB::rollback();
             return $check;
         }
         return $check;
    }


    public function getOrderByUser($user_id)
    {
        $trans = Transaction::where('user_id', $user_id)->pluck('id')->toArray();
        $bigdata = collect();
        foreach ($trans as $tran) {
           $data = collect();
          $tracsaction = Transaction::find($tran);
          $status = DB::table('transactions as t')
                   ->join('transaction_statuses','transaction_statuses.id','=','t.status_id')
                   ->where('t.id',$tran)
                   ->select('transaction_statuses.name as status','t.updated_at as order_date')
                   ->get();
            $status = collect($status);
            $data = $data->concat($tracsaction->products)->concat($status);
            $bigdata = $bigdata->add($data);
        }
       return $bigdata;
    }

    public function getOrderById($id)
    {
        return DB::table('transactions as t')
            ->leftJoin('users','t.user_id','=','users.id')
            ->leftJoin('transaction_products','t.id','=','transaction_products.transaction_id')
            ->leftJoin('addresses','t.address_id','=','addresses.id')
            ->leftJoin('transaction_statuses','t.status_id','=','transaction_statuses.id')
            ->select('t.id','t.user_id','t.full_name',
                't.street','addresses.name as city','users.phone_number','users.name',
                DB::raw('SUM(transaction_products.price * transaction_products.amount) as total')
                , 'transaction_statuses.name as status')
            ->groupBy('t.id')
            ->having('t.id',$id)
            ->get();
    }



    public function getProductOfOrder($id){
        $order = Transaction::find($id);
        return $order->products;
    }
}
