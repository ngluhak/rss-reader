<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\RecommendPolicy;
use Illuminate\Auth\Access\Response;

use App\Models\Recommend;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        //Recommend::class => RecommendPolicy::class,
        // 'App\Models\Recommend' => 'App\Policies\RecommendPolicy',
        Recommend::class => RecommendPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        
        /*
        Gate::define('delete-recommend', function (User $user, Recommend $recommend) {
            //return $user->id === $recommend->user_id;
            return $user->id === $recommend->user_id
            ? Response::allow()
            : Response::deny('You must be an administrator.');
        });
        */
     
                
    }
}
