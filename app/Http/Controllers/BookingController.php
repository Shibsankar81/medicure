<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BookingController extends Controller
{
    public function booking(){
        $doctors = Doctor::all();
        // dd($doctors);
        return view('booking', compact('doctors'));
        // return view('/booking');
    }
    public function bookingPost(Request $request){
                // $booking = new Booking();
                // $booking->name= $request->name;
                // $booking->age= $request->age;
                // $booking->address= $request->address;
                // $booking->phone= $request->phone;
                // $booking->doctor= $request->doctor;
                // $booking->date= $request->date;
                // $booking->problem= $request->problem;
        
                // $booking->save();

            $validatedata = $request->validate([
                
                'name'=>'required',
                'age'=>'required|numeric',
                'address'=>'required|string|min:4',
                'phone'=>'required|numeric|regex:/^[0-9]{10}$/',
                'doctor'=>'required|string',
                'date'=>'required|date',
                'problem'=>'required|string|min:6'

            ]);
            $booking = Booking::create($validatedata);
                return redirect('/#booking')-> with('success', 'submit successfully completed');

    }

    // public function doctorName()
    // {
    // $doctors = Doctor::all();
    // return view('booking', compact('doctors'));
    // }
}
