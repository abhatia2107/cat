@extends('layouts.master')

@section('content')

    <h1>Examtypes <a href="{{ url('/examtypes/create') }}" class="btn btn-primary pull-right btn-sm">Add New Examtypes</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>created_by</th><th>modified_by</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($examtypes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/examtypes', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->created_by }}</td><td>{{ $item->modified_by }}</td>
                    <td><a href="{{ url('/examtypes/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['ExamtypesController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
