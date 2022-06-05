<?php

namespace App\Services;

use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;

class UserService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository, CommentRepository $commentRepository)
    {
        $this->userRepository = $userRepository;
        $this->commentRepository = $commentRepository;
    }

    public function show($id)
    {
        return $this->userRepository->findById($id);
    }

    public function showAll()
    {
        return $this->userRepository->findAll();
    }

    public function showComment($id)
    {
        return $this->commentRepository->findByEmail($id);
    }
}