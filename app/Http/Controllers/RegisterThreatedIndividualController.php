<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\RegisterThreatedIndividual;
use Illuminate\Http\Request;
use PDF;
class RegisterThreatedIndividualController extends Controller
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
        'memberID'=>'required|exists:members|max:255',
        'phone'=>'required|min:10|numeric',
        'fName'=>'required|min:3',
        'lName'=>'required|min:3',
        'clinicID'=>'required|exists:gratitude_clinics,g_clinicID|max:255',
        ]);
        $email=$request->session()->get("loginEmail");
        $cardOfficer=staff::where('email','=',$email)->first();
        $cardOfficerID=$cardOfficer->employeeID;
        
        $RegisterThreated=new RegisterThreatedIndividual();
        $RegisterThreated->memberId=$request->input('memberID');
        $RegisterThreated->firstName=$request->input('fName');
        $RegisterThreated->lastName= $request->input('lName');
      //  $RegisterThreated->gender= $request->input('gender');
        $RegisterThreated->phone=$request->input('phone');
        $RegisterThreated->gratitudeclinicID=  $request->input('clinicID');
        $RegisterThreated->cardOfficerID= $cardOfficerID;

        $RegisterThreated->save();
        return 'saaved successfully';
    }
    public function generateReport(){
        // $data=new RegisterThreatedIndividual();
        $dataOfArray=array();

    $allData=RegisterThreatedIndividual::all();
    // foreach($allData as $data){
    //     // $dataOfArray[]=array(
    //     //     'memberID'=>$data['memberId'],
    //     //     'firstName'=>$data['firstName'],
    //     //     'lastName'=>$data['lastName'],
    //     //     'gratitudeclinicID'=>$data['gratitudeclinicID'],
    //     //     'phone'=>$data['phone'],
    //     //     'created_at'=>$data['created_at'],

    //     // );
        
    // }

    $treated =[
        'treated'=>$allData
    ];

    
  
    $pdf=PDF::loadView('cardOfficer.generatReport',$treated);

       return $pdf->download('treatedIndividual.pdf');
        // return view('cardOfficer.generatReport',['allData'=>$allData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showThreatedIndividual(){
        $treatedIndividual=RegisterThreatedIndividual::all();
        return view('cardOfficer.viewThreatedIndividual',['allData'=>$treatedIndividual]);
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterThreatedIndividual  $registerThreatedIndividual
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterThreatedIndividual $registerThreatedIndividual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterThreatedIndividual  $registerThreatedIndividual
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterThreatedIndividual $registerThreatedIndividual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisterThreatedIndividual  $registerThreatedIndividual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterThreatedIndividual $registerThreatedIndividual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterThreatedIndividual  $registerThreatedIndividual
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterThreatedIndividual $registerThreatedIndividual)
    {
        //
    }
}
