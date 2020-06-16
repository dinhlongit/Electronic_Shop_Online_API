<?php


namespace App\Repositories\ImportProduct;


interface ImportProductRepositoryInterface
{
    public function getImportDetail();
    public function getImportDetailById($id);
}
