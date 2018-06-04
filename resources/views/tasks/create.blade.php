@extends('layouts.app')

@section('content')

<h1>New Message</h1>

<div class="row">
        <div class="col-xs-6">

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection