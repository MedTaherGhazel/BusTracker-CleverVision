<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;


class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses=bus::all();
         return view('admin.buses.index',compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $reg_num = $request->reg_num;
        $brand = $request->brand;

        $newBus = new bus();
        $newBus->reg_num = $reg_num;
        $newBus->brand = $brand;
        $newBus->dispo = 0;
        $newBus->save();
        return redirect()->back()->with('success','Bus added Successfully');


        // return view('admin.buses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus =bus::find($id);
        $buses=bus::all();
        return view('admin.buses.edit',compact('bus','buses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bus = bus::findOrFail($id);

        $bus->reg_num= $request->reg_num;
        $bus->brand= $request->brand;
        $bus->save();
        return redirect()->route('admin.buses.index','$bus->id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = bus::findOrFail($id);
        $bus->delete();
        return redirect()->route('admin.buses.index')->with('success','Bus added Successfully');
    }
}
