@extends('layouts.master')

@section('content')

    <h1>Create New Tag</h1>
    <hr/>

    {!! Form::open(['url' => 'tag', 'class' => 'form-horizontal']) !!}
    
    <div class="form-group">
                        {!! Form::label('tag', 'Tag: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('tag', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>    
    </div>
    {!! Form::close() !!}

@endsection
