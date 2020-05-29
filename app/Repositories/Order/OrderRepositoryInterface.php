<?php


namespace App\Repositories\Order;


interface OrderRepositoryInterface
{
    public function getOrders();
    public function submitOrder($cart,$transaction_info);
}
