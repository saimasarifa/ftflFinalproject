@extends('layouts.task')

@section('content')
    <h2>Edit Catagories</h2>

    {!! Form::model($catagory, ['method' => 'PATCH', 'route' => ['catagories.update', $catagory->id]]) !!}
    @include('catagories/partials/_form', ['submit_text' => 'Edit Catagory'])
    {!! Form::close() !!}
@endsection