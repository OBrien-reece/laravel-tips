<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'user_accounts';

    public $timestamps = true;

    protected $fillable = ['user_id', 'balance', 'created_at', 'updated_at'];
}
