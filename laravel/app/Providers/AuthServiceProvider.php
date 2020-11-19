<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */

    /**
     * Documentation laravel - Authorization
     * Ne pas oublier implementation de Gate 
     * from UsersController
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('see-users', function ($user) {
            return $user->hasAnyRole(['utilisateur', 'manager', 'admin']);
        });

        Gate::define('edit-users', function ($user) {
            return $user->hasAnyRole(['manager', 'admin']);
        });

        Gate::define('delete-users', function ($user) {
            return $user->isAdmin();
        });
    }
}
