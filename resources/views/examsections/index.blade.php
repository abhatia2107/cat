@extends('layouts.master')

@section('content')

    <h1>Examsections <a href="{{ url('/examsections/create') }}" class="btn btn-primary pull-right btn-sm">Add New Examsections</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Setype</th><th>Name</th><th>created_by</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($examsections as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/examsections', $item->id) }}">{{ $item->setype }}</a></td><td>{{ $item->name }}</td><td>{{ $item->created_by }}</td>
                    <td><a href="{{ url('/examsections/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['ExamsectionsController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
