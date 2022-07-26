<?php

namespace App\Http\Controllers;

use App\Models\GratitudeClinic;
use Illuminate\Http\Request;
use App\Models\Staff;
class GratitudeClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

  
    public function create(Request $request)
    {
        $email=$request->session()->get("loginEmail");
        $board=staff::where('email','=',$email)->first();
        $boardID=$board->employeeID;
  
        $gratitudeClinic=new GratitudeClinic();
        $gratitudeClinic->g_clinicID=$request->input('G-ClinicID');
        $gratitudeClinic->name=$request->input('name');

        $gratitudeClinic->region= $request->input('region');
        $gratitudeClinic->zone=$request->input('zone');
        $gratitudeClinic->woreda= $request->input('woreda');
        $gratitudeClinic->servicies= $request->input('services');
        $gratitudeClinic->fax=$request->input('fax');
        $gratitudeClinic->postalCode=  $request->input('postalCode');
        $gratitudeClinic->email=$request->input('email');
        $gratitudeClinic->officeTelephone =$request->input('officeTelephone');
        $gratitudeClinic->staffID=$boardID;
        $gratitudeClinic->accountID= $request->input('accountID');

        $gratitudeClinic->save();
        return 'saaved successfully';
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
     * @param  \App\Models\GratitudeClinic  $gratitudeClinic
     * @return \Illuminate\Http\Response
     */
    public function show(GratitudeClinic $gratitudeClinic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GratitudeClinic  $gratitudeClinic
     * @return \Illuminate\Http\Response
     */
    public function edit(GratitudeClinic $gratitudeClinic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GratitudeClinic  $gratitudeClinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GratitudeClinic $gratitudeClinic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GratitudeClinic  $gratitudeClinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(GratitudeClinic $gratitudeClinic)
    {
        //
    }
}
