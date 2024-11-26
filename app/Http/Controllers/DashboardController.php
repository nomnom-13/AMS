<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $resumes = Resume::latest()->get();

        return view('dashboard.dashboard', ['resumes' => $resumes]);
    }

    public function filterBy(Request $request)
    {

        if ($request->filter == '') {
            $resumes = Resume::latest()->get();
        } else {
            $resumes = Resume::where('applicantStatus', $request->filter)->latest()->get();
        }
        return view('dashboard.dashboard', ['resumes' => $resumes]);
    }
}
