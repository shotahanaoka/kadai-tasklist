@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} 's editing page</h1>

     <p>Status: {{ $task->status }}</p>
    <p>Message: {{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'Edit message', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete') !!}
    {!! Form::close() !!}

@endsection

