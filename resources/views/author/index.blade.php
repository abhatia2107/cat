@extends('layouts.master')

@section('content')

    <h1>Authors <a href="{{ url('/author/create') }}" class="btn btn-primary pull-right btn-sm">Add New Author</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Name</th><th>Photo</th><th>Fb</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($authors as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/author', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->photo }}</td><td>{{ $item->fb }}</td>
                    <td><a href="{{ url('/author/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['AuthorController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
