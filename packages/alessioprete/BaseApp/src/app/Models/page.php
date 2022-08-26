<?php

namespace alessioprete\BaseApp\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class page extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['template', 'name', 'title', 'slug', 'content', 'extras'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug',
            ],
        ];
    }
}
