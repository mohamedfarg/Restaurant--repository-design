<?php

namespace App\Repositories\repository;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface {
    public function getAllOrders() {
        return Order::all();
    }

    public function getOrderById($id) {
        return Order::findOrFail($id);
    }

    public function createOrder(array $data) {
        return Order::create($data);
    }

    public function updateOrder($id, array $data) {
        $order = Order::findOrFail($id);
        $order->update($data);
        return $order;
    }

    public function deleteOrder($id) {
        Order::destroy($id);
    }
}
