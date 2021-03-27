@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Analyze</h1>
    <p>This is the Analyze page</p>
</div>
<div>
        <canvas id="myChart" style="max-width: 500px;"></canvas>
    <script>
        window.onload = function () {
            var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

}
chart.render();
    </script>
</div>
<hr>
<hr>
<div align="center">
    <a href="/netProfit" class="btn btn-primary">Net Profit</a>
    <a href="/reports" class="btn btn-danger">Reports</a>
</div>
@endsection