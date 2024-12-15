<?php

namespace App\Repositories\Interfaces;


interface PaymentRepositoryInterface
{
    public function getAllPayments();
    public function getPaymentById($id);
    public function createPayment(array $data);
    public function updatePayment($id, array $data);
    public function deletePayment($id);
}
