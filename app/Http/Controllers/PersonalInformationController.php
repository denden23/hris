<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    // Display a list of personal information records
    public function index()
    {
        $personalInformation = PersonalInformation::all();
        return view('personal_information.index', compact('personalInformation'));
    }

    // Show the form for creating a new record
    public function create()
    {
        return view('personal_information.create');
    }

    // Store a newly created record
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'surname' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'sex' => 'required|in:Male,Female',
            'civil_status' => 'required|in:Single,Widowed,Married,Separated,Others',
            // Add other fields and validation rules as needed
        ]);

        PersonalInformation::create($validatedData);
        return redirect()->route('personal_information.index')->with('success', 'Personal Information created successfully.');
    }

    // Show the form for editing a specific record
    public function edit($id)
    {
        $personalInformation = PersonalInformation::findOrFail($id);
        return view('personal_information.edit', compact('personalInformation'));
    }

    // Update a specific record
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'surname' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'sex' => 'required|in:Male,Female',
            'civil_status' => 'required|in:Single,Widowed,Married,Separated,Others',
            // Add other fields and validation rules as needed
        ]);

        $personalInformation = PersonalInformation::findOrFail($id);
        $personalInformation->update($validatedData);
        return redirect()->route('personal_information.index')->with('success', 'Personal Information updated successfully.');
    }

    // Delete a specific record
    public function destroy($id)
    {
        $personalInformation = PersonalInformation::findOrFail($id);
        $personalInformation->delete();
        return redirect()->route('personal_information.index')->with('success', 'Personal Information deleted successfully.');
    }

    public function show($id)
    {
        $personalInformation = PersonalInformation::findOrFail($id); // Fetch the record or throw a 404 error
        return view('personal_information.show', compact('personalInformation')); // Pass data to a "show" view
    }

}
