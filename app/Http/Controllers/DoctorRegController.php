<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use DB;

class DoctorRegController extends Controller
{
    public function doctorRegistration(){
        return view('doctorRegistration');
    }

    public function doctorRegistrationPost(Request $request){
     $validdata = $request->validate([
            'name'=>'required|string',
            'age'=>'required|numeric',
            'email'=>'required|email|unique:doctors',
            'password'=>'required|min:6',
            'degree'=>'required',
            'expertise' => 'required',
            'hospital'=>'required',
            'phone'=>'required|numeric|regex:/^[0-9]{10}$/',
            'exprience'=>'required|numeric',
            'about'=>'required',
            'img'=>'required|image|mimes:jpeg, jpg,png,svg|max:8048',
        ]);
        // dd($validdata);

        $imgName= time() . '.' . $request->img->extension();
        $request->img->move(public_path('images/upload/'), $imgName);

        Doctor::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'degree'=>$request->degree,
            'expertise'=>$request->expertise,
            'hospital'=>$request->hospital,
            'phone'=>$request->phone,
            'exprience'=>$request->exprience,
            'about'=>$request->about,
            'img'=>$imgName

        ]);
        $user = User::create([
            'name' =>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password),
            'role'=>'doctor'
        ]);
        // dd($user);
        return redirect('/dashboard')-> with('success', 'Doctor Adding successfully completed');
    }


public function AllDoctor(){
    $doctors = Doctor::all();
    return view('doctor', compact('doctors'));
 }

 public function myAppointments()
    {
        // Ensure the doctor is logged in
        $doctor = Auth::user();
        // dd($doctor);
        // Fetch the logged-in doctor's appointments
        $appointments = Booking::all()->where('doctor', $doctor->name);
        // dd($appointments);
        // Return the appointments, you can pass it to a view or return as JSON
        return view('doctorDashboard', compact('appointments'));
        // Or for API response:
        // return response()->json($appointments);
    }
}