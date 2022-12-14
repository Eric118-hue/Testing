<?php

namespace App\Models;
use App\Models\SacPostaux;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uld extends Model
{
    use HasFactory;

    protected $table = 'ulds';
    protected $primaryKey = 'id';

    // Uld has many sacpostaux
    public function sacpostauxs()
    {
        return $this->hasMany(SacPostaux::class);
    }
}
