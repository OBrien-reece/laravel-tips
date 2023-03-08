<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index() {

        $actors = Actor::where('project', 'Inception')->get();

        $actors = $actors->reject(function (Actor $actor) {
           return $actor->working === 0;
        });

        dd($actors);

    }
}
