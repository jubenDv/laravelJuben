<?php

namespace App\Http\Controllers;
use App\Models\Applicant;


use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function create(){
        return view('applicants.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'age'=>'required'
        ]);
        // Try to save the applicant and check for success
        try {
            $newApplicant = Applicant::create($data);

            // Flash a success message to the session
            return redirect()->back()->with('success', 'Applicant successfully created!');
        } catch (\Exception $e) {
            // If an error occurs, flash an error message to the session
            return redirect()->back()->with('error', 'Failed to create applicant. Please try again.');
        }
    }
}
