@extends('layouts.task')

@section('content')
    <h2>Create Task for Catagory "{{ $catagory->Title }}"</h2>

    {!! Form::model(new App\Task, ['route' => ['catagories.tasks.store', $catagory->id], 'class'=>'']) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}
@endsection
