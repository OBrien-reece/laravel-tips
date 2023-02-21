<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $user = User::with('transaction')
            ->where('id', Auth::user()->id)
            ->first();

//        dd($dd = $user->transaction->where('ammount', '>', request('search')));

//      dd($user->transaction->where('description', 'like', '%' . request('search') . '%'));


        if(request('search')) {
            $user = $user->transaction->where('ammount', '>', request('search'));
        }

        return view('home',[
            'user' => $user
        ]);
    }
}
