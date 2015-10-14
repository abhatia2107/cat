@extends('layouts.master')

@section('content')

    <h1>Examtopic</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Name</th><th>created_by</th><th>modified_by</th>
            </tr>
            <tr>
                <td>{{ $examtopic->id }}</td> <td> {{ $examtopic->name }} </td><td> {{ $examtopic->created_by }} </td><td> {{ $examtopic->modified_by }} </td>
            </tr>
        </table>
    </div>

@endsection
