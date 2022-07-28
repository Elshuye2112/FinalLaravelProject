<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\AdminAcount;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
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
    public function create(Request $request){ 
        $email=$request->session()->get("loginEmail");
        $admin=AdminAcount::where('email','=',$email)->first();
        $adminID=$admin->id;

        $staff=new Staff();
        $staff->employeeID=$request->input('employeeID');
        $staff->adminID=$adminID;
        $staff->firstName= $request->input('fName');
        $staff->lastName=$request->input('lName');
        $staff->dateOfBirth= $request->input('dateofbirth');
        $staff->gender= $request->input('gender');
        $staff->region=$request->input('region');
        $staff->zone=  $request->input('zone');
        $staff->woreda=$request->input('woreda');
        $staff->email =$request->input('email');
        $staff->kebele=$request->input('kebele');
        $staff->phone= $request->input('phone');
        $staff->profession= $request->input('profession');
        $staff->levelOfEducation=  $request->input('educationlevel');
        $staff->userName=$request->input('userName');
        $staff->password=$request->input('password');
        $staff->role = $request->input('role');
        $staff->schemeID=$request->input('schemeID');
        $staff->save();
        return 'saved successfully';
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
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        $staffs=Staff::paginate(5);
        return view('admin/viewStaffAcount',['staffs'=>$staffs]);

    }
    public function deleteStaff($id){
        $staff=Staff::find($id);
        $staff->delete();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */

    public function editAccount( $id)
    {    
        $staff=Staff::find($id);
        return view('admin/editAccount',compact('staff','id'));
    }
    public function viewBySearch(Request $request){
        
        $staff=Staff::find($request->input('employeeID'));
        if($staff)
       
         return view('admin/searchedPage',['staff'=>$staff]);
        else{
            dd('The ID you entered is not matched in the database');
        }

        
    }
    public  function updateAcount(Request $request){
        // for session
       $email=$request->session()->get("loginEmail");
        $admin=AdminAcount::where('email','=',$email)->first();
       $adminID=$admin->id;
        
       $staff=Staff::find($request->input('employeeID'));
        $staff->adminID=1;
        $staff->firstName= $request->input('fName');
        $staff->lastName=$request->input('lName');
        $staff->dateOfBirth= $request->input('dateofbirth');
       $staff->gender= $request->input('gender');
        $staff->region=$request->input('region');
        $staff->zone=  $request->input('zone');
        $staff->woreda=$request->input('woreda');
        $staff->email=$request->input('email');
        $staff->kebele=$request->input('kebele');
        $staff->phone= $request->input('phone');
        $staff->profession= $request->input('profession');
        $staff->levelOfEducation=  $request->input('educationlevel');
        $staff->userName=$request->input('userName');
        $staff->password=$request->input('password');
        $staff->role = $request->input('role');
        $staff->schemeID=$request->input('schemeID');
        $staff->save();
        if($staff)
         return redirect()->back()->with('success','update successfully');
else{
    return redirect()->back()->with('fail','not update successfully');

}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */

     //Search individual 
    public function update(Request $request, $staffId)
    {
        
    }
    public function viewStaffMember(){
        $data=Staff::all();
        return view('board/viewStaff',['staffs'=>$data]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */

    public function viewProfileStaff($id){
        $staff=Staff::find($id);
        return view('admin.staffDetails',['staff'=>$staff]);
     }
    // public function viewProfile($id){
      //  $staff=Staff::find($id);
       // return view('admin.staffDetails',['staff'=>$staff]);
    // }
     //
     public function viewProfileboard($id){
        $staff=Staff::find($id);
        return view('admin.staffDetails',['staff'=>$staff]);
     }
    public function destroy(Staff $staff)
    {
        //
    }
}
