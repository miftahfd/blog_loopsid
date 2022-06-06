<?php

namespace App\Repositories;

use App\Models\User;

class EloquentUserRepository implements UserRepository
{
    public function getAll()
    {
        return User::get();
    }

    public function getById($id)
    {
        return User::find($id);
    }
}