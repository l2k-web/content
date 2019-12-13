<?php

namespace L2k\Content;

use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('L2k\Content\ContentController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        // $this->loadViewsFrom(__DIR__ . '/views', 'contents');

        // $this->publishes([
        //     __DIR__ . '/views' => resource_path('views/vendor/l2k-content'),
        // ]);

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/l2k/contents/'),
        ], 'views');
        $this->loadViewsFrom(__DIR__ . '/views', 'contents');
    }
}
