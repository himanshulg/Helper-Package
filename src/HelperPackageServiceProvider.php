<?php

namespace MyPackage;

use Illuminate\Support\ServiceProvider;

class HelperPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'mypackage');
    }

    public function register()
    {
    }
}
