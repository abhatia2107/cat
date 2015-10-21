@extends('layouts.master')

@section('content')

    <h1>Create New Article</h1>
    <hr/>

    {!! Form::open(['url' => 'article', 'class' => 'form-horizontal', 'files'=>true]) !!}
    
    <div class="form-group">
                        {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('category_id', 'Category Id: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('photo', 'Photo: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::file('photo') !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('tags', 'Tags: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple'=>'multiple','id'=>'tags']) !!}
{{--                            {!! Form::select('tags[]', $tags, $article->tags->lists('id')->all(), ['class' => 'form-control', 'multiple'=>'multiple','id'=>'tags']) !!}--}}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('details', 'Details: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>    
    </div>
    {!! Form::close() !!}

    {{--<script src="http://cdn.ckeditor.com/4.5.4/standard/ckeditor.js"></script>--}}
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

@endsection
