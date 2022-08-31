<?php

namespace App\Http\Controllers\excel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Uld;

class ExportController implements FromCollection, WithHeadings
{
    
    public function collection(){
        return Uld::select('name', 'date','hour','Origine','ActualArrival',
                            'Registre','MRDLocation','Handler','MRDLabel',
                            'RegistCarrier','RegistFlight','AttributedCarrier','AttributedReceptacles',
                            'Weight')->get();
    }

    public function headings(): array {
        return ['name','date','hour', 'Origine','ActualArrival','Registre','MRDLocation','Handler','MRDLabel','RegistCarrier','RegistFlight','AttributedCarrier',
            'AttributedReceptacles','Weight'];
    }
}

