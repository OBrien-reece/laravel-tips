@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <div class="container">
        <div class="row">
            <div class="m-auto col-md-9 mt-4">
                <div class="jumbotron">
                    <x-header title="Contact Us StaticPages!" class="text-danger">
                        <p class="lead">
                            This is the generated contact us page of StaticPages Controllers
                        </p>
                    </x-header>

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
