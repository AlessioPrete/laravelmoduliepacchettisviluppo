<?php

namespace alessioprete\PackageGenerator\app\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use function PHPUnit\Framework\stringContains;

class CreatePackageCommand extends Command
{
    protected $name = "generatepackage";

    protected $signature = "generatepackage {name}";

    protected $description = "Crea le risorse necessarie per realizzare un Pacchetto";

    protected $folder = ['app', 'src', 'routes', 'resources'];

    public function handle()
    {

        $name = (string) $this->argument('name');
        $this->createDirectoryPackage($name);
        $this->sandBox();
    }

    private function createDirectoryPackage($name)
    {
        $path = base_path()."/packages/alessioprete/";
        $directory = $path.Str::lower($name);
        mkdir($directory, 0744, true);
    }

    public function sandBox() {
        //Funzioni di esempio sui nomi
        $name = (string) $this->argument('name');
        $nameTitle = ucfirst(Str::camel($name));
        echo $nameTitle."  <--Camel\n";
        $nameKebab = Str::kebab($nameTitle);
        echo $nameKebab."  <--Kebab\n";
        $namePlural = ucfirst(str_replace('-', ' ', Str::plural($nameKebab)));
        echo $namePlural."  <--Plurale\n";
        $path = str_replace($this->laravel->getNamespace(), '', $nameTitle);
        echo $path."  <--path\n";
        $finale = $this->laravel['path'].'/'.str_replace('\\', '/', $nameTitle).'ChartController.php';
        echo $finale."  <--finale\n";
        echo $this->laravel['path']."\n";
        echo base_path();
        return $this->info('Prova comando registrato nel pacchetto');
    }
}
