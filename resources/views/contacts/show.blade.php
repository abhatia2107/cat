@extends('layouts.master')

@section('content')

    <h1>Contact</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Email</th><th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $contact->id }}</td> <td> {{ $contact->name }} </td><td> {{ $contact->email }} </td><td> {{ $contact->subject }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
