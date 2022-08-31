<?php

namespace App\Http\Controllers\search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Uld;

class SearchController extends Controller
{
    public function searchNuld(Request $req)
    {
        $get_nuld = $req->nUld;
        $res = DB::table('ulds')
                    ->where('name', 'LIKE', '%' .$get_nuld. '%')->get();
        
      return view('resultSearch', compact('res'));
    }
}
