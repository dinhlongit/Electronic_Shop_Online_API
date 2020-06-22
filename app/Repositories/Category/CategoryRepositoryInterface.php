<?php


namespace App\Repositories\Category;


interface CategoryRepositoryInterface
{
    public function getCategories();
    public function getSubCategories();
    public function getAllCategory();

}
