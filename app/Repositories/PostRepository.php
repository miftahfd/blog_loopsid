<?php

namespace App\Repositories;

use App\Models\Post;

interface PostRepository
{
    public function findAll();
    public function findBySlug($slug);    
    public function create();
    public function update();
}