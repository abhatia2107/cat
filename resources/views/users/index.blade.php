@extends('layouts.master')

@section('content')

    <h1>Cat_users <a href="{{ url('/cat_users/create') }}" class="btn btn-primary pull-right btn-sm">Add New Cat_users</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($cat_users as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/cat_users', $item->id) }}">{{ $item->firstname }}</a></td><td>{{ $item->lastname }}</td><td>{{ $item->email }}</td>
                    <td><a href="{{ url('/cat_users/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['Cat_usersController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
