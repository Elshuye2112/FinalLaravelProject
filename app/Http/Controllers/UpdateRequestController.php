<?php

namespace App\Http\Controllers;

use App\Models\UpdateRequest;
use Illuminate\Http\Request;

class UpdateRequestController extends Controller
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
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
          $updateRequest = new UpdateRequest();
          $updateRequest->memberID=$request->input('memberID');
          $updateRequest->subject=$request->input('subject');
          $updateRequest->description=$request->input('description');
          $updateRequest->save();
          return $updateRequest::all();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UpdateRequest  $updateRequest
     * @return \Illuminate\Http\Response
     */
    public function show(UpdateRequest $updateRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UpdateRequest  $updateRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(UpdateRequest $updateRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UpdateRequest  $updateRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UpdateRequest $updateRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UpdateRequest  $updateRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdateRequest $updateRequest)
    {
        //
    }
}
