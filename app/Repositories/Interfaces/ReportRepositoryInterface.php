<?php

namespace App\Repositories\Interfaces;


interface ReportRepositoryInterface
{
    public function getAllReports();
    public function getReportById($id);
    public function createReport(array $data);
    public function updateReport($id, array $data);
    public function deleteReport($id);
}
