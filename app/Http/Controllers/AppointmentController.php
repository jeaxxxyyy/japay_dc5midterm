<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AppointmentController extends Controller
{
    public function index()
    {
        return Inertia::render('Appointments/Index', [
            'appointments' => Appointment::where('user_id', auth()->id())->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required',
            'doctor_name' => 'required',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
        ]);

        Appointment::create([
            'user_id' => auth()->id(),
            ...$request->all()
        ]);

        return redirect()->back();
    }
}
