@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <span>Your name is {{ $user['name'] }}</span>
                    </div>
                    <div class="card-body">
                        <ul>
                            <small>
                                <strong>
                                    <ol>E-Mail: {{ $user['email'] }}</ol>
                                </strong>
                            </small>
                        </ul>
                    </div>
                    <div class="card-header bg-dark text-white">
                        <span>
                            Now try changing the ID on the URL to a random ID e.g
                            <code>http://127.0.0.1:8000/user/59</code>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
