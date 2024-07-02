<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class EditController extends Controller
{
    public function bookedit($id):view
    {
        $booking = Booking::find($id);
        //dd($booking);
        return view('bookedit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking, $id): RedirectResponse
    {
        
        $request->validate([
                'name'=>'required',
                'age'=>'required|numeric',
                'address'=>'required|string|min:4',
                'phone'=>'required|numeric|regex:/^[0-9]{10}$/',
                'doctor'=>'required|string',
                'date'=>'required|date',
                'problem'=>'required|string|min:6'
        ]);
        $booking = Booking::find($id);
        $booking->update($request->all());
        return redirect('admin');
    }
}
