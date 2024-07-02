<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function booking(){
        $doctors = Doctor::all();
        // dd($doctors);
        return view('/appointment', compact('doctors'));
        // return view('/booking');
    }
    public function bookingPost(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required|string|min:4',
            'phone' => 'required|numeric|regex:/^[0-9]{10}$/',
            'doctor' => 'required|string',
            'date' => 'required|date',
            'time_slot' => 'required|string|unique:bookings,time_slot,NULL,id,date,' . $request->date,
            'problem' => 'required|string|min:6',
        ]);

        $booking = Booking::create($validatedata);
        return view('/appointment')->with('success', 'Booking successfully completed');
    }

    public function availableTimeSlots(Request $request)
    {
        $doctor = $request->input('doctor');
        $date = $request->input('date');
        $existingBookings = Booking::where('date', $date)->where('doctor', $doctor)->pluck('time_slot')->toArray();
        $allTimeSlots = $this->generateTimeSlots('10:00', '15:00', 15);

        $availableTimeSlots = array_diff($allTimeSlots, $existingBookings);

        return response()->json($availableTimeSlots);
    }

    private function generateTimeSlots($startTime, $endTime, $interval)
    {
        $timeSlots = [];
        $start = strtotime($startTime);
        $end = strtotime($endTime);

        while ($start < $end) {
            $timeSlots[] = date('H:i', $start);
            $start = strtotime("+{$interval} minutes", $start);
        }

        return $timeSlots;
    }
}
