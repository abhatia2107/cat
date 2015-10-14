@extends('layouts.master')

@section('content')

    <h1>Masterstatus</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Name</th><th>created_by</th><th>modified_by</th>
            </tr>
            <tr>
                <td>{{ $masterstatus->id }}</td> <td> {{ $masterstatus->name }} </td><td> {{ $masterstatus->created_by }} </td><td> {{ $masterstatus->modified_by }} </td>
            </tr>
        </table>
    </div>

@endsection
