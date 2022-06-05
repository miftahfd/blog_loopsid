<?php

namespace App\Repositories;

use App\Models\User;

class EloquentUserRepository implements UserRepository
{
    private $user;

    public function __construct()
    {
        $this->user = User::query();
    }

    public function findAll()
    {
        return $this->user->get();
    }

    public function findById($id)
    {
        return $this->user->find($id);
    }
}