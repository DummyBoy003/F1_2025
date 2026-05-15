<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- 1. Importación agregada aquí

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
        // 2. Forzar el uso de HTTPS cuando la aplicación esté en producción (Render)
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}