<?php

namespace App\Providers;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\Facades\Cookie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::preventLazyLoading(! $this->app->isProduction());
        Paginator::useBootstrapFive();

        View::composer("*", function ($view) {
            if (Cookie::has('backIsDark')) {
                $cookies = explode(",", Cookie::get('backIsDark'));
                if (in_array('false', $cookies)) {
                    $dark = false;
                }else{
                    $dark = true;
                }
            } else {
                Cookie::queue('backIsDark', 'true', 60 * 24);
                $dark = true;
            }

            return $view->with([
                'dark' => $dark,
            ]);
        });
    }
}
