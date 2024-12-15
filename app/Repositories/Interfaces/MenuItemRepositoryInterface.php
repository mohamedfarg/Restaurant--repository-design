<?php

namespace App\Repositories\Interfaces;


interface MenuItemRepositoryInterface
{
    public function getAllMenuItems();
    public function getMenuItemById($id);
    public function createMenuItem(array $data);
    public function updateMenuItem($id, array $data);
    public function deleteMenuItem($id);
}
