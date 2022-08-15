<?php
namespace alessioprete\BaseApp\Facades;

use Illuminate\Support\Facades\Facade;

class Menu extends Facade {
    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'alessioprete-menu';
    }
}
