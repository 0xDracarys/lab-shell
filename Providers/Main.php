<?php

namespace Modules\LabShell\Providers;

use Illuminate\Support\ServiceProvider as Provider;

class Main extends Provider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->loadRoutes();
    }

    public function loadRoutes()
    {
        if (app()->routesAreCached()) {
            return;
        }

        $this->loadRoutesFrom(__DIR__ . '/../Routes/admin.php');
    }

    public function provides()
    {
        return [];
    }
}
