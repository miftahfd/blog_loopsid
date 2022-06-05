<?php

namespace App\Repositories;

use App\Models\Post;

class EloquentPostRepository implements PostRepository
{
    public function findAll()
    {
        return Post::with('author')->get();
    }
    
    public function findById($id)
    {

    }  
    
    public function create()
    {

    }

    public function update()
    {

    }
}