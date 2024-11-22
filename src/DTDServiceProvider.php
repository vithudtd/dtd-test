<?php

namespace DTD;

use DTD\Console\Commands\CheckVersion;
use Illuminate\Support\ServiceProvider;

class DTDSrviceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CheckVersion::class
            ]);
        }
    }

    public function register()
    {
        # code...
    }
}