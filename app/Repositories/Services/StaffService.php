<?php


namespace App\Services;

use App\Repositories\repository\StaffRepository;


class StaffService {
    protected $staffRepository;

    public function __construct(StaffRepository $staffRepository) {
        $this->staffRepository = $staffRepository;
    }

    public function getAllStaff() {
        return $this->staffRepository->getAllStaff();
    }

    public function getStaffById($id) {
        return $this->staffRepository->getStaffById($id);
    }

    public function createStaff(array $data) {
        return $this->staffRepository->createStaff($data);
    }

    public function updateStaff($id, array $data) {
        return $this->staffRepository->updateStaff($id, $data);
    }

    public function deleteStaff($id) {
        return $this->staffRepository->deleteStaff($id);
    }
}