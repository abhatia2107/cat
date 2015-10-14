@extends('layouts.master')

@section('content')

    <h1>Examsubtopics <a href="{{ url('/examsubtopics/create') }}" class="btn btn-primary pull-right btn-sm">Add New Examsubtopics</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Topic</th><th>Name</th><th>created_by</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($examsubtopics as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/examsubtopics', $item->id) }}">{{ $item->topic }}</a></td><td>{{ $item->name }}</td><td>{{ $item->created_by }}</td>
                    <td><a href="{{ url('/examsubtopics/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['ExamsubtopicsController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
