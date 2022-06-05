<?php

namespace App\Providers;

use App\Repositories\CommentRepository;
use App\Repositories\EloquentCommentRepository;
use Illuminate\Support\ServiceProvider;

class CommentRepositoryProvider extends ServiceProvider
{
    public $singletons = [CommentRepository::class => EloquentCommentRepository::class];

    public function provides()
    {
        return [CommentRepository::class];
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}