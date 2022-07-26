<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;

class BoardController extends Controller
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
        //
    }
public function boardStaffView(){
    $staffs=Staff::all();
    return view('board/boardviewStaffMembers',['staffs'=>$staffs]);
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
    public function show()
    {   
        
        $member = Member::all();
        // return view('healthEx.viewMembers');
        // DB::table('members')->paginate(15) //you can  use in iin theplace of $member
         return view('board/viewMembers',['members'=>$member]);

    }
    public function BoardViewProfile($id){
        $data=DB::table('members')
        ->join('childrens','members.memberID','=','childrens.memberID')
        ->select('childrens.id','childrens.memberID','childrens.firstName',
        'childrens.lastName','members.photo','childrens.photo')
        ->where('members.memberID','=',$id)
        ->get();
        return view('board/boardViewDetails',['family'=>$data]); 
        // $data=Member::find($id)->first();
   
        
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
