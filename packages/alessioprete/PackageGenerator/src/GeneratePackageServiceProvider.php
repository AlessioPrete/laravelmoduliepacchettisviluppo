<?php

namespace alessioprete\PackageGenerator;

use alessioprete\PackageGenerator\app\Console\Commands\CreatePackageCommand;
use Illuminate\Support\ServiceProvider;

class GeneratePackageServiceProvider extends ServiceProvider
{
    protected $commands = [
        CreatePackageCommand::class
        ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
