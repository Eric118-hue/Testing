<?php

namespace App\Http\Controllers\excel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;
use App\Models\Uld;

class ExportController implements FromCollection, withHeadings
{
    
    public function collection(){
        return Uld::select('name', 'date', 'hour')->get();
    }

    public function headings(): array {
        return ["NAME", "DATE", "HOUR"];
    }
}

