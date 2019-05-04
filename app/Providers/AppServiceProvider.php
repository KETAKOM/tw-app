<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Post
        $this->app->bind(
            \App\Repositories\PostRepositoryInterface::class,
            \App\Repositories\PostRepository::class
        );

        // Follow
        $this->app->bind(
            \App\Repositories\FollowRepositoryInterface::class,
            \App\Repositories\FollowRepository::class
        );

        // User
        $this->app->bind(
            \App\Repositories\UserRepositoryInterface::class,
            \App\Repositories\UserRepository::class
        );
    }
}
