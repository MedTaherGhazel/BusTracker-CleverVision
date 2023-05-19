<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bus;
use App\Models\Voyage;

class AdminController extends Controller
{
    public function home()
    {
        $buses=bus::all();
        $voyages=Voyage::all();
        return view('admin.home',compact('voyages','buses'));
    }

    public function users ()
    {
        return view('admin.users');
    }


}
