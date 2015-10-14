@extends('layouts.master')

@section('content')

    <h1>Templatetype</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Setype Id</th><th>Name</th><th>Eachmarkcorrect</th>
            </tr>
            <tr>
                <td>{{ $templatetype->id }}</td> <td> {{ $templatetype->setype_id }} </td><td> {{ $templatetype->name }} </td><td> {{ $templatetype->eachmarkcorrect }} </td>
            </tr>
        </table>
    </div>

@endsection
