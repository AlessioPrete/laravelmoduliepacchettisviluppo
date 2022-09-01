<?php

namespace alessioprete\BaseApp\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodotto extends Model
{
    use HasFactory;
    protected $table = 'prodotti';
    protected $fillable = [
        'name', 'slug', 'prezzo', 'descrizione', 'visible', 'extras'
    ];

}
