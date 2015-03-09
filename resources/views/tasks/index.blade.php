@extends('layouts.tasks')

@section('content')
    <h2>tasks</h2>

    @if ( !$tasks->count() )
        You have no projects
    @else
        <ul>
            @foreach( $tasks as $task )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('tasks.destroy',$task->id))) !!}
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                    (
                    {!! link_to_route('tasks.edit', 'Edit', array($task->id), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('tasks.create', 'Create Task') !!}
                {!! link_to_route('catagories.tasks.create', 'Create Task', $task->id) !!}

    </p>
@endsection
