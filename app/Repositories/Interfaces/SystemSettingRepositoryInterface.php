<?php

namespace App\Repositories\Interfaces;


interface SystemSettingRepositoryInterface
{
    public function getAllSettings();
    public function getSettingById($id);
    public function createSetting(array $data);
    public function updateSetting($id, array $data);
    public function deleteSetting($id);
}
