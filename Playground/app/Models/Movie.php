<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = ['name', 'director_id'];

    public function director(): BelongsTo
    {
        return $this->belongsTo(Director::class);
    }
}
