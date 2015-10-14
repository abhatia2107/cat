@extends('layouts.master')

@section('content')

    <h1>Cat_user</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Firstname</th><th>Lastname</th><th>Email</th>
            </tr>
            <tr>
                <td>{{ $cat_user->id }}</td> <td> {{ $cat_user->firstname }} </td><td> {{ $cat_user->lastname }} </td><td> {{ $cat_user->email }} </td>
            </tr>
        </table>
    </div>

@endsection
