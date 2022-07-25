<?php

namespace alessioprete\BaseApp;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class BaseApp extends ServiceProvider
{
    protected $route = '/routes/base.php';
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadRoutesFrom(__DIR__.$this->route);
    }
}
