<?php

namespace App\Repositories;

interface PostRepository
{
    public function getAll();
    public function getBySlug($slug);
}