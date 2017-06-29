@extends('layouts.app')

@section('content')
    <h1>Add your Meal:</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Name')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Meal Name'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection