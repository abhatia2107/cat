@extends('layouts.master')

@section('content')

    <h1>Mocksections <a href="{{ url('/mocksections/create') }}" class="btn btn-primary pull-right btn-sm">Add New Mocksections</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Esec Id</th><th>Noofquestions</th><th>Noofmarks</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($mocksections as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/mocksections', $item->id) }}">{{ $item->esec_id }}</a></td><td>{{ $item->noofquestions }}</td><td>{{ $item->noofmarks }}</td>
                    <td><a href="{{ url('/mocksections/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['MocksectionsController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
