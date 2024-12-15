<?php

namespace App\Repositories\Interfaces;


interface TableRepositoryInterface
{
    public function getAllTables();
    public function getTableById($id);
    public function createTable(array $data);
    public function updateTable($id, array $data);
    public function deleteTable($id);
}
