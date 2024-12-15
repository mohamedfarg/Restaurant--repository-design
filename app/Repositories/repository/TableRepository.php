<?php

namespace App\Repositories\repository;

use App\Models\Table;
use App\Repositories\Interfaces\TableRepositoryInterface;

class TableRepository implements TableRepositoryInterface {
    public function getAllTables() {
        return Table::all();
    }

    public function getTableById($id) {
        return Table::findOrFail($id);
    }

    public function createTable(array $data) {
        return Table::create($data);
    }

    public function updateTable($id, array $data) {
        $table = Table::findOrFail($id);
        $table->update($data);
        return $table;
    }

    public function deleteTable($id) {
        Table::destroy($id);
    }
}
