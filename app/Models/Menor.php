<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menor extends Model
{
    use HasFactory;
    protected $table = 'menor';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
