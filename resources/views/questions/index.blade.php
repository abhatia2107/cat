@extends('layouts.master')

@section('content')

    <h1>Questions <a href="{{ url('/questions/create') }}" class="btn btn-primary pull-right btn-sm">Add New Questions</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Title</th><th>Description</th><th>Image</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($questions as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/questions', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->description }}</td><td>{{ $item->image }}</td>
                    <td><a href="{{ url('/questions/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['QuestionsController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
