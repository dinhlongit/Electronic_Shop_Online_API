<?php


namespace App\Repositories\Address;


interface AddressRepositoryInterface
{
    public function getAddressById($id);
    public function getAddresses();
}
