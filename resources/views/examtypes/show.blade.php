@extends('layouts.master')

@section('content')

    <h1>Examtype</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Name</th><th>created_by</th><th>modified_by</th>
            </tr>
            <tr>
                <td>{{ $examtype->id }}</td> <td> {{ $examtype->name }} </td><td> {{ $examtype->created_by }} </td><td> {{ $examtype->modified_by }} </td>
            </tr>
        </table>
    </div>

@endsection
