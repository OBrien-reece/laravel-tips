<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $table ='actors';

    protected $fillable = ['name', 'project', 'username', 'working'];

    protected function username() :Attribute
    {

        return Attribute::make(
          get: fn($value) => ucwords($value),
          set: fn($value) => strtolower($value)
        );

    }
}
