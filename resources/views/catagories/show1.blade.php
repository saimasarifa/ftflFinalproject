
@extends('layouts.task')

@section('content')
    <h2>{{ $catagory->Title }}</h2>

    @if ( !$catagory->tasks->count() )<!--this line-->
        You have no tasks.
    @else
        {{--<ul>--}}
        <table class="table table-bordered table-responsive">
        <thead>
        <tr>
        <th>Id</th>
        <th>title</th>
        <th>description</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach( $catagory->tasks as $task )
                {{--<li>--}}
                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('catagories.tasks.destroy', $catagory->id, $task->id))) !!}
                <tr>
                <td> {{$task->id}}</td>

                <td><a href="{{ route('catagories.tasks.show', [$catagory->id, $task->catagory_id]) }}">{{ $task->title }}</a></td>
                  <td>
                      {{$task->description}}
                  </td>

                <td>
                {!! link_to_route('catagories.tasks.edit', 'Edit', array($catagory->id, $task->id), array('class' => 'btn btn-info')) !!},

                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                </td>


                    {{--{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('catagories.tasks.destroy', $catagory->id, $task->id))) !!}
                    <a href="{{ route('catagories.tasks.show', [$catagory->id, $task->catagory_id]) }}">{{ $task->title }}> {{$task->description}}</a>
                    (
                    {!! link_to_route('catagories.tasks.edit', 'Edit', array($catagory->id, $task->id), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}--}}
                {{--</li>--}}

                </tr>
                {!! Form::close() !!}
            @endforeach
            </tbody>
        </table>
        {{--</ul>--}}
    @endif


            <p>
                {!! link_to_route('catagories.index', 'Back to Projects') !!} |
                {!! link_to_route('catagories.tasks.create', 'Create Task', $catagory->id) !!}
            </p>

@endsection
 {{--<a href="{{ URL::to('tasks/' .$value->id) }}">{{ $value->description }}</a><p>
              <a href="{{ URL::to('tasks/' .$value->id) }}">{{ $value->title }}</a>
              <a href="{{ URL::to('catagories.tasks/' .$value->id) }}">{{ $value->catagory_id}}</a>--}}