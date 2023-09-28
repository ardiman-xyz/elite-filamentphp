<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Policies\FaqPolicy;
use App\Policies\StudentPolicy;
use App\Policies\UserPolicy;
use App\Policies\WebSettingPolicy;
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
        UserPolicy::class,
        FaqPolicy::class,
        UserPolicy::class,
        WebSettingPolicy::class,
        StudentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });
    }
}
