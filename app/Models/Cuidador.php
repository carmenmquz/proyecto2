<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'first_name',
        'last_name',
        'direction',
        'email',
        'tlf',
        'valoration'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
