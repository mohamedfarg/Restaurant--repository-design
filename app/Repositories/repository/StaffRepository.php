<?php

namespace App\Repositories\repository;

use App\Models\Staff;


use App\Repositories\Interfaces\StaffRepositoryInterface;


class StaffRepository implements StaffRepositoryInterface {
    public function getAllStaff() {
        return Staff::all();
    }

    public function getStaffById($id) {
        return Staff::findOrFail($id);
    }

    public function createStaff(array $data) {
        return Staff::create($data);
    }

    public function updateStaff($id, array $data) {
        $staff = Staff::findOrFail($id);
        $staff->update($data);
        return $staff;
    }

    public function deleteStaff($id) {
        Staff::destroy($id);
    }
}


touch app/Repositories/Services/BranchService.php
touch app/Repositories/Services/MenuService.php
touch app/Repositories/Services/MenuItemService.php
touch app/Repositories/Services/OrderService.php
touch app/Repositories/Services/OrderItemService.php
touch app/Repositories/Services/TableService.php
touch app/Repositories/Services/ReservationService.php
touch app/Repositories/Services/CustomerService.php
touch app/Repositories/Services/StaffService.php
touch app/Repositories/Services/InventoryService.php
touch app/Repositories/Services/DiscountService.php
touch app/Repositories/Services/PaymentService.php
touch app/Repositories/Services/DeliveryService.php
touch app/Repositories/Services/ReportService.php
touch app/Repositories/Services/SystemSettingService.php