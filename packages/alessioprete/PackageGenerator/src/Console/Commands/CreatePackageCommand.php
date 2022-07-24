<?php

namespace alessioprete\PackageGenerator\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class CreatePackageCommand extends Command
{
    protected $name = "generatepackage";

    protected $signature = "generatepackage";

    protected $description = "Crea le risorse necessarie per realizzare un Pacchetto";

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Prova comando registrato nel pacchetto');
    }

    protected function getStub()
    {
        // TODO: Implement getStub() method.
    }
}
