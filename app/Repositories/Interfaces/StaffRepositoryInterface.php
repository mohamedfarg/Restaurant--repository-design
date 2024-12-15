<?php

namespace App\Repositories\Interfaces;


interface StaffRepositoryInterface
{
    public function getAllStaff();
    public function getStaffById($id);
    public function createStaff(array $data);
    public function updateStaff($id, array $data);
    public function deleteStaff($id);
}
