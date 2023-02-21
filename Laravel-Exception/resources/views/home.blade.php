@extends('layouts.app')

@section('title', 'SearchBar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header bg-dark text-white">
                    Transactions
                </div>
                <div class="card-body">
                    <a href="/purchase" style="text-decoration: none" class="btn btn-link">Create New Transaction</a>
                    <span style="float: right">
                        <form action="#" method="GET">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Type amount of transaction">
                            </div>
                        </form>
                    </span>
                    <hr>
                    <br>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Ammount</th>
                            <th scope="col">Shopped Item</th>
                        </tr>
                        </thead>

                        @forelse($user as $transaction)
                           <x-transaction.transaction-item :transaction="$transaction" />
                        @empty
                            <span>No Items to show at the moment</span>
                        @endforelse

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


