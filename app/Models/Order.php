<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;

    // protected $table = "contrataciones";

    // protected $fillable = [
    //     'cuidador_id',
    //     'menor_id'
    // ];

    // public function menores()
    // {
    //     return $this->belongsTo(Menor::class, 'menor_id');
    // }

    // public function cuidadores()
    // {
    //     return $this->belongsTo(Cuidador::class, 'menor_id');
    // }
}
