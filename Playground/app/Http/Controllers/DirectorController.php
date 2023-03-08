<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index() {

        $this->authorize('is_admin');

        $directors = Director::with('movies')->get();

        $working_directors = $directors->reject(function (Director $director) {
           return $director->working === 0;
        });

        return view('director.index', compact('directors'));
    }

    public function show($id) {

        $director = Director::where('id', $id)->with('movies')->restore();

    }
}
