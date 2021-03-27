@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Net Profit</h1>
    <p>This is the Net Profit page</p>
</div>

<h2 align="center"><b>Incomes</b></h2>
<hr>
<div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Description</th>
            <th scope="col">Received From</th>
            <th scope="col">Amount (Rs.)</th>
            <th scope="col">Total (Rs.)</th>
          </tr>
        </thead>
        <tbody>
          @if(count($incomes) > 0)
          @foreach ($incomes as $income)
            <tr>
              <td>{{$income->descriptionOfIncome}}</td>
              <td>{{$income->from}}</td>
              <td>{{$income->amount}}</td>
              <td></td>
            </tr>
          @endforeach
            <tr>
              <td><b><u>Total Income</u></b></td>
              <td></td>
              <td></td>
              <td>{{$totalIncome}}</td>
            </tr>
          @endif
        </tbody>
      </table>
</div>
<hr>
<a href="/incomes/create" class="btn btn-primary">Add an Income</a>
<hr>
<!--<div class="dropdown">
    <a href="/getPDF" class="btn btn-primary"><img src="css/download.png" />   <span>Download Incomes Details</span></a>
    <div class="dropdown-content">
        <a href="/getPDF"><img src="css/pdf.png" /> PDF</a>
    </div>
</div> -->
<hr>
<h2 align="center"><b>Expences</b></h2>
<hr>
<div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Description</th>
            <th scope="col">Paid To</th>
            <th scope="col">Amount (Rs.)</th>
            <th scope="col">Total (Rs.)</th>
          </tr>
        </thead>
        <tbody>
          @if(count($expences) > 0)
            @foreach ($expences as $expence)
              <tr>
                <td>{{$expence->descriptionOfExpence}}</td>
                <td>{{$expence->to}}</td>
                <td>{{$expence->amount}}</td>
                <td></td>
            @endforeach
          </tr>
          <tr>
              <td><b><u>Total Expence</u></b></td>
              <td></td>
              <td></td>
              <td>{{$totalExpence}}</td>
          </tr>
          @endif
        </tbody>
      </table>
<hr>
<a href="/expences/create" class="btn btn-primary">Add an Expence</a>
<hr>
</div>
<hr>
<hr>
<div align="right">
  <a href="/analyze" class="btn btn-primary">Analyze</a>
  <a href="/reports" class="btn btn-danger">Reports</a>
</div>
@endsection