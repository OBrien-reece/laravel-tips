<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Director;
use App\Models\User;
use App\Policies\DirectorPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
     */
    public function boot(): void
    {

        Gate::define('is_admin', fn(User $user) => $user->name == 'OBrien Reece');

    }
}
