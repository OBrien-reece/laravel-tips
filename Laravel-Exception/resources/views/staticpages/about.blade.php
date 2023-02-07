@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <div class="container">
        <div class="row">
            <div class="m-auto col-md-9 mt-4">
                <div class="jumbotron">
                    <x-header title="About Us StaticPages!"/>
                    <p class="lead">
                        This is the generated about page of StaticPages Controllers
                    </p>
                    <hr class="my-4">
                    <p>There are better ways to apply static pages that using multiple routes.
                        <a
                            style="text-decoration: none"
                            href="https://github.com/OBrien-reece/laravel-tips/tree/static_pages">
                            View source code
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>

@endsection
