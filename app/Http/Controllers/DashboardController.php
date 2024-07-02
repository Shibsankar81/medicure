<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = User::paginate(10)->where('role', 'patient');
        $doctor = Doctor::all();
        $booking = Booking::all();
        $message = Contact::all();

        $total_patients = User::where('role', 'patient')->count();
        $total_doctors = Doctor::count();
        $total_appointments = Booking::count();
        $total_message = Contact::count();

        return view('dashboard', ['user_details' => $user, 'doctor_details' => $doctor, 'appointment_details' => $booking, 'total_patients'=>$total_patients,'total_doctors'=>$total_doctors, 'total_appointments'=>$total_appointments, 'message'=>$message, 'total_message'=>$total_message]);
    }

    public function UserDestroy($id){
        // dd($id);
        $user_data = User::findOrFail($id);
        $user_data->delete();
        return redirect()->back()->with('success', 'Patient Deleted Successfully..............');
    }

    public function appointmentDestroy($id){
        // dd($id);
        $booking_data = Booking::findOrFail($id);
        $booking_data->delete();
        return redirect()->back()->with('success', 'Appointment Deleted Successfully..................');
    }

    public function doctorDestroy($id){
        // dd($id);
        $doctor_data = Doctor::findOrFail($id);
        $doctor_data->delete();
        return redirect()->back()->with('success', 'Doctor Deleted Successfully.............');
    }

    public function messageDestroy($id){
        // dd($id);
        $message = Contact::findOrFail($id);
        $message->delete();
        return redirect()->back()->with('success', 'Mesage Deleted successfully...........');
    }

}
