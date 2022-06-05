<?php

namespace App\Repositories;

use App\Models\Post;

interface PostRepository
{
    public function findAll();
    public function findById($id);    
    public function create();
    public function update();
}