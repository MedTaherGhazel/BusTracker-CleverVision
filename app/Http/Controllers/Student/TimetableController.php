<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Voyage;

class TimetableController extends Controller
{
    public function index()
    {
        $voyages=Voyage::all();

        return view('student.timetable', compact('voyages'));
    }
}
