<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Children;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use PDF;



class MemberController extends Controller
{

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




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,
      [  
        
        'photo'=>'image|nullable|max:1999',
        'phone'=>'required|min:10|numeric',
        'fName'=>'required|min:3',
        'mName'=>'required|min:3',
        'lName'=>'required|min:3',
        'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
        'password'=>'required|min:4',
       
      ]);       
      if($request->hasfile('photo')){
        //getfilename with extension
        $fileNameWEx=$request->file('photo')->getClientOriginalName();
        //get just file name
        $fileName=pathinfo($fileNameWEx,PATHINFO_FILENAME);
        //just get extension
        $extension=$request->file('photo')->getClientOriginalExtension();
        //file Name to store
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        //upload image
        $path=$request->file('photo')->storeAs('public/images',$fileNameToStore);

      }
      else{
        $fileNameToStore='no image to store';
      }
       $email=$request->session()->get("loginEmail");
       $staff=Staff::where('email','=',$email)->first();
       $staffID=$staff->employeeID;
       //$staffID=DB::select('select employeeID from staff where email=?',[$email]);

      $member=new Member();
      $member->memberID=$request->input('memberID');
      $member->firstName=$request->input('fName');
      $member->middleName=$request->input('mName');
      $member->lastName=$request->input('lName');
      $member->dateOfBirth=$request->input('dateOfBirth');
      $member->gender=$request->input('gender');
      $member->phone=$request->input('phone');
      $member->status=$request->input('status');
      $member->photo=$fileNameToStore;
      $member->occopation=$request->input('occopation');
      $member->region=$request->input('region');
      $member->zone=$request->input('zone');
      $member->woreda=$request->input('woreda');
      $member->kebele=$request->input('kebele');
      $member->email=$request->input('email');
      $member->userName=$request->input('uName');
      $password= $request->input('password');
    // $hashedPassword=Hash::make($password);

      $member->password=$request->input('password');
     // $member->member_employeeID=$request->input('employeeID');
      $member->member_employeeID=$staffID;
      $member->save();
    
      return $member::all();
      // ->back()->with('success','member registered successfully');
       

      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */

     public function viewProfile($id){
     $data=DB::table('members')
     ->join('childrens','members.memberID','=','childrens.memberID')
     ->select('childrens.id','childrens.memberID','childrens.firstName',
     'childrens.lastName','members.photo','childrens.photo')
     ->where('members.memberID','=',$id)
     ->get();
     return view('healthEx/viewDetails',['family'=>$data]); 
     // $data=Member::find($id)->first();

     
     }
    public function searchMember(Request $request){
      $member=Member::find($request->search);
     return view('healthEx/searchedValue',['member'=>$member]);
      ;
    }
    public function show()
    {   
        
        $member = Member::paginate(5);
        // return view('healthEx.viewMembers');
        // DB::table('members')->paginate(15) //you can  use in iin theplace of $member
         return view('healthEx/viewMembers',['members'=>$member]);

    }
    public function giveMembershipID($id){

      $data=Member::find($id);
      $result=DB::select('select firstName,middleName,photo from childrens where memberID=?',[$id]);
      $family =[
        'data'=>$data,
        'result'=>$result
    ];
    $pdf=PDF::loadView('healthEx.membershipID',$family);
  
       return $pdf->download('memberID.pdf');
   
     
      // return $result;
      // return view('healthEx.membershipID',['data'=>$data,'result'=>$result]);
      // $data=DB::table('members')
      // ->join('childrens','members.memberID','=','childrens.memberID')
      // ->select('childrens.firstName','childrens.middleName','childrens.photo')->get();
      //return $data;
      
    }
    public function generateMembershipID($id){
      // $data=new RegisterThreatedIndividual();
      $dataOfArray=array();

  $data=Member::find($id);
  $result=DB::select('select firstName,middleName,photo from childrens where memberID=?',[$id]);


  $family =[
      'data'=>$data,
      'result'=>$result
  ];

  

  $pdf=PDF::loadView('healthEx.giveMembershipID',$family);

     return $pdf->download('memberIDpdf');
      // return view('cardOfficer.generatReport',['allData'=>$allData]);
  }
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    // for children
    public function edit($id)
    {
       $data=Member::find($id) ;
      return view('healthEx.editMember',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
  
    public function update(Request $request, Children $child)
    {
      $email=$request->session()->get("loginEmail");
      $staff=Staff::where('email','=',$email)->first();
      $staffID=$staff->employeeID;
      ///
      if($request->hasfile('photo')){
        //getfilename with extension
        $fileNameWEx=$request->file('photo')->getClientOriginalName();
        //get just file name
        $fileName=pathinfo($fileNameWEx,PATHINFO_FILENAME);
        //just get extension
        $extension=$request->file('photo')->getClientOriginalExtension();
        //file Name to store
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        //upload image
        $path=$request->file('photo')->storeAs('public/images',$fileNameToStore);

      }
      else{
        $fileNameToStore='no image to store';
      }
      ///
      $child->memberID=$request->memberID;
      $child->firstName=$request->fName;
      $child->middleName=$request->mName;
      $child->lastName=$request->lName;
      $child->dateOfBirth=$request->dateOfBirth;
      $child->gender=$request->gender;
      $child->status=$request->disablity;
      $child->photo=$fileNameToStore;
      $child->employeeID=$staffID;
   
      $child->save();
     return $child;     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
              // $children=Children::find($id);
              // $children->delete();
        $member=Member::find($id);
        $member->delete();
        return redirect()->back()->with('success','delete successfully');
       
        
    }
    //for card officer validity of eligibility
    public function validatePhone(Request $request){
      $phone=$request['search'];
      // $result=Member::where('phone','like','%'.$phone.'%')->get();
       $result=DB::select('select memberID,firstName,middleName,lastName,status,photo from members where phone=?',[$phone]);
       if($result){
        return view('cardOfficer.validatedResultPage',['result'=>$result]) ;
       }
      
   
    }
    public function renew($id){
      $data=Member::find($id);
      $renewed='renewed';
      $not_renewed='not_renewed';
      if($data->status==$renewed){
        $data->update(['status'=>$not_renewed]);
        return redirect()->back();
      }
      else {
        $data->update(['status'=>$renewed]);
        return redirect()->back();
      }
     
    }
   
}
