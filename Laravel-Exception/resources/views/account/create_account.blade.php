@extends('layouts.app')

@section('title', 'Create Account')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto mt-3 py-3">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            <span>Input Amount of money to be deposited in account</span>
                            <div class="card-body">
                                <form action="/create_account" method="POST">
                                    @csrf
                                    <label>Input Ammount</label><br><br>
                                    <input value="1000000000" type="number" class="form-control" name="amountAccount" id="">
                                    <br>
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
