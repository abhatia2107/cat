@extends('layouts.master')

@section('content')

    <h1>Questionstatuses <a href="{{ url('/questionstatus/create') }}" class="btn btn-primary pull-right btn-sm">Add New Questionstatus</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Name</th><th>created_by</th><th>modified_by</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($questionstatuses as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/questionstatus', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->created_by }}</td><td>{{ $item->modified_by }}</td>
                    <td><a href="{{ url('/questionstatus/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['QuestionstatusController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
