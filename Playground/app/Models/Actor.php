<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table ='actors';

    protected $fillable = ['name', 'username'];

    protected function username() :Attribute
    {

        return Attribute::make(
          get: null,
          set: fn($value) => strtolower($value)
        );

    }
}
