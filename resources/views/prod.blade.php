@extends('layout')

@section('title')
    Main
@endsection


{{--this whole section works similarly to my main category section, but is based off the cat_id column, which connects my sub categories to my main categories--}}
@section('content')

    @foreach($subcat as $cat)


        <div class="col-sm-6">
            <img class="img-responsive" src="{{$cat->image}}" alt="">
                    <h3>{{$cat->title}}</h3>
                    
            {!! Form::open(['method' => 'POST', 'route' => ['proddeath', $cat->id], 'onsubmit' => 'return ConfirmDelete()']) !!}
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', array('type' => 'submit', 'class' => 'btn btn-danger delete')) !!}
            {!! Form::close() !!}
        </div>

    @endforeach
@endsection