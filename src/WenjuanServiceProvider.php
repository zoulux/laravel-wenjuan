<?php

namespace Jake\LaravelWenjuan;

use Illuminate\Foundation\Application as LaravelApplication;
use Jake\Wenjuan\WenJuanClient;

class WenjuanServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->setupConfig();

        $this->app->singleton('wenjuan', function () {
            $config = config('wenjuan');
            return new WenJuanClient($config);
        });

        $this->app->alias('wenjuan', WenJuanClient::class);
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/config.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('wenjuan.php')], 'laravel-wenjuan');
        }

        $this->mergeConfigFrom($source, 'wenjuan');
    }
}
