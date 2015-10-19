@extends('layouts.master')

@section('content')

    <h1>Blog</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Category Id</th><th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $blog->id }}</td> <td> {{ $blog->title }} </td><td> {{ $blog->category_id }} </td><td> {{ $blog->photo }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
