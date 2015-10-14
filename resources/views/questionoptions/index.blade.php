@extends('layouts.master')

@section('content')

    <h1>Questionoptions <a href="{{ url('/questionoptions/create') }}" class="btn btn-primary pull-right btn-sm">Add New Questionoptions</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>question_id</th><th>Name</th><th>created_by</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($questionoptions as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/questionoptions', $item->id) }}">{{ $item->question_id }}</a></td><td>{{ $item->name }}</td><td>{{ $item->created_by }}</td>
                    <td><a href="{{ url('/questionoptions/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['QuestionoptionsController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
