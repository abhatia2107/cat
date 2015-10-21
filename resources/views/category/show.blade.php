@extends('layouts.master')

@section('content')

    <h1>Category</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $category->id }}</td> <td> {{ $category->category }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection