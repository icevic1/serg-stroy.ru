<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Album;

class AlbumServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
//dd('boot');
        /*$this->loadViewsFrom(__DIR__.'/../../../../resources/views', 'album');

        $this->loadTranslationsFrom(__DIR__.'/../../../../resources/lang', 'album');

        $this->publishResources();*/
    }

    /**
     * Register the service provider.
     */
    public function register()
    {

        /*$this->app->bind('album', function ($app) {
            return $this->app->make('App\Models\AlbumModel');
        });*/

        $this->app->bind(
            \App\Interfaces\AlbumRepositoryInterface::class,
            \App\Repositories\AlbumRepository::class
        );
//        dd('provider register');
        /*$this->app->register(\Lavalite\Page\Providers\AuthServiceProvider::class);
        $this->app->register(\Lavalite\Page\Providers\EventServiceProvider::class);
        $this->app->register(\Lavalite\Page\Providers\RouteServiceProvider::class);*/
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    /*public function provides()
    {
        return ['album'];
    }*/

    /**
     * Publish configuration file.
     */
    private function publishResources()
    {
        /*// Publish configuration file
        $this->publishes([__DIR__.'/../../../../config/config.php' => config_path('package/page.php')], 'config');

        // Publish public view
        $this->publishes([__DIR__.'/../../../../resources/views/public' => base_path('resources/views/vendor/page/public')], 'view-public');

        // Publish admin view
        $this->publishes([__DIR__.'/../../../../resources/views/admin' => base_path('resources/views/vendor/page/admin')], 'view-admin');

        // Publish language files
        $this->publishes([__DIR__.'/../../../../resources/lang' => base_path('resources/lang/vendor/page')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__.'/../../../../database/migrations' => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__.'/../../../../database/seeds' => base_path('database/seeds')], 'seeds');*/
    }

}
