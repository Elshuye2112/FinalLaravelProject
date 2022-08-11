@extends('healthEx.healthExtensionHome')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">

<link rel="stylesheet" type='text/css' href="{{asset('css/inputForm.css')}}">
    <form method='post' action="{{url('/registerMember')}}" enctype="multipart/form-data">
    @if(Session::has('succes'))
                    <div class='alert alert-success'>{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class='alert alert-danger'>{{Session::get('fail')}}</div>
                    @endif    
    @csrf
        <div style="padding: 30px">
            <div class="container">
                <center>
                    <h3 style="color:rgb(19, 112, 252)">Membership registration form</h3>
                </center>
                <hr>
                <div>
                    <div class="bodyleft">
                    <label> Member ID </label><br>
                        <input type="text" name="memberID" value='{{$data->memberID}}' /> <br>
                        <label> Firstname </label><br>
                        <input type="text" name="fName" value='{{$data->firstName}}' /> <br>
                        <label> Middlename: </label><br>
                        <input type="text" name="mName" value='{{$data->middleName}}' /> <br>
                        <label> Lastname: </label><br>
                        <input type="text" name="lName" value='{{$data->lastName}}' /> <br>
                        <label style="padding: 6px">Gender :</label><br>
                        <input type="radio" value="Male" name="gender" value='{{$data->gender}}' checked> <label>Male</label>
                        <input type="radio" value="Female" name="gender" value='{{$data->gender}}'><label>Female</label>
                        <label for="dateofbirth">Date of birth</label><br>
                        <input type="date" id="DOB" name="dateOfBirth"
                        value='{{$data->dateOfBirth}}'><br>
                        <label> Phone :</label><br>
                        <input type="text" name="phone" value='{{$data->phone}}'><br>
                        <label> Status :</label><br>
                        <input type="text" name="status" value='{{$data->status}}'><br>
                        <label for="email"><b>Email</b></label><br>
                        <input type="email" value='{{$data->email}}' name="email" required><br>
                        <label for="occopotion"><b>Occupation</b></label><br>
                        <input type="text" value='{{$data->occopation}}' name="occopation" required><br>
                    </div>
                    <div class="bodyright">
                    
                        <label>Region </label><br>
                        <input type="text" value='{{$data->region}}' name="region" required><br>

                        <label>Zone </label><br>
                        <input type="text" value='{{$data->zone}}' name="zone" required><br>
                        <label>Woreda </label><br>
                        <input type="text" value='{{$data->woreda}}' name="woreda" required><br>
                        <label>Kebele</label><br>
                        <input type="text" value='{{$data->kebele}}' name="kebele" required><br>
                        <label for="psw"><b>UserName</b></label><br>
                        <input type="text" value='{{$data->userName}}' name="uName" required><br>
                        <label for="psw"><b>Password</b></label><br>
                        <input type="password" value='{{$data->password}}' name="password" required><br>
                        <label for="photo">upload photo</label><br>
                        <input type="file" id="photo" name="photo" value='{{$data->photo}}'><br>
                    </div>
                    <div class="buttonContainer">
                        <button type="submit" class="btn btn-primary"> Update</button>
                        <button type='reset' class='btn btn-danger'>Reset</button>
                    </div>
                </div>
            </div>
    </form>
@endsection