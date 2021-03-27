@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is the main Home page</p>
    <a href="/home" class="btn btn-primary">Loyalty Card Service</a>
    <a href="/financialMgt" class="btn btn-success">Financial Management</a>
</div>
@endsection