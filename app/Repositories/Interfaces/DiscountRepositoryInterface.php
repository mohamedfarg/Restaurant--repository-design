<?php

namespace App\Repositories\Interfaces;


interface DiscountRepositoryInterface
{
    public function getAllDiscounts();
    public function getDiscountById($id);
    public function createDiscount(array $data);
    public function updateDiscount($id, array $data);
    public function deleteDiscount($id);
}
