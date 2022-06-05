<?php

namespace App\Repositories;

use App\Models\Comment;

interface CommentRepository
{
    public function create($data);
    public function findByEmail($email);
}