@extends('layouts.master')

@section('content')

    <h1>Questionstatus</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>created_by</th><th>modified_by</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $questionstatus->id }}</td> <td> {{ $questionstatus->name }} </td><td> {{ $questionstatus->created_by }} </td><td> {{ $questionstatus->modified_by }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
