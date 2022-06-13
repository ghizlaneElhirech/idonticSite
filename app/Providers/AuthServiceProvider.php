<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use Illuminate\Auth\Notifications\ResetPassword;
use App\Notifications\ResetPasswordNotification;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    /*      ResetPassword::createUrlUsing(function ($user, string $token) {
        return 'http://127.0.0.1:8000/reset-password/?token='.$token.'?email='.$user->email;
    });*/

        /* Passport::routes();
         $startTime = date("Y-m-d H:i:s");
         $endTime = date("Y-m-d H:i:s",strtotime('+7 day +1 hour +30 minutes +45 seconds',strtotime($startTime)));
         $expTime = \DateTime::createFromFormat("Y-m-d H:i:s",$endTime);
         Passport::tokensExpireIn($expTime);*/
    }
}
