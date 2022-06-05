<?php

namespace App\Repositories;

interface UserRepository
{
    public function findAll();
    public function findById($id);
}