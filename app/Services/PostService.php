<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    public function __construct(private PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function showAll()
    {
        return $this->postRepository->getAll();
    }

    public function detail($slug)
    {
        return $this->postRepository->getBySlug($slug);
    }
}