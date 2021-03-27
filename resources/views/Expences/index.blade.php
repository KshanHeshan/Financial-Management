@extends('layouts.app')

@section('content')
<h1> Expences </h1>
        @if(count($expences) > 0)
        <ul class="list-group">
            @foreach($expences as $expence)
                <li class="list-group-item">
                   <h3>{{$expence->descriptionOfExpence}}</h3>
                </li>
            @endforeach
        </ul>    
        @endif
@endsection