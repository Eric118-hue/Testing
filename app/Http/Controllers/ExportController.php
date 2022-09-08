<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUld;

class ExportController extends Controller
{
    function index()
    {
        return view('export');
    }

    //import data
    function importUld()
    {
        Excel::import(new ImportUld, request()->file('file'));

        return back();
    }
}
