<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Models\OrderGroup;
use App\Models\OrderItem;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('document.form');
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
}
