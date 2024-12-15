<?php

namespace App\Services;

use App\Repositories\repository\OrderRepository;


class OrderService {
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository) {
        $this->orderRepository = $orderRepository;
    }

    public function getAllOrders() {
        return $this->orderRepository->getAllOrders();
    }

    public function getOrderById($id) {
        return $this->orderRepository->getOrderById($id);
    }

    public function createOrder(array $data) {
        return $this->orderRepository->createOrder($data);
    }

    public function updateOrder($id, array $data) {
        return $this->orderRepository->updateOrder($id, $data);
    }

    public function deleteOrder($id) {
        return $this->orderRepository->deleteOrder($id);
    }
}
