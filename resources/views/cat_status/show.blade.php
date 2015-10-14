@extends('layouts.master')

@section('content')

    <h1>Cat_status</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Name</th><th>created_by</th><th>modified_by</th>
            </tr>
            <tr>
                <td>{{ $cat_status->id }}</td> <td> {{ $cat_status->name }} </td><td> {{ $cat_status->created_by }} </td><td> {{ $cat_status->modified_by }} </td>
            </tr>
        </table>
    </div>

@endsection
