<?php

namespace App\Services;

use App\Models\Comment;
use App\Repositories\CommentRepository;

class CommentService
{
    private CommentRepository $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store($data)
    {
        return $this->commentRepository->create($data);
    }
}