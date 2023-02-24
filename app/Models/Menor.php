<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menor extends Model
{
    use HasFactory;

    protected $table = "menores";

    protected $fillable = [
        'id',
        'name',
        'edad',
        'detalles',
        'tutor_id'
    ];
    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }
    public function cuidador()
    {
        return $this->belongsToMany(Cuidador::class, 'contratacion', 'menor_id', 'cuidador_id');
    }
}
