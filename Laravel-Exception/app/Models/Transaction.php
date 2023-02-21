<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory;

//    public function scopeDescription($query) {
//        if(request('search')) {
//            $query->where('ammount', '>', request('search'));
//        }
//    }

    protected $table = 'transactions';

    public $timestamps = true;

    protected $fillable = ['account_id','ammount', 'description', 'created_at', 'updated_at'];
}
