<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Income;
use App\Expence;

class PDFController extends Controller
{
    public function getPDF() {
        $expences = Expence::all();
        $incomes = Income::all();
        $totalIncome = DB::table('incomes')->sum('amount');
        $totalExpence = DB::table('expences')->sum('amount');
        $pdf = PDF::loadView('PDF.pdfFile', ['expences' => $expences, 'incomes' => $incomes, 'totalIncome' => $totalIncome, 'totalExpence' => $totalExpence]);
        return $pdf->stream('Profit or loss statement.pdf');
    }

}
