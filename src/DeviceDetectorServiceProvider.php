<?php

namespace Visernic\DeviceDetector;

use Illuminate\Support\ServiceProvider;

class DeviceDetectorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/device-detector.php' => config_path('device-detector.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__.'/config/device-detector.php', 'device-detector'
        );
    }

    public function register()
    {
        $this->app->singleton('device-detector', function ($app) {
            return new DeviceDetector();
        });
    }
}
