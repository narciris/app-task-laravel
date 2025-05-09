<?php

namespace App\Providers;

use App\Dtos\TaskRequestDtoV;
use App\Interfaces\TaskRepository;
use App\Interfaces\TaskRepositoryImpl;
use App\Interfaces\UserRepository;
use App\Interfaces\UserRepositoryImpl;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            TaskRepository::class,
            TaskRepositoryImpl::class
        );
        $this->app->bind(
            UserRepository::class,
            UserRepositoryImpl::class

        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
