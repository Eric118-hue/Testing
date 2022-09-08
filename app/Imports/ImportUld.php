<?php

namespace App\Imports;

use App\Models\Uld;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportUld implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Uld([
            'name'=> $row['name'],
            'date' => $row['date'],
            'hour' => $row['hour'],
            'Origine' => $row['origine'],
            'ActualArrival' => $row['actualarrival'],
            'Registre' => $row['registre'],
            'MRDLocation' => $row['mrdlocation'],
            'Handler' => $row['handler'],
            'MRDLabel' => $row['mrdlabel'],
            'RegistCarrier' => $row['registcarrier'],
            'RegistFlight' => $row['registflight'],
            'AttributedCarrier' => $row['attributedcarrier'],
            'AttributedReceptacles' => $row['attributedreceptacles'],
            'Weight' => $row['weight']
        ]);
    }
}


