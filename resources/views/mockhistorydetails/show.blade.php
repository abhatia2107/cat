@extends('layouts.master')

@section('content')

    <h1>Mockhistorydetail</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>history_id</th><th>question_id</th><th>Attempted</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $mockhistorydetail->id }}</td> <td> {{ $mockhistorydetail->history_id }} </td><td> {{ $mockhistorydetail->question_id }} </td><td> {{ $mockhistorydetail->attempted }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
