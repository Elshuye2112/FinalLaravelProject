<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use Illuminate\Http\Request;

class SchemeController extends Controller
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
        $this->validate($request,[
            'schemeID'=>'required',
            'schemeName'=>'required',
            'region'=>'required|numeric',
            'zone'=>'required|numeric',
            'woreda'=>'required',
            'officetelephone'=>'required|numeric',
            'fax'=>'required|numeric',
            'email'=>'required|unique:scheme',
            'accountID'=>'required|exists:bank_accounts',
          ]);
        $scheme=new Scheme();

        if($request){
        
            $scheme->schemeID=$request->input('schemeID');
            $scheme->name=$request->input('schemeName');
            $scheme->region=$request->input('region');
            $scheme->zone=$request->input('zone');
            $scheme->woreda=$request->input('woreda');
            $scheme->officeTelephone=$request->input('officetelephone');
            $scheme->fax=$request->input('fax');
            $scheme->email=$request->input('email');
            $scheme->bankAccountID=$request->input('accountID');
            $scheme->save();
            return redirect()->back()->with('success','success');
        }
        else{
         return redirect()->back()->with('fail','Not registered ');
        }
    }
    public function bViewScheme(){
       $result= Scheme::all();
       return view('board.viewScheme',['scheme'=>$result]);
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
     * @param  \App\Models\Scheme  $scheme
     * @return \Illuminate\Http\Response
     */
    public function show(Scheme $scheme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scheme  $scheme
     * @return \Illuminate\Http\Response
     */
    public function edit(Scheme $scheme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scheme  $scheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scheme $scheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scheme  $scheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scheme $scheme)
    {
        //
    }
}
