@extends('layouts.master')

@section('content')

    <h1>Examsubtopic</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Topic</th><th>Name</th><th>created_by</th>
            </tr>
            <tr>
                <td>{{ $examsubtopic->id }}</td> <td> {{ $examsubtopic->topic }} </td><td> {{ $examsubtopic->name }} </td><td> {{ $examsubtopic->created_by }} </td>
            </tr>
        </table>
    </div>

@endsection
