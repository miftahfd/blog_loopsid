<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class HomeController extends Controller
{
    public function index(PostService $postService)
    {
        $posts = $postService->showAll();

        return view('pages.home', compact('posts'));
    }
}