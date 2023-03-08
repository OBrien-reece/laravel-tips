<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index() {

        $directors = Director::with('movies')->get();

        $directors = $directors->reject(function (Director $director) {
           return $director->working === 0;
        });

        $directors->first()->delete();
    }

    public function show($id) {

        $director = Director::where('id', $id)->with('movies')->restore();

    }
}
