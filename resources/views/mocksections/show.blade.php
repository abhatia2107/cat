@extends('layouts.master')

@section('content')

    <h1>Mocksection</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Esec Id</th><th>Noofquestions</th><th>Noofmarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $mocksection->id }}</td> <td> {{ $mocksection->esec_id }} </td><td> {{ $mocksection->noofquestions }} </td><td> {{ $mocksection->noofmarks }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection
