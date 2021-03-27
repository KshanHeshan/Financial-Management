<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use DB;
use App\User;

class ChartController extends Controller
{
    public function index()

    {

        return view('test.chart');

    }
}
