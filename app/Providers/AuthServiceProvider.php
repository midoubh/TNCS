<?php

namespace App\Providers;

use App\Models\Team;
use App\Models\User;
use App\Policies\TeamPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('manage-users', function (User $user) {
            return $user->role_id == 1;
        });
        Gate::define('manage-projects', function (User $user) {
            return $user->role_id == 2 or $user->role_id == 3 ;
        });
        Gate::define('manage-projets', function (User $user) {
            return $user->role_id == 3 or $user->role_id == 2;
        });
        Gate::define('manage-phase', function (User $user) {
            return $user->role_id == 4;
        });
        

        //
    }
}