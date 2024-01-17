<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Route::resourceVerbs([
            'create' => 'creer',
            'edit' => 'editer',
        ]);

        Schema::defaultStringLength(191);
        Blade::directive('datetime', function ($expression) {
            return "<? ($expression)->format('m/d/Y H:i'); ?>";
        });
    }
}
