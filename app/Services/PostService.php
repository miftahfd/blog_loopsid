<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function showAll()
    {
        return $this->postRepository->findAll();
    }

    public function detail($slug)
    {
        return $this->postRepository->findBySlug($slug);
    }
}