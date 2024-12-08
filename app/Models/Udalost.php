<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Udalost extends Model
{
    use HasFactory;
    protected $fillable = [
        'nazov',
        'datum_uskutocnenia',
        'popis',
        'miesto',
    ];

}
