@extends('layouts.master')

@section('content')

    <h1>Subscription</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $subscription->id }}</td> <td> {{ $subscription->email }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
