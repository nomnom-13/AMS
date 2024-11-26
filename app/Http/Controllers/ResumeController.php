<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        return view('resume.cv', ['resume' => $resume]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        return view('resume.edit', ['resume' => $resume]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        // dd($request);
        if ($request->applicantStatus) {
            $request->validate(
                [
                    'applicantStatus' => ['required']
                ]
            );

            $statusUpdate = $resume->update(
                [
                    'applicantStatus' => $request->applicantStatus
                ]
            );

            if ($statusUpdate) {
                return redirect()->back();
            } else {
                return redirect()->back()->with('error', 'Failed to update resume');
            }
        } else {
            
            $request->validate([
                'lastname' => ['required', 'max:50'],
                'firstname' => ['required', 'max:50'],
                'middle' => ['max:10'],
                'job' => ['required', 'max:255'],
                'address' => ['required', 'max:255'],
                'number' => ['required', 'max:15'],
                'email' => ['required', 'email', 'max:100'],
                'objective' => ['required'],
                'birthday' => ['required'],
                'birthplace' => ['required', 'max:255'],
                'sex' => ['required', 'max:10'],
                'civil' => ['required', 'max:50'],
                'religion' => ['required', 'max:100'],
                'nationality' => ['required', 'max:50'],
                'father' => ['required', 'max:255'],
                'mother' => ['required', 'max:255'],
                'tschool' => ['required', 'max:255'],
                'taddress' => ['required', 'max:255'],
                'course' => ['required', 'max:255'],
                'tyear' => ['required', 'max:255'],
                'sschool' => ['required', 'max:255'],
                'saddress' => ['required', 'max:255'],
                'syear' => ['required', 'max:255'],
                'jschool' => ['max:255'],
                'jaddress' => ['max:255'],
                'jyear' => ['max:255'],
                'pschool' => ['required', 'max:255'],
                'paddress' => ['required', 'max:255'],
                'pyear' => ['required', 'max:255'],
                'applicationFrom' => ['max:255']
            ]);

            $img_path = $resume->applicantImage ? $resume->applicantImage : null;
            if ($request->hasFile('image')) {
                if ($resume->applicantImage) {
                    Storage::disk('public')->delete($resume->applicantImage);
                }
                $img_path = Storage::disk('public')->put('images', $request->image);
            }
            

            $update = $resume->update([
                'applicantImage' => $img_path,
                'applicantLastName' => $request->lastname,
                'applicantFirstName' => $request->firstname,
                'applicantMiddleInitial' => $request->middle,
                'applyingFor' => $request->job,
                'address' => $request->address,
                'contactNo' => $request->number,
                'email' => $request->email,
                'objective' => $request->objective,
                'dateOfBirth' => $request->birthday,
                'placeOfBirth' => $request->birthplace,
                'sex' => $request->sex,
                'civilStatus' => $request->civil,
                'religion' => $request->religion,
                'nationality' => $request->nationality,
                'fatherName' => $request->father,
                'motherName' => $request->mother,
                'tertiarySchool' => $request->tschool,
                'tertiaryAddress' => $request->taddress,
                'tertiaryCourse' => $request->course,
                'tertiaryYear' => $request->tyear,
                'secondaryShsSchool' => $request->sschool,
                'secondaryShsAddress' => $request->saddress,
                'secondaryShsYear' => $request->syear,
                'secondaryJhsSchool' => $request->jschool,
                'secondaryJhsAddress' => $request->jaddress,
                'secondaryJhsYear' => $request->jyear,
                'primarySchool' => $request->pschool,
                'primaryAddress' => $request->paddress,
                'primaryYear' => $request->pyear,
                'applicationFrom' => $request->applicationFrom
            ]);
           
            if ($update) {
                return redirect()->back()->with('success', 'Resume has been updated successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to update resume');
            }
        }



        // dd($resume);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
