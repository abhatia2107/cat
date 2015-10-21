@extends('layouts.master')

@section('content')

    <h1>Articles <a href="{{ url('/article/create') }}" class="btn btn-primary pull-right btn-sm">Add New Article</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Title</th><th>Category Id</th><th>Photo</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($articles as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/article', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->category_id }}</td><td>{{ $item->photo }}</td>
                    <td><a href="{{ url('/article/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['ArticleController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
