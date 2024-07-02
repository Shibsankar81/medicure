<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'email',
        'password',
        'degree',
        'expertise',
        'hospital',
        'phone',
        'exprience',
        'about',
        'img'
    ];
}
