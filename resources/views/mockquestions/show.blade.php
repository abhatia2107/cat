@extends('layouts.master')

@section('content')

    <h1>Mockquestion</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>section_id</th><th>question_id</th><th>Eachmarkcorrect</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $mockquestion->id }}</td> <td> {{ $mockquestion->section_id }} </td><td> {{ $mockquestion->question_id }} </td><td> {{ $mockquestion->eachmarkcorrect }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
