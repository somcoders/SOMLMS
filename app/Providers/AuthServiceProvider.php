<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("view_dashboard", function ($user) {
            return $user->role === "admin";
        });


        Gate::define("view_users", function ($user) {
            return $user->role === "admin";
        });

        Gate::define("edit_category", function ($user) {
            return $user->role === "admin";
        });

        Gate::define("delete_category", function ($user) {
            return $user->role === "admin";
        });


    }
}
