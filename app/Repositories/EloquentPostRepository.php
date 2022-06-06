<?php

namespace App\Repositories;

use App\Models\Post;

class EloquentPostRepository implements PostRepository
{
    public function getAll()
    {
        return Post::with('author')->get();
    }
    
    public function getBySlug($slug)
    {
        return Post::with('author')->where('slug', $slug)->first();
    }
}