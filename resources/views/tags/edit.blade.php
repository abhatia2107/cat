@extends('layouts.master')

@section('content')

    <h1>Edit Tag</h1>
    <hr/>

    {!! Form::model($tag, ['method' => 'PATCH', 'action' => ['TagsController@update', $tag->id], 'class' => 'form-horizontal']) !!}

    <div class="form-group">
                        {!! Form::label('tag', 'Tag: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('tag', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
