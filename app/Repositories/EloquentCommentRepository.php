<?php

namespace App\Repositories;

use App\Models\Comment;

class EloquentCommentRepository implements CommentRepository
{
    private $comment;

    public function __construct()
    {
        $this->comment = Comment::with('post');
    }

    public function create($data)
    {
        Comment::create($data);
    }

    public function findByEmail($email)
    {
        return $this->comment->where('email', $email)->get();
    }
}