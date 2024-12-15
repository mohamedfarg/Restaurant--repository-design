<?php

namespace App\Services;

use App\Repositories\repository\MenuItemRepository;



class MenuItemService {
    protected $menuItemRepository;

    public function __construct(MenuItemRepository $menuItemRepository) {
        $this->menuItemRepository = $menuItemRepository;
    }

    public function getAllMenuItems() {
        return $this->menuItemRepository->getAllMenuItems();
    }

    public function getMenuItemById($id) {
        return $this->menuItemRepository->getMenuItemById($id);
    }

    public function createMenuItem(array $data) {
        return $this->menuItemRepository->createMenuItem($data);
    }

    public function updateMenuItem($id, array $data) {
        return $this->menuItemRepository->updateMenuItem($id, $data);
    }

    public function deleteMenuItem($id) {
        return $this->menuItemRepository->deleteMenuItem($id);
    }
}
