@extends('layouts.master')

@section('content')

    <h1>Examsection</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Setype</th><th>Name</th><th>created_by</th>
            </tr>
            <tr>
                <td>{{ $examsection->id }}</td> <td> {{ $examsection->setype }} </td><td> {{ $examsection->name }} </td><td> {{ $examsection->created_by }} </td>
            </tr>
        </table>
    </div>

@endsection
