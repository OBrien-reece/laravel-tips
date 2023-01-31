@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <span>Invalid user ID entered</span>
                    </div>
                    <div class="card-body">
                        <ul>
                            <small>
                                <strong>
                                    <ol>Re-Enter a new ID</ol>
                                </strong>
                            </small>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
