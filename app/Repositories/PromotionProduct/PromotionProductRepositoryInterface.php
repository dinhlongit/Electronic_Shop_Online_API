<?php


namespace App\Repositories\PromotionProduct;


interface PromotionProductRepositoryInterface
{
    public function getPromotionDetail();
    public function getPromotionDetailById($id);
    public function addPromotionProduct($promotion_id, $list_product, $title);
    public function getPromotionDetailByListId($list_id);
}
