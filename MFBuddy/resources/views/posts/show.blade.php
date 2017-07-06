@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->name}}</h1>
    <span class="label label-default">{{$post->protein}}g Protein</span>
    <span class="label label-default">{{$post->carbs}}g Carbohydrates</span>
    <span class="label label-default">{{$post->fat}}g Fat</span>

    <br>
    <medium>Added on {{$post->created_at}}</medium>
    <br><br>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    <hr>
    <h2>Foods</h2>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>{{$post->meal}}</h5>
                    <h5>{{$post->protein}} : {{$post->carbs}} : {{$post->fat}}</h5>
                </li>
            </ul>

    {{--<hr>--}}
    {{--{!! Form::open(['action' => ['PostsController@store', $post->id], 'method' => 'POST']) !!}--}}
    {{--<div class="form-group">--}}
        {{--{{Form::label('title', 'Food Name')}}--}}
        {{--{{Form::text('meal', '', ['class' => 'form-control', 'placeholder' => 'Food Name'])}}--}}
        {{--{{Form::label('title', 'Protein')}}--}}
        {{--{{Form::text('protein', '', ['class' => 'form-control', 'placeholder' => 'Protein/g'])}}--}}
        {{--{{Form::label('title', 'Carbohydrates')}}--}}
        {{--{{Form::text('carbs', '', ['class' => 'form-control', 'placeholder' => 'Carbohydrates/g'])}}--}}
        {{--{{Form::label('title', 'Fat')}}--}}
        {{--{{Form::text('fat', '', ['class' => 'form-control', 'placeholder' => 'Fat/g'])}}--}}
    {{--</div>--}}
    {{----}}
    {{--{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}--}}
    {{--{!! Form::close() !!}--}}
@endsection