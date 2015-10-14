@extends('layouts.master')

@section('content')

    <h1>Templatetypes <a href="{{ url('/templatetype/create') }}" class="btn btn-primary pull-right btn-sm">Add New Templatetype</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Setype Id</th><th>Name</th><th>Eachmarkcorrect</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($templatetypes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/templatetype', $item->id) }}">{{ $item->setype_id }}</a></td><td>{{ $item->name }}</td><td>{{ $item->eachmarkcorrect }}</td>
                    <td><a href="{{ url('/templatetype/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['TemplatetypeController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
