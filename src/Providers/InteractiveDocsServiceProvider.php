<?php

namespace KwakuOfosuAgyeman\LaravelInteractiveDocs\Providers;

use Illuminate\Support\ServiceProvider;

class InteractiveDocsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../../config/interactive-docs.php' => config_path('interactive-docs.php'),
        ], 'config');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'interactive-docs');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/interactive-docs.php',
            'interactive-docs'
        );
    }
}
