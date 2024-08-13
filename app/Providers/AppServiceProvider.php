<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });
        Gate::define('isWebMaster', function ($user) {
            return $user->email == 'iam.jdada@gmail.com';
        });

        Gate::define('isUser', function ($user) {
            return in_array($user->role, ['user', 'admin', 'editor']);
        });

        Gate::define('isEditor', function ($user) {
            return in_array($user->role, ['admin', 'editor']);
        });
    }
}
