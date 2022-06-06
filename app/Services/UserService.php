<?php

namespace App\Services;

use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;

class UserService
{
    public function __construct(private UserRepository $userRepository, private CommentRepository $commentRepository)
    {
        $this->userRepository = $userRepository;
        $this->commentRepository = $commentRepository;
    }

    public function showAll()
    {
        return $this->userRepository->getAll();
    }

    public function showComment($id)
    {
        $user = $this->userRepository->getById($id);
        $comments =  $this->commentRepository->getByEmail($user->email);

        return ['user' => $user, 'comments' => $comments];
    }
}