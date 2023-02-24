<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = "tutores";

    protected $fillable = [
        'id',
        'name',
        'email',
        'imagen',
        'pais',
        'ciudad',
        'sexo',
        'telefono'
    ];

    public function menores()
    {
        return $this->hasMany(Menor::class, 'tutor_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }
}
