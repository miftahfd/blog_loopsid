<?php

namespace App\Repositories;

interface UserRepository
{
    public function getAll();
    public function getById($id);
}