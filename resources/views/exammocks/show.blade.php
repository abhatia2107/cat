@extends('layouts.master')

@section('content')

    <h1>Exammock</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Template Id</th><th>Title</th><th>Noofquestions</th>
            </tr>
            <tr>
                <td>{{ $exammock->id }}</td> <td> {{ $exammock->template_id }} </td><td> {{ $exammock->title }} </td><td> {{ $exammock->noofquestions }} </td>
            </tr>
        </table>
    </div>

@endsection
