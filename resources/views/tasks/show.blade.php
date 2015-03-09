
@extends('layouts.task')

@section('content')

      <h2>
          {!! link_to_route('catagories.show', $catagory->Title, [$catagory->id]) !!} -
          {{ $task->title }}
      </h2>

      {{ $task->description }}
  @endsection
