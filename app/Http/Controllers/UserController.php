<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // public function register(){
    //     return view('register');
    // }
    // public function registerPost(Request $request){
    //     $user = new User();
    //     $user->name= $request->name;
    //     $user->email= $request->email;
    //     $user->phone= $request->phone;
    //     $user->village= $request->village;
    //     $user->password= Hash::make($request->password);

    //     $user->save();
    //     return redirect('/login')-> with('success', 'registration successfully completed');

    // }
    public function register(){
        return view('register');
    }
    public function registerPost(Request $request){
        $request->validate([
            'name'=>'required|string',
            'email'=> 'required|email|unique:users',
            'phone'=> 'required|min:10|numeric',
            'village'=>'required|string',
            'password'=>'required|min:6|alpha_num'
        ]);
        User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'village'=>$request->village,
            'password'=>Hash::make($request->password),
            'role'=>'patient',

        ]);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login');

    }



    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('dashboard');
            }
             elseif ($user->role == 'doctor') {
                return redirect()->route('doctorDashboard');
            } 
            else {
                return redirect('/');
            }
        }
        return redirect('login')->with('error', 'not successful')->onlyInput('email');

    }
    // public function records(){
    //     $records = User::all();
    // //   return $records = DB::table('doctors')->get();
    
    //     return view('admin', ['records'=> $records]);
    // }

    public function logout(Request $request){
        // $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
