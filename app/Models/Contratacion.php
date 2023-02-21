<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tutor_id',
        'cuidador_id',
        'menor_id',
        'fechainicio',
        'fechafin'
    ];

    public function tutors()
    {
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }

    public function cuidadors()
    {
        return $this->belongsTo(Cuidador::class, 'cuidador_id');
    }

    public function menors()
    {
        return $this->belongsTo(Menor::class, 'menor_id');
    }
}
