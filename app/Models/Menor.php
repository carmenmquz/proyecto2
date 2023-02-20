<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tutor_id',
        'first_name',
        'last_name',
        'edad'
    ];

    public function tutors() //pertenece a Tutor
    {
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }
}
