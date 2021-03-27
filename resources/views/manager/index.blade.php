@extends('layouts.app')

@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-2" data-slide-to="1"></li>
          <li data-target="#carousel-example-2" data-slide-to="2"></li>
          <li data-target="#carousel-example-2" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="view">
              <img class="d-block w-100" src="css/financial.jpg" alt="First slide">
              <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
              <u><h1 class="h3-responsive">Financial Management</h1></u>
              <p>The place where the financial manager visits</p>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="css/netprofit.jpg" alt="Second slide">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
              <u><h1 class="h3-responsive">Net Profit</h1></u>
              <p>In here, the financial manager can get the idea about the current profits.</p>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="css/analyze.jpg" alt="Third slide">
              <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
              <u><h1 class="h3-responsive">Analyze</h1></u>
              <p>In here, the financial manager can manage and plan the daily and monthly financial plan.</p>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" src="css/reports.jpg" alt="Second slide">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
              <h1 class="h3-responsive, text-body"><u>Reports</u></h1>
              <p class="text-body">In here, the financial manager can download the profit or loss statement in PDF format....</p>
            </div>
          </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->
<hr>
<hr>
      <div class="row" align="center" style="background-color:grey transparent">
        <div class="col-lg-4">
          <img class="rounded-circle" src="css/netprofit.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Net Profit</h2>
          <p>This is where the financial manager can take a view of incomes & expences in order to manage and get a higher profit.</p>
          <p><a class="btn btn-success" href="/netProfit" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="css/analyse.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Analyse</h2>
          <p>This is where the financial manager analyze and  plan the daily and monthly financial plan and the financial status of the business.</p>
          <p><a class="btn btn-primary" href="/analyze" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="css/reports.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Reports</h2>
          <p>This is where the financial manager can download the reports for the meetings in order to show it to the stake-holders.</p>
          <p><a class="btn btn-danger" href="/reports" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
@endsection