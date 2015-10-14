@extends('layouts.master')

@section('content')

    <h1>Questiontype</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>template_id</th><th>Name</th><th>created_by</th>
            </tr>
            <tr>
                <td>{{ $questiontype->id }}</td> <td> {{ $questiontype->template_id }} </td><td> {{ $questiontype->name }} </td><td> {{ $questiontype->created_by }} </td>
            </tr>
        </table>
    </div>

@endsection
