<?php


namespace App\Repositories\Address;


use App\Repositories\EloquentRepository;
use DB;

class AddressEloquentRepository extends EloquentRepository implements AddressRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
      return \App\Address::class;
    }


    public function getAddressById($id)
    {
        return DB::table('addresses')->where('parrent_id',$id)->get();
    }

    public function getAddresses()
    {
        return DB::table('addresses')->where('parrent_id',null)->get();
    }
}
