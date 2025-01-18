<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'title_before',
        'title_after',
        'position',
        'email',
        'phone',
        'section',
        'section_position',
        'photo_path',
        'order',
    ];
}
