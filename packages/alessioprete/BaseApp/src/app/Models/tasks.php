<?php

namespace alessioprete\BaseApp\app\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;

    protected $fillable = ['titolo', 'contenuto', 'scadenza', 'complete'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
