@extends('layout')

@section('title')
    Main
@endsection

{{--this section will display the main categories from my database--}}
@section('content')
{{--for each main category it will convert it to the $cat variable. then the information will be pulled from there respective columns and fill there respective sections.--}}
    @foreach($maincat as $cat)
        <div class="col-sm-6">
            <a href="/sub/{{$cat->id}}">
                <img class="img-responsive" src="{{$cat->image}}" alt="">
                <h3>{{$cat->title}}</h3>
            </a>
            {!! Form::open(['method' => 'POST', 'route' => ['maindeath', $cat->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger delete')) !!}
            {!! Form::close() !!}
        </div>
    @endforeach
@endsection