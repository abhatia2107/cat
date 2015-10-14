@extends('layouts.master')

@section('content')

    <h1>Subexamtype</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Etype</th><th>Name</th><th>created_by</th>
            </tr>
            <tr>
                <td>{{ $subexamtype->id }}</td> <td> {{ $subexamtype->etype }} </td><td> {{ $subexamtype->name }} </td><td> {{ $subexamtype->created_by }} </td>
            </tr>
        </table>
    </div>

@endsection
