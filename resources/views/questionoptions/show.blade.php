@extends('layouts.master')

@section('content')

    <h1>Questionoption</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>question_id</th><th>Name</th><th>created_by</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $questionoption->id }}</td> <td> {{ $questionoption->question_id }} </td><td> {{ $questionoption->name }} </td><td> {{ $questionoption->created_by }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
