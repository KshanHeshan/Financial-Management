@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Reports</h1>
    <p>This is the Reorts page</p>
</div>
<hr>

<h1 align="center">Profit or loss statement</h1>

        <table border="2px" align="center" style="width:100%;">
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @if(count($incomes) > 0)
                @foreach($incomes as $income)
                    <tr>
                        <td>{{$income->descriptionOfIncome}}</td>
                        <td>{{$income->amount}}</td>
                        <td></td>
                    </tr>
                @endforeach
            @endif
                <tr>
                    <td>Total Incomes</td>
                    <td></td>
                    <td>{{$totalIncome}}</td>
                </tr>
            <hr>
            @if(count($expences) > 0)
                @foreach($expences as $expence)
                    <tr>
                        <td>{{$expence->descriptionOfExpence}}</td>
                        <td>{{$expence->amount}}</td>
                        <td></td>
                    </tr>
                @endforeach
            @endif
            <tr>
                    <td>Total Expences</td>
                    <td></td>
                    <td>({{$totalExpence}})</td>
                </tr>
            @if($totalIncome > $totalExpence)
                <tr>
                    <td>Net Profit/Loss</td>
                    <td></td>
                    <td>{{$totalIncome-$totalExpence}}</td>
                </tr>
            @else
                <tr>
                    <td>Net Profit/Loss</td>
                    <td></td>
                    <td>({{$totalIncome-$totalExpence}})</td>
                </tr>
            @endif
            </tbody>
        </table>
<hr>
<div class="dropdown">
    <a href="/getPDF" class="btn btn-primary"><img src="css/download.png" />   <span>Download Profit Or Loss Statement</span></a>
    <div class="dropdown-content">
        <a href="/getPDF"><img src="css/pdf.png" /> PDF</a>
    </div>
</div>
<hr>
<hr>
<div align="right">
        <a href="/netProfit" class="btn btn-primary">Net Profit</a>
        <a href="/analyze" class="btn btn-danger">Analyze</a>
    </div>
@endsection