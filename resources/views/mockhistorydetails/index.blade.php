@extends('layouts.master')

@section('content')

    <h1>Mockhistorydetails <a href="{{ url('/mockhistorydetails/create') }}" class="btn btn-primary pull-right btn-sm">Add New Mockhistorydetails</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>history_id</th><th>question_id</th><th>Attempted</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($mockhistorydetails as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/mockhistorydetails', $item->id) }}">{{ $item->history_id }}</a></td><td>{{ $item->question_id }}</td><td>{{ $item->attempted }}</td>
                    <td><a href="{{ url('/mockhistorydetails/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['MockhistorydetailsController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
