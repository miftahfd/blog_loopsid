<?php

namespace App\Repositories;

interface CommentRepository
{
    public function findByEmail($email);
}