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
        // register the helper functions
        $this->loadHelpers();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadConfigs();
        $this->loadViewsWithFallbacks();
        $this->loadRoutesFrom(__DIR__.$this->route);
        $this->registerMiddlewareGroup($this->app->router);
    }

    public function loadConfigs()
    {
        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(__DIR__.'/config/base.php', 'alessioprete.base');

        // add the root disk to filesystem configuration
        app()->config['filesystems.disks.'.config('alessioprete.base.root_disk_name')] = [
            'driver' => 'local',
            'root'   => base_path(),
        ];

        /*
         * Esempio di aggiunta elementi al file di configurazione principale.
         */

        // Aggiungo un tipo di autenticazione
        app()->config['auth.providers'] = app()->config['auth.providers'] +
            [
                'aprete' => [
                    'driver'  => 'eloquent',
                    'model'   => config('alessioprete.base.user_model_fqn'),
                ],
            ];

        // add the backpack_users password broker to the configuration
        app()->config['auth.passwords'] = app()->config['auth.passwords'] +
            [
                'aprete' => [
                    'provider'  => 'aprete',
                    'table'     => 'password_resets',
                    'expire'   => 60,
                    'throttle' => 600,
                ],
            ];

        // add the backpack_users guard to the configuration
        app()->config['auth.guards'] = app()->config['auth.guards'] +
            [
                'aprete' => [
                    'driver'   => 'session',
                    'provider' => 'aprete',
                ],
            ];
    }
    public function loadViewsWithFallbacks()
    {
        $customBaseFolder = resource_path('views/vendor/alessioprete/base');

        // - first the published/overwritten views (in case they have any changes)
        if (file_exists($customBaseFolder)) {
            $this->loadViewsFrom($customBaseFolder, 'alessioprete');
        }

        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views/base'), 'alessioprete');
    }
    public function loadHelpers()
    {
        require_once __DIR__.'/helpers.php';
    }
    public function registerMiddlewareGroup(Router $router)
    {
        $middleware_key = config('alessioprete.base.middleware_key');
        $middleware_class = config('alessioprete.base.middleware_class');

        if (! is_array($middleware_class)) {
            $router->pushMiddlewareToGroup($middleware_key, $middleware_class);
            return;
        }

        foreach ($middleware_class as $middleware_class) {
            $router->pushMiddlewareToGroup($middleware_key, $middleware_class);
        }

        // register internal backpack middleware for throttling the password recovery functionality
        // but only if functionality is enabled by developer in config
        if (config('alessioprete.base.setup_password_recovery_routes')) {
            $router->aliasMiddleware('alessioprete.throttle.password.recovery', ThrottlePasswordRecovery::class);
        }
    }
}
