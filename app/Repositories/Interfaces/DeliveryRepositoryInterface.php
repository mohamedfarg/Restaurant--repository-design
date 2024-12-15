<?php

namespace App\Repositories\Interfaces;


interface DeliveryRepositoryInterface
{
    public function getAllDeliveries();
    public function getDeliveryById($id);
    public function createDelivery(array $data);
    public function updateDelivery($id, array $data);
    public function deleteDelivery($id);
}
