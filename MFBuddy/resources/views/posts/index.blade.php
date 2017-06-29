@extends('layouts.app')

@section('content')
    <h1>All Meals</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->name}}</a></h3>
                <small>Added on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No Posts Found</p>
    @endif
@endsection