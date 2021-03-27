<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF Download</title>
    </head>
    <body>
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
    </body>
</html>
