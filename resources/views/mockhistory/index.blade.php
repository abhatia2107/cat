@extends('layouts.master')

@section('content')

    <h1>Mockhistories <a href="{{ url('/mockhistory/create') }}" class="btn btn-primary pull-right btn-sm">Add New Mockhistory</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>user_id</th><th>mock_id</th><th>Marks</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($mockhistories as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/mockhistory', $item->id) }}">{{ $item->user_id }}</a></td><td>{{ $item->mock_id }}</td><td>{{ $item->marks }}</td>
                    <td><a href="{{ url('/mockhistory/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['MockhistoryController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
