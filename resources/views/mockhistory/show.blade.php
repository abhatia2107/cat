@extends('layouts.master')

@section('content')

    <h1>Mockhistory</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>user_id</th><th>mock_id</th><th>Marks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $mockhistory->id }}</td> <td> {{ $mockhistory->user_id }} </td><td> {{ $mockhistory->mock_id }} </td><td> {{ $mockhistory->marks }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
