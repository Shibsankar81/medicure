<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Booking extends Model
{
    use HasFactory;
    //protected $table = 'bookings';
    protected $fillable = [
        'name',
        'age',
        'address',
        'phone',
        'doctor',
        'date',
        'problem',
        'time_slot'
    ];
}
