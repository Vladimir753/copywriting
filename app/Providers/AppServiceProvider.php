<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (env('APP_URL') && env('APP_URL') !== 'http://localhost') {
            URL::forceScheme('https');
        }

        View::share('paymentsBoxes', config('payments-boxes'));
    }
}
