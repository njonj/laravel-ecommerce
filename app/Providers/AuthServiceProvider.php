<?php

namespace App\Providers;

use App\Policies\ProductsPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
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
/* define a customer user role */
Gate::define('isCustomer', function($user) {
    return $user->role == 'customer';
 });

 /* define a vendor user role */
 Gate::define('isVendor', function($user) {
     return $user->role == 'vendor';
 });

 /* define a user role */
 Gate::define('isUser', function($user) {
     return $user->role == 'user';
 });
        //
    }
}
