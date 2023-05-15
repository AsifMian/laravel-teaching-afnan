<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('contactUs');
    }

    public function saveContactForm(Request $request) {

        $validated = $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'phone' => 'required',
            'email' => 'nullable|email',
            'preferred_date' => 'required',
            'preferred_time' => 'required',
            'services' => 'required',
            'message' => 'nullable|max:5000'
        ]);


        if($validated) {
            ContactUs::create($validated);
        }

        return redirect()->back()->with('successMessage', "Your Appointment booked, Our team will contact you shortly.");
    }
}
