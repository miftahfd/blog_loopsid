<?php

namespace App\Repositories;

use App\Models\Comment;

class EloquentCommentRepository implements CommentRepository
{
    public function create($data)
    {
        Comment::create($data);
    }

    public function getByEmail($email)
    {
        return Comment::with('post')->where('email', $email)->get();
    }
}