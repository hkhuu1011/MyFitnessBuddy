@extends('layouts.app')

@section('content')
    <h1>Add your Meal:</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Meal of the Day')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Meal Name'])}}
                {{Form::label('title', 'Food Name')}}
                {{Form::text('meal', '', ['class' => 'form-control', 'placeholder' => 'Food Name'])}}
                {{Form::label('title', 'Protein')}}
                {{Form::text('protein', '', ['class' => 'form-control', 'placeholder' => 'Protein/g'])}}
                {{Form::label('title', 'Carbohydrates')}}
                {{Form::text('carbs', '', ['class' => 'form-control', 'placeholder' => 'Carbohydrates/g'])}}
                {{Form::label('title', 'Fat')}}
                {{Form::text('fat', '', ['class' => 'form-control', 'placeholder' => 'Fat/g'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection