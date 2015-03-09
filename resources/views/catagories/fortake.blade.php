    <h2>Catagories</h2>
      @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif



            Title

        @foreach($catagories as $key => $value)
           <li>{{ $value->Title }}</li>

                    <a class="btn btn-small btn-success" href="{{ URL::to('catagories/' . $value->id) }}">Show this Catagories</a>



                     {!! Form::close() !!}
        @endforeach

    <p>
        {!! link_to_route('catagories.create', 'Create Catagory') !!}
    </p>
