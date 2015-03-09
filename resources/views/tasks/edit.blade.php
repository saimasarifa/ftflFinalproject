@extends('layouts.task')

@section('content')
    <h2>Edit Task "{{ $task->title }}"</h2>

    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['catagories.tasks.update',$catagory->id,$task->id]]) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
@endsection


