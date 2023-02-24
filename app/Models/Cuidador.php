<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;

    protected $table = "cuidadores";

    protected $fillable = [
        'id',
        'name',
        'direccion',
        'edad',
        'telefono'
    ];

    public function menores()
    {
        return $this->belongsToMany(Menor::class, 'contratacion', 'cuidador_id', 'menor_id');
    }
}
