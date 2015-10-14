@extends('layouts.master')

@section('content')

    <h1>Subexamtypes <a href="{{ url('/subexamtypes/create') }}" class="btn btn-primary pull-right btn-sm">Add New Subexamtypes</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Etype</th><th>Name</th><th>created_by</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($subexamtypes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/subexamtypes', $item->id) }}">{{ $item->etype }}</a></td><td>{{ $item->name }}</td><td>{{ $item->created_by }}</td>
                    <td><a href="{{ url('/subexamtypes/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['SubexamtypesController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
