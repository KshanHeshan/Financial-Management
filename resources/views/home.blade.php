@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h2 align="center">!! Welcome to the Loyalty Card service !!</h2>
                        <h1 align="center" style="font-family: Krinkes Regular PERSONAL USE Regular; font-size: 80px">{{auth()->user()->name}}9</h1>
                                <br>
                                <div align="center">
                                        <h5>!! You are Successfully logged in into your account !!</h5>
                                        <hr>
                                        Dear Customer, In here you can create your loyalty cards.
                                        and you can update and delete the loyalty cards you have created.
                                        Also you have to use the pin or id, when you are going to collect your order.
                                        That because our system is running on the concept called Cash On Delivery (COD).
                                        Please enjoy our loyalty card system....</p>
                                        <hr>
                                </div>
                                
                    <hr>
                    <a href="/posts/create" class="btn btn-primary">Create Loyalty Card</a>
                    <hr>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr class="p-3 mb-2 bg-dark text-white">
                            <td>Full Name : </td>
                            <td>Show : </td>
                            <td>Update : </td>
                            <td>Delete : </td>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->firstName}} {{$post->lastName}}</td>
                            <td><a href="/posts/{{$post->id}}" class="btn btn-success">Show</h3></a></td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Update</a></td>
                            <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull_right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}</td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <h6>No Loyalty cards found....</h6>
                    @endif
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
