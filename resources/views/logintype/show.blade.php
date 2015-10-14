@extends('layouts.master')

@section('content')

    <h1>logintype</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Name</th><th>created_by</th><th>modified_by</th>
            </tr>
            <tr>
                <td>{{ $logintype->id }}</td> <td> {{ $logintype->name }} </td><td> {{ $logintype->created_by }} </td><td> {{ $logintype->modified_by }} </td>
            </tr>
        </table>
    </div>

@endsection
