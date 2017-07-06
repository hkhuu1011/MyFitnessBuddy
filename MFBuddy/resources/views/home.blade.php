@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(count($posts) > 0)
                    <table class="table">
                        Here's what you've eaten today.
                        @foreach($posts as $post)
                            <tr>
                                <th><a href="/posts/{{$post->id}}">{{$post->name}}</a>
                                <medium class="pull-right">{{$post->created_at}}</medium>
                                </th>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        Have you eaten today? <a href="/posts/create">Click to add your meal!</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
