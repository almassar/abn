<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\Flash\Flash;
use Illuminate\Container\Container;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $pathBuildCssJs = config('app.env') === 'local' ? 'build/developer' : 'build';
        view()->share('pathBuildCssJs', $pathBuildCssJs);

        $this->app->singleton('flash', function(Container $app) {
            return new Flash($app['session.store']);
        });

        if (!session()->has('lang'))
            session(['lang' => 'ru']);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
