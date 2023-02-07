@extends('layouts.app')

@section('title', 'Make Purchase')

@section('content')
    <div class="container">

        @if($errors->any())
            <div class="row">
                <div class="col-md-6 m-auto">
                    <span class="text-danger">
                        {{ implode(' ', $errors->all(':message')) }}
                    </span>
                    <a href="/create_account" style="float: right;text-decoration: none">Create Account</a>
                </div>
            </div>
        @endif

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
                                <x-form.input-field name="amount" type="number" placeholder="e.g 30" />
                            </div>

                            <div class="form-group mt-2 mb-2">
                                <label for="Shopping Item">Shopping Item</label>
                                <x-form.input-field name="description" placeholder="e.g Baking soda" />
                            </div>

                            <br>

                            <x-form.primary-button>
                                Make Purchase
                            </x-form.primary-button>

                        </form>
                    </div>

            </div>
        </div>
    </div>
@endsection
