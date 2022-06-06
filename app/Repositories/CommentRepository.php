<?php

namespace App\Repositories;

use App\Models\Comment;

interface CommentRepository
{
    public function save($data);
    public function getByEmail($email);
}