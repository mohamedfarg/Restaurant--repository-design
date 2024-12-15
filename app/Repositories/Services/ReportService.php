<?php

namespace App\Services;

use App\Repositories\repository\BranchRepository;

class BranchService {
    protected $branchRepository;

    public function __construct(BranchRepository $branchRepository) {
        $this->branchRepository = $branchRepository;
    }

    public function getAllBranches() {
        return $this->branchRepository->getAllBranches();
    }

    public function getBranchById($id) {
        return $this->branchRepository->getBranchById($id);
    }

    public function createBranch(array $data) {
        return $this->branchRepository->createBranch($data);
    }

    public function updateBranch($id, array $data) {
        return $this->branchRepository->updateBranch($id, $data);
    }

    public function deleteBranch($id) {
        return $this->branchRepository->deleteBranch($id);
    }
}
