<?php


namespace App\Services;

use App\Repositories\repository\MenuRepository;



class MenuService {
    protected $menuRepository;

    public function __construct(MenuRepository $menuRepository) {
        $this->menuRepository = $menuRepository;
    }

    public function getAllMenus() {
        return $this->menuRepository->getAllMenus();
    }

    public function getMenuById($id) {
        return $this->menuRepository->getMenuById($id);
    }

    public function createMenu(array $data) {
        return $this->menuRepository->createMenu($data);
    }

    public function updateMenu($id, array $data) {
        return $this->menuRepository->updateMenu($id, $data);
    }

    public function deleteMenu($id) {
        return $this->menuRepository->deleteMenu($id);
    }
}
