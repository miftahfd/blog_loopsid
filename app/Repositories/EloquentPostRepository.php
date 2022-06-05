<?php

namespace App\Repositories;

use App\Models\Post;

class EloquentPostRepository implements PostRepository
{
    private $post;

    public function __construct()
    {
        $this->post = Post::with('author');
    }

    public function findAll()
    {
        return $this->post->get();
    }
    
    public function findBySlug($slug)
    {
        return $this->post->where('slug', $slug)->first();
    }  
    
    public function create()
    {

    }

    public function update()
    {

    }
}