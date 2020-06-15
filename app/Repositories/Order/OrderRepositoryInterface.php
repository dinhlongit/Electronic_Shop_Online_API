<?php

namespace App\Repositories\Order;

interface OrderRepositoryInterface
{
    public function getOrders();
    public function getOrderById($id);
    public function submitOrder($cart,$transaction_info);
    public function getOrderByUser($user_id);
}
