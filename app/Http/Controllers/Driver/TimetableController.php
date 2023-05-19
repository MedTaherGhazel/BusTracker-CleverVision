<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Voyage;

class TimetableController extends Controller
{
    public function index()
    {

        $myid=auth()->user();
        $voyages=Voyage::where('driver_id', $myid->id)->get();
        return view('driver.timetable',compact('voyages','myid'));
    }

    public function travels(){

        return view('driver.travels');
    }
}
