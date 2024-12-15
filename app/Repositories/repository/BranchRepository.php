<?php

namespace App\Repositories\repository;

use App\Models\Branch;
use App\Repositories\Interfaces\BranchRepositoryInterface;

class BranchRepository implements BranchRepositoryInterface {
    public function getAllBranches() {
        return Branch::all();
    }

    public function getBranchById($id) {
        return Branch::findOrFail($id);
    }

    public function createBranch(array $data) {
        return Branch::create($data);
    }

    public function updateBranch($id, array $data) {
        $branch = Branch::findOrFail($id);
        $branch->update($data);
        return $branch;
    }

    public function deleteBranch($id) {
        Branch::destroy($id);
    }
}