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
                        <form action="">
                            <div class="form-group">
                                <label for="Amount">Amount</label>
                                <input type="number" class="form-control" name="ammount">
                            </div>
                            <div class="form-group">
                                <label for="Shopping Item">Shopping Item</label>
                                <input type="number" class="form-control" name="description">
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
@endsection
