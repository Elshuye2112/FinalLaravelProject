@extends('financeOfficer/financeOfficerHomepage')
@section('content')
<head>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/inputForm.css">
{{--<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=float]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=Date]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 10px;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  padding-top: 6px;
  width:100%;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>--}}
</head>
<body>
    <div style="padding: 20px">
    <div class="container">
        <h4> {{__('field.registerPayment')}}</h4><hr>
        <div style="padding: 30px">
      <form action="{{url('/createPayment')}}" method='post'>
      @if(Session::has('success'))
        <div class='alert alert-success'>{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class='alert alert-danger'>{{Session::get('fail')}}</div>
        @endif 
      @csrf
      <div class="row">
        <div class="col-25">
          <label for="id">{{__('field.paymentID')}}</label>
        </div>
        <div class="col-75">
          <input type="text" id="date" >
        </div>
      </div>
        <div class="row">
        <div class="col-25">
          <label for="date">{{__('field.dateOfPayment')}}</label>
        </div>
        <div class="col-75">
          <input type="Date" id="date" name="dateOfPayment" >
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="fname">{{__('field.typesOfPayment')}}</label>
        </div>
        <div class="col-75">
        <select id="type" name="type">
            <option value="cashin">{{__('field.cashin')}}</option>
            <option value="cashout">{{__('field.cashout')}}</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="amount">{{__('field.amount')}}</label>
        </div>
        <div class="col-75">
          <input type="text" id="cashier" name="amount">
        </div>
      </div>

        <div class="row">
        <div class="col-25">
          <label for="cashier">{{__('field.cashier')}}</label>
        </div>
        <div class="col-75">
          <input type="text" id="cashier" name="cashier" >
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="waysofpayment">{{__('field.waysOfPayment')}}</label>
        </div>
        <div class="col-75">
        <select id="type" name="waysOfPayment">
            <option value="in-cash">{{__('field.byCash')}}</option>
            <option value="by-bank">{{__('field.byBank')}}</option>
          </select>
        </div>
      </div>
        <div class="row">
        <div class="col-25">
          <label for="account">{{__('field.acountID')}}</label>
        </div>
        <div class="col-75">
          <input type="text" id="AccountID" name="accountID" >
        </div>
      </div>
      <br>
      <div class="buttonContainer">
        <input class="btn btn-danger" type="reset" value="{{__('field.reset')}}">
        <input class="btn btn-primary" type="submit" value="{{__('field.register')}}">
      </div>
      </form>
    </div>
    </div>
</div>
</body>
@endsection