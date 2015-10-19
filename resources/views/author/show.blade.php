@extends('layouts.master')

@section('content')

    <h1>Author</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Photo</th><th>Fb</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $author->id }}</td> <td> {{ $author->name }} </td><td> {{ $author->photo }} </td><td> {{ $author->fb }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
