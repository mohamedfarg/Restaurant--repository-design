<?php

namespace App\Repositories\repository;




use App\Models\Menu;
use App\Repositories\Interfaces\MenuRepositoryInterface;

class MenuRepository implements MenuRepositoryInterface {
    public function getAllMenus() {
        return Menu::all();
    }

    public function getMenuById($id) {
        return Menu::findOrFail($id);
    }

    public function createMenu(array $data) {
        return Menu::create($data);
    }

    public function updateMenu($id, array $data) {
        $menu = Menu::findOrFail($id);
        $menu->update($data);
        return $menu;
    }

    public function deleteMenu($id) {
        Menu::destroy($id);
    }
}