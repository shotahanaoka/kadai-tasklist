@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} 's editing page</h1>

     <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th></th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection

