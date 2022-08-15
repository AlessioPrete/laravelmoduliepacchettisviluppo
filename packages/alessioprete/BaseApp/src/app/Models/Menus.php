<?php

namespace alessioprete\BaseApp\app\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';

    public function __construct(array $attributes = [])
    {
        //parent::construct( $attributes );
        $this->table = 'menus';
    }

    public static function byName($name)
    {
        return self::where('name', '=', $name)->first();
    }

    public function items()
    {
        return $this->hasMany(Menus::class, 'menu')->with('child')->where('parent', 0)->orderBy('sort', 'ASC');
    }
}
