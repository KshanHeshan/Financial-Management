@extends('layouts.app1')

@section('content')

<h1 align="center">Expence Invoice Application</h1>
<hr>
{!! Form::open(['action'=>'ExpenceController@store', 'method' => 'POST']) !!}
        <div class="form-group">

            {{Form::label('descriptionOfExpence', 'Description : ')}}
            {{Form::text('descriptionOfExpence', '', ['class' => 'form-control', 'placeholder' => 'Description', 'required'])}}

            {{Form::label('to', 'Paid To : ')}}
            {{Form::text('to', '', ['class' => 'form-control', 'placeholder' => 'Paid To', 'required'])}}

            {{Form::label('amount', 'Amount : ')}}
            {{Form::number('amount', '', ['class' => 'form-control', 'placeholder' => 'Amount', 'required'])}}

        </div>
        {{Form::submit('ADD', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection