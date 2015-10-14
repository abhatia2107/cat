@extends('layouts.master')

@section('content')

    <h1>Exammocks <a href="{{ url('/exammocks/create') }}" class="btn btn-primary pull-right btn-sm">Add New Exammocks</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Template Id</th><th>Title</th><th>Noofquestions</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($exammocks as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/exammocks', $item->id) }}">{{ $item->template_id }}</a></td><td>{{ $item->title }}</td><td>{{ $item->noofquestions }}</td>
                    <td><a href="{{ url('/exammocks/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['ExammocksController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
