@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">

                @php $counter = 1 @endphp

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Movie</th>
                        <th scope="col">Status</th>
                        @can('is_admin') <th scope="col">Handle</th> @endcan
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($directors as $director)
                        <tr>
                            <th scope="row">{{ $counter++ }}.</th>
                            <td>{{ $director->name }}</td>
                            <td>Inception</td>
                            <td>{{ $director->working == 1 ? 'Working' : 'Not Working' }}</td>

                            @can('is_admin')
                                <td>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </td>
                            @endcan

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
