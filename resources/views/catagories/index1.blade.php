

@extends('layouts.task')

@section('content')
    <h2>Catagories</h2>
      @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


 <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>created by</td>
            <td>Action</td>

        </tr>
        </thead>
        <tbody>
        @foreach($catagories as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->Title }}</td>
                <td>{{ $value->created_by }}</td>


                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('catagories/' . $value->id) }}">Show this Catagories</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('catagories/' . $value->id . '/edit') }}">Edit this Catagories</a>

                     {!! Form::open(array('method'=> 'DELETE', 'route' => array('catagories.destroy', $value->id))) !!}

                     {!! Form::submit('Delete', array('class'=> 'btn btn-danger')) !!}

                     {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p>
        {!! link_to_route('catagories.create', 'Create Catagory') !!}
    </p>
@endsection