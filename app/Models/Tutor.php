<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'first_name',
        'last_name',
        'email',
        'direction',
        'tlf',
        'valoration'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'tutor_id');
    }

    public function menors() //hasMany significa que cada Tutor puede tener varios Menor
    {
        return $this->hasMany(Menor::class, 'tutor_id');
    }

    public function contratacion()
    {
        return $this->hasMany(Contratacion::class, 'tutor_id');
    }

}
