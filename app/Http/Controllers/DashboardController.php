<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Exports\SurveiSwakelola;
use App\Models\OrderGroup;
use App\Models\OrderItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('document.format');
    }

    public function format()
    {
        return view('document.format');
    }
    
    public function page1()
    {
        return view('pages.page1');
    }

    public function page2()
    {
        return view('pages.page2');
    }

    public function page3()
    {
        return view('pages.page3');
    }

    public function page4()
    {
        return view('pages.page4');
    }

    public function page1Download()
    {
        $pdf = PDF::loadView('pages.page1')->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('page1.pdf');
        // return view('pages.page1');
    }

    public function page2Download()
    {
        $pdf = PDF::loadView('pages.page2');
        return $pdf->download('page2.pdf');
        // return view('pages.page2');
    }

    public function page3Download()
    {
        $pdf = PDF::loadView('pages.page3');
        return $pdf->download('page3.pdf');
        return view('pages.page3');
    }

    public function page4Download()
    {
        $pdf = PDF::loadView('pages.page4');
        return $pdf->download('page4.pdf');
        // return view('pages.page4');
    }

    public function exportSwakelola()
    {
        return Excel::download(new SurveiSwakelola, 'survei swakelola.xlsx');
        // return view('pages.swakelola');
    }
}
