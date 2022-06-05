<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\EloquentPostRepository;
use App\Repositories\PostRepository;

class PostRepositoryProvider extends ServiceProvider
{
    public $singletons = [PostRepository::class => EloquentPostRepository::class];

    public function provides()
    {
        return [PostRepository::class];
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
