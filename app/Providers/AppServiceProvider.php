<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Personalinfo;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      Model::unguard();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      View::composer('components.footer', function ($view) {
        $view->with('personalinfo', Personalinfo::first());
    });
    }
}
