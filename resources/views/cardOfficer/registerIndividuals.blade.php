@extends('cardOfficer.cardOfficerHomepage')
@section('content')
<head>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/inputForm.css">
    {{--<style>
* {
  box-sizing: border-box;
}

input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=tel]{
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label{
  padding: 12px 12px 12px 0;
  display: inline-block;
  padding-left:24px;
}
h2{
padding-left:190px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
#submit{
padding-left:200px;
}
input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width:50%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */--}}
<style>
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
    <div style="padding: 20px">
    <div class="container">
        <h4>{{__('field.treatedIndividual')}} </h4><hr>
        <div style="padding: 30px">
            <form action="{{url('/registertreated')}}" method="post">
            @if(Session::has('success'))
                    <div class='alert alert-success'>{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class='alert alert-danger'>{{Session::get('fail')}}</div>
                    @endif 
              @csrf
            <div class="row">
                  <div class="col-25">
                    <label for="memberID">{{__('field.memberID')}}</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="memberID" name="memberID" >
                    <span style='color:red'>@error('memberID'){{$message}}@enderror</span><br>

                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="fname">{{__('field.fName')}}</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="fName"  >
                    <span style='color:red'>@error('fName'){{$message}}@enderror</span><br>

                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="lname">{{__('field.lName')}}</label>
                  </div>
                  
                  <div class="col-75">
                    <input type="text" id="lname" name="lName"  >
                    <span style='color:red'>@error('lName'){{$message}}@enderror</span><br>

                  </div>
                 
                </div>
                <div class="row">
                    <div class="col-25">
                      <label for="familyID">{{__('field.phone')}}</label>
                    </div>
                    <div class="col-75">
                      <input type="tel" id="phone" name="phone"  >
                      <span style='color:red'>@error('phone'){{$message}}@enderror</span><br>

                    </div>
                  </div>
                
                    <div class="row">
                  <div class="col-25">
                    <label for="Clinic">{{__('field.clinicID')}}</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="clinic" name="clinicID"  >
                    <span style='color:red'>@error('clinicID'){{$message}}@enderror</span><br>

                  </div>
                </div>
                <br>
                <div class="buttonContainer">
                        <input class="btn btn-danger" type="reset" value="{{__('field.reset')}}">
                        <input class="btn btn-primary" type="submit" value="{{__('field.register')}}">
                 </div>
                </div>

            </form>
        </div>
      </div>
      <div>
</body>
@endsection