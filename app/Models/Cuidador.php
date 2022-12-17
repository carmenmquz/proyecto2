<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;
    protected $table = 'cuidador';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
