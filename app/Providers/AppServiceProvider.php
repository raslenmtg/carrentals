<?php
namespace App\Providers;

use Authy\AuthyApi as AuthyApi;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AuthyApi::class, function ($app) {
            $authyKey = getenv('ZAmIh14e4bLDPtPEdWRJdxoTmgpXX3pw');
            
            return new AuthyApi($authyKey);
        });
    }
}
