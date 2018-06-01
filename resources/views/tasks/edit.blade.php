@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} 's editing page</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', 'Message:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('refresh') !!}

    {!! Form::close() !!}

@endsection