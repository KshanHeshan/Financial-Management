@extends('layouts.app')

@section('content')
    <h1>Incomes</h1>
    @if(count($incomes) > 0)
        <ul class="list-group">
            @foreach($incomes as $income)
                <li class="list-group-item">
                   <h3>{{$income->descriptionOfIncome}}</h3>
                </li>
            @endforeach
        </ul>    
        @endif
@endsection