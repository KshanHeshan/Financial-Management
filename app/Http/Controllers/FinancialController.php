<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Income;
use App\Expence;

class FinancialController extends Controller
{
    public function index() {
        return view('manager.index');
    }

    public function netProfit() {
        $expences = Expence::all();
        $incomes = Income::all();
        $totalIncome = DB::table('incomes')->sum('amount');
        $totalExpence = DB::table('expences')->sum('amount');
        return view('manager.netprofit')->with(['expences'=>$expences, 'incomes'=>$incomes, 'totalExpence'=>$totalExpence, 'totalIncome'=>$totalIncome]);
    }

    public function analyze() {
        return view('manager.analyze');
    }

    public function reports() {
        $expences = Expence::all();
        $incomes = Income::all();
        $totalIncome = DB::table('incomes')->sum('amount');
        $totalExpence = DB::table('expences')->sum('amount');
        return view('manager.reports')->with(['expences'=>$expences, 'incomes'=>$incomes, 'totalExpence'=>$totalExpence, 'totalIncome'=>$totalIncome]);
    }
}
