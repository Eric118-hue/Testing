<?php

namespace App\Models;
use App\Models\Uld;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SacPostaux extends Model
{
    use HasFactory;
    protected $table = 'sac_postauxes';
    protected $primaryKey = 'id';
    // BelongsTo in ULd
    public function uld()
    {
        return $this->belongsTo(Uld::class);
    }
}
