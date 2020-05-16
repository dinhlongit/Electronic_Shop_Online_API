<?php
namespace App\Repositories\Post;
use App\Repositories\EloquentRepository;

class UserEloquentRepository extends EloquentRepository implements UserInterface {


    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\User::class;
        // TODO: Implement getModel() method.
    }

    public function all()
    {
        // TODO: Implement all() method.
        return $this->_model::all();
    }
}
