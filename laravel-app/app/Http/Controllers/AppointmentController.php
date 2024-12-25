<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with(['patient', 'counselor'])->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'counselor_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'status' => 'required|string',
        ]);

        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'Janji temu berhasil dibuat.');
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'counselor_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'status' => 'required|string',
        ]);

        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'Janji temu berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Appointment::findOrFail($id)->delete();
        return redirect()->route('appointments.index')->with('success', 'Janji temu berhasil dihapus.');
    }
}
