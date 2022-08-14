<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
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

    $payment= new Payment();
    $payment->paymentID=$request->input('paymentID');
    $payment->dateOfPayment=$request->input('dateOfPayment');
    $payment->typesOfPayment=$request->input('type');
    $payment->amount=$request->input('amount');
    $payment->cashier=$request->input('cashier');
    $payment->waysOfPayment=$request->input('waysOfPayment');
    $payment->accountID=$request->input('accountID');
    $result=$payment->save();
    if($result)
    return redirect()->back()->with('success','successfully registered');
  else{
    return redirec()->back()->with('fail','Not registered successfully');
  }

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Payment $payment)
    {
        return $payment::all();
    }
    public function viewCashIn(){
        $cashin='cashin';
        $result=DB::select('select paymentID,dateOfPayment,typesOfPayment,amount,cashier,waysOfPayment,accountID from payments where typesOfPayment=?',[$cashin]);

        return view('financeOfficer/viewCashin',['cashin'=>$result]);
    }
    public function viewCashOut(){
        //  $data=Payment::paginate(5);
         $cashout='cashout';
         $result=DB::select('select paymentID,dateOfPayment,typesOfPayment,amount,cashier,waysOfPayment,accountID from payments where typesOfPayment=?',[$cashout]);

         
         return view('financeOfficer/viewCashout',['cashout'=>$result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
