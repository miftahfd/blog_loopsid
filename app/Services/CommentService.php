<?php

namespace App\Services;

use App\Repositories\CommentRepository;

class CommentService
{
    public function __construct(private CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store($data)
    {
        return $this->commentRepository->save($data);
    }
}