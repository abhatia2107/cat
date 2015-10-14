@extends('layouts.master')

@section('content')

    <h1>Mockquestions <a href="{{ url('/mockquestions/create') }}" class="btn btn-primary pull-right btn-sm">Add New Mockquestions</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>section_id</th><th>question_id</th><th>Eachmarkcorrect</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($mockquestions as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/mockquestions', $item->id) }}">{{ $item->section_id }}</a></td><td>{{ $item->question_id }}</td><td>{{ $item->eachmarkcorrect }}</td>
                    <td><a href="{{ url('/mockquestions/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['MockquestionsController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
