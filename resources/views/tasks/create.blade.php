@extends('layouts.app')

@section('content')

<h1>New Message</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

         {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', 'Message:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Post') !!}

    {!! Form::close() !!}

@endsection