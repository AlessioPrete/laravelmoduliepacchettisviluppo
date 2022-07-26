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
                'alessioprete' => [
                    'provider'  => 'alessioprete',
                    'table'     => 'password_resets',
                    'expire'   => 60,
                    'throttle' => 600,
                ],
            ];

        // add the backpack_users guard to the configuration
        app()->config['auth.guards'] = app()->config['auth.guards'] +
            [
                'alessioprete' => [
                    'driver'   => 'session',
                    'provider' => 'alessioprete',
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
}
