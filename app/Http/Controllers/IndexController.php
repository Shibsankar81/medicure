<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
{
    $users = Cache::remember('user_details',30, function(){
        return User::get();
     });
     $bookings = Cache::remember('appointment_details',30, function(){
        return Booking::get();
     });
     $doctors = Cache::remember('doctor_details',30, function(){
        return Doctor::get();
     });

    return view('/admin', ['users' => $users, 'bookings' => $bookings, 'doctors'=> $doctors]);
}

public function destroy(string $id)
    {
        {
            $booking = Booking::find($id); // Use Booking model directly
    
            if ($booking) {
                $booking->delete();
            }
    
            return redirect('/admin');
        }
        // User::where('id', $id)->delete();
        // Booking::where('id', $id)->delete();
        // return redirect('/admin');

}

}
