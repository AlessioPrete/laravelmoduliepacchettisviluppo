<?php

namespace alessioprete\BaseApp\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'headimage'];
}
