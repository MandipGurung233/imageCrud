<?php

namespace App\Providers;

use App\Services\DestroyItem;
use Illuminate\Support\ServiceProvider;

class DestroyItemProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind('custom-destroy',function(){
            return new DestroyItem();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
