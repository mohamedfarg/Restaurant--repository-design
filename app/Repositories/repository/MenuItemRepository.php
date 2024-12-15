<?php

namespace App\Repositories\repository;

use App\Models\MenuItem;
use App\Repositories\Interfaces\MenuItemRepositoryInterface;

class MenuItemRepository implements MenuItemRepositoryInterface {
    public function getAllMenuItems() {
        return MenuItem::all();
    }

    public function getMenuItemById($id) {
        return MenuItem::findOrFail($id);
    }

    public function createMenuItem(array $data) {
        return MenuItem::create($data);
    }

    public function updateMenuItem($id, array $data) {
        $menuItem = MenuItem::findOrFail($id);
        $menuItem->update($data);
        return $menuItem;
    }

    public function deleteMenuItem($id) {
        MenuItem::destroy($id);
    }
}