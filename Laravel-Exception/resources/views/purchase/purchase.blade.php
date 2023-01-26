@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-white">
                        New Transaction
                    </div>
                    <div class="card-body">
                        <form action="/purchase" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="form-group mt-2 mb-2">
                                <label for="Amount">Amount</label>
                                <input required type="number" class="form-control" name="ammount">
                            </div>

                            <div class="form-group mt-2 mb-2">
                                <label for="Shopping Item">Shopping Item</label>
                                <input required type="text" class="form-control" name="description">
                            </div>

                            <br>
                            <button class="btn btn-success btn-block">Make Purchase</button>
                        </form>
                    </div>

            </div>
        </div>
    </div>
@endsection
