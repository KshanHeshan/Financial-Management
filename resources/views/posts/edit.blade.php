@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1>Update Loyalty Card</h1>
</div>
    {!! Form::open(['action'=>['PostsController@update', $posts->id] , 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstName', 'First Name : ')}}
            {{Form::text('firstName', $posts->firstName, ['class' => 'form-control', 'placeholder' => 'First Name', 'required'])}}

            {{Form::label('lastName', 'Last Name : ')}}
            {{Form::text('lastName', $posts->lastName, ['class' => 'form-control', 'placeholder' => 'Last Name', 'required'])}}

            {{Form::label('Email', 'E-mail : ')}}
            {{Form::email('Email', $posts->Email, ['class' => 'form-control', 'placeholder' => 'E-mail', 'required'])}}

            {{Form::label('Birthday', 'Birthday : ')}}
            {{Form::Date('Birthday', $posts->Birthday, ['class' => 'form-control', 'placeholder' => 'Birthday', 'required'])}}

            {{Form::label('address', 'Address : ')}}
            {{Form::textarea('address', $posts->address, ['class' => 'form-control', 'placeholder' => 'Address', 'required'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection