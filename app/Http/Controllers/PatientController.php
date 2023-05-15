<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patient.index', ['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:3|alpha',
            'lname' => 'required|min:3|alpha',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'insurance' => 'required|alpha_num'
        ]);
        Patient::create([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'insurance_id' => $request->insurance,
            'register_id' => Auth::user()->id,
        ]);

        return redirect()->route('patient.index')->with('success',"Patient created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit', ['patient' => $patient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'fname' => 'required|min:3|alpha',
            'lname' => 'required|min:3|alpha',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'insurance' => 'required|alpha_num'
        ]);

        $patient->update([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'insurance_id' => $request->insurance,
            'register_id' => Auth::user()->id,
        ]);
        return redirect()->route('patient.index')->with('success','Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.index')->with('success',"Patient deleted successfully");
    }
}