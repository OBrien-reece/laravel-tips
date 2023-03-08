<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'directors';

    protected $fillable = ['name', 'working'];

    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}
