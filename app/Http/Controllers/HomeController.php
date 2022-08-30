<?php

namespace App\Http\Controllers;
use App\Models\SacPostaux;
use App\Models\Uld;
use App\Http\Controllers\excel\ExportController;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function export()
    {
        $ulds = Uld::all();
        $sacPost = SacPostaux::all();
        return view('export',compact('ulds','sacPost'));
    }

    public function exportExcel(){
        return Excel::download(new ExportController, 'uld.xlsx');
    }
}
