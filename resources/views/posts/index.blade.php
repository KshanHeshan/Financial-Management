@extends('layouts.app')

@section('content')
    <h1>Loyalty Cards</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="list-group-item">
                <a href="/posts/{{$post->id}}"><h3>{{$post->firstName}} {{$post->lastName}}</h3></a>
                <small>Created on : {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h3>No Loyalty Cards Found....</h3> 
    @endif
@endsection