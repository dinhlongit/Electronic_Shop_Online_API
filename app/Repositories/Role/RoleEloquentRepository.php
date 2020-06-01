<?php

namespace App\Repositories\Role;
use App\Repositories\EloquentRepository;

class RoleEloquentRepository extends EloquentRepository implements RoleRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
      return \App\Role::class;
    }
}
