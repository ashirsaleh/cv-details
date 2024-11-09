<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Applicant;

class ProfileController extends Controller
{
    public function index()
    {
        $applicant = Applicant::latest()->paginate(9); 
        return view('profile.profiles', compact('applicant'));
    }

    public function show($id)
    {
        $applicant = Applicant::with(['education', 'workExperiences', 'skills'])->findOrFail($id);
        return view('profile.show', compact('applicant'));
    }

    public function create()
{
    return view('profile.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|unique:applicants,email|max:255',
        'phone_number' => 'required|string|max:20',
        'education.*.institution_name' => 'required|string|max:255',
        'education.*.degree' => 'required|string|max:255',
        'education.*.graduation_year' => 'required|digits:4',
        'work_experiences.*.company_name' => 'required|string|max:255',
        'work_experiences.*.role' => 'required|string|max:255',
        'work_experiences.*.duration' => 'required|string|max:255',
        'skills.*.name' => 'required|string|max:255',
    ]);

    $applicant = Applicant::create([
        'full_name' => $validatedData['full_name'],
        'email' => $validatedData['email'],
        'phone_number' => $validatedData['phone_number'],
    ]);

    if (isset($request->education)) {
        foreach ($request->education as $edu) {
            $applicant->education()->create($edu);
        }
    }

    if (isset($request->work_experiences)) {
        foreach ($request->work_experiences as $exp) {
            $applicant->workExperiences()->create($exp);
        }
    }

    if (isset($request->skills)) {
        foreach ($request->skills as $skill) {
            $applicant->skills()->create($skill);
        }
    }

    return redirect()->route('profile.show', $applicant->id)
        ->with('success', 'Applicant profile created successfully');
}

    public function edit($id)
    {
        $applicant = Applicant::with(['education', 'workExperiences', 'skills'])->findOrFail($id);
        return view('profile.edit', compact('applicant'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'education.*.institution_name' => 'required|string|max:255',
            'education.*.degree' => 'required|string|max:255',
            'education.*.graduation_year' => 'required|digits:4',
            'work_experiences.*.company_name' => 'required|string|max:255',
            'work_experiences.*.role' => 'required|string|max:255',
            'work_experiences.*.duration' => 'required|string|max:255',
            'skills.*.name' => 'required|string|max:255',
        ]);

        $applicant = Applicant::findOrFail($id);
        $applicant->update($validatedData);
        
        // Update related models
        $applicant->education()->delete();
        $applicant->workExperiences()->delete();
        $applicant->skills()->delete();

        foreach ($request->education as $edu) {
            $applicant->education()->create($edu);
        }

        foreach ($request->work_experiences as $exp) {
            $applicant->workExperiences()->create($exp);
        }

        foreach ($request->skills as $skill) {
            $applicant->skills()->create($skill);
        }

        return redirect()->route('profile.show', $id)->with('success', 'Profile updated successfully');
        }

    public function destroy(Applicant $applicant)
    {
        try {
            $applicant->delete();
            return redirect()->route('profiles.index')
                           ->with('success', 'Profile deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('profiles.index')
                           ->with('error', 'Error deleting profile');
        }
    }
}