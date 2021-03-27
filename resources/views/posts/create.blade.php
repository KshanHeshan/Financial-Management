@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1>Create Loyalty Card</h1>
</div>
    {!! Form::open(['action'=>'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstName', 'First Name : ')}}
            {{Form::text('firstName', '', ['class' => 'form-control', 'placeholder' => 'First Name', 'required'])}}

            {{Form::label('lastName', 'Last Name : ')}}
            {{Form::text('lastName', '', ['class' => 'form-control', 'placeholder' => 'Last Name', 'required'])}}

            {{Form::label('Email', 'E-mail : ')}}
            {{Form::email('Email', '', ['class' => 'form-control', 'placeholder' => 'E-mail', 'required'])}}

            {{Form::label('Birthday', 'Birthday : ')}}
            {{Form::Date('Birthday', '', ['class' => 'form-control', 'placeholder' => 'Birthday', 'required'])}}

            {{Form::label('address', 'Address : ')}}
            {{Form::textarea('address', '', ['class' => 'form-control', 'placeholder' => 'Address', 'required'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection