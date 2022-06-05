<?php

namespace App\Repositories;

interface PostRepository
{
    public function findAll();
    public function findBySlug($slug);    
    public function create();
    public function update();
}