<?php


namespace App\Repositories\Import;


interface ImportRepositoryInterface
{
    public function getImports();
    public function getImmportById($id);
    public function getImportId($id);
}
