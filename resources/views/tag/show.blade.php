@extends('layouts.master')

@section('content')

    <h1>Tag</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Tag</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $tag->id }}</td> <td> {{ $tag->tag }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
