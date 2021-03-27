@extends('layouts.app1')

@section('content')
    <hr>
    <a href="/posts" class="btn btn-warning">Go Back</a>
    <hr>
    <h2>{{$posts->firstName}} {{$posts->lastName}}</h2>
    <hr>
    <div class="list-group-item">
        <ul>
            <li>Name  :  {{$posts->firstName}} {{$posts->lastName}}</li>
            <li>E-mail : {{$posts->Email}}</li>
            <li>Birthday : {{$posts->Birthday}}</li>
            <li>Address : {{$posts->address}}</li>
        </ul>
        <hr>
        <ul>
            <li>Written On : {{$posts->created_at}}</li>
            <li>Updated On : {{$posts->updated_at}}</li>
        </ul>
        <hr>
        @if(!Auth::guest())
          @if(Auth::user()->id == $posts->user_id)
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-success">Edit</a>
            <hr>
                {!!Form::open(['action' => ['PostsController@destroy', $posts->id], 'method' => 'POST', 'class' => 'pull_right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
        <hr>
    </div>
@endsection