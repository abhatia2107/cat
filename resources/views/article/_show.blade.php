@extends('layouts.master')

@section('content')

    <h1>Article</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Category Id</th><th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $article->id }}</td> <td> {{ $article->title }} </td><td> {{ $article->category_id }} </td><td> {{ $article->photo }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
