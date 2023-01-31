<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __invoke($page)
    {
       return view('staticpages.' . $page);
    }

//    public function about() {
//        return view('staticpages.about', ['metaTitle' => 'About Us']);
//    }
//    public function contact_us() {
//        return view('staticpages.contact_us', ['metaTitle' => 'Contact Us']);
//    }
//    public function terms() {
//        return view('staticpages.terms', ['metaTitle' => 'Terms']);
//    }
}
