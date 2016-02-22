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
        </div>
    @endforeach
@endsection