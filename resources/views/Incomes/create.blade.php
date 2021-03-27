@extends('layouts.app1')

@section('content')

<h1 align="center">Income Receipt Application</h1>
<hr>
{!! Form::open(['action'=>'IncomeController@store', 'method' => 'POST']) !!}
        <div class="form-group">

            {{Form::label('descriptionOfIncome', 'Description : ')}}
            {{Form::text('descriptionOfIncome', '', ['class' => 'form-control', 'placeholder' => 'Description', 'required'])}}

            {{Form::label('from', 'Received From : ')}}
            {{Form::text('from', '', ['class' => 'form-control', 'placeholder' => 'Received From', 'required'])}}

            {{Form::label('amount', 'Amount : ')}}
            {{Form::number('amount', '', ['class' => 'form-control', 'placeholder' => 'Amount', 'required'])}}

        </div>
        {{Form::submit('ADD', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection