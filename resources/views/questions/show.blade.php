@extends('layouts.master')

@section('content')

    <h1>Question</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Title</th><th>Description</th><th>Image</th>
            </tr>
            <tr>
                <td>{{ $question->id }}</td> <td> {{ $question->title }} </td><td> {{ $question->description }} </td><td> {{ $question->image }} </td>
            </tr>
        </table>
    </div>

@endsection
