<?php

namespace App\Http\Controllers\search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Uld;
use App\Http\Controllers\excel\ExportController;
use Maatwebsite\Excel\Facades\Excel;

class SearchController extends Controller
{
    public function searchNuld(Request $req)
    {
        $get_nuld = $req->nUld;
        $res = DB::table('ulds')
                    ->where('name', 'LIKE', '%' .$get_nuld. '%')->get();
        
      return view('resultSearch', compact('res'));
    }

    public function downSearh(){
        return Excel::download(new ExportController, 'searchdown.xlsx');
    }

}
