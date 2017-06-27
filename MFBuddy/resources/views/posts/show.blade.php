@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->name}}</h1>
    <small>Added on {{$post->created_at}}</small>

    <div class="form">

    </div>
@endsection