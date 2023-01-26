@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header bg-dark text-white">
                    Transactions
                </div>
                <div class="card-body">
                    <a href="/purchase/create" style="text-decoration: none" class="btn btn-link">Create New Transaction</a>
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
                        <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
