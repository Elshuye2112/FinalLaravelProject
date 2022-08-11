@extends('healthEx.healthExtensionHome')
@section('content')
<link rel="stylesheet" href="css/inputForm.css">
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
                        <input type="text" name="memberID" placeholder="memberID" size="15"  /> <br>
                        <span style='color:red'>@error('memberID'){{$message}}@enderror</span><br>
                        <label> Firstname </label><br>
                        <input type="text" name="fName" placeholder="Firstname" size="15" /> <br>
                        <span style='color:red'>@error('fName'){{$message}}@enderror</span><br>
                        <label> Middlename: </label><br>
                        <input type="text" name="mName" placeholder="Middlename" size="15" /> <br>
                        <span style='color:red'>@error('mName'){{$message}}@enderror</span><br>
                        <label> Lastname: </label><br>
                        <input type="text" name="lName" placeholder="Lastname" size="15" /> <br>
                        <span style='color:red'>@error('lName'){{$message}}@enderror</span><br>
                        <label style="padding: 6px">Gender :</label><br>
                        <input type="radio" value="Male" name="gender" checked> <label>Male</label>
                        <input type="radio" value="Female" name="gender"><label>Female</label>
                        <label for="dateofbirth">Date of birth</label><br>
                        <input type="date" id="DOB" name="dateOfBirth"
                        placeholder="enter date of birth of employe.."><br>
                        <span style='color:red'>@error('dateOfBirth'){{$message}}@enderror</span><br>
                        <label> Phone :</label><br>
                        <input type="text" name="phone" placeholder="phone no." size="10"><br>
                        <span style='color:red'>@error('phone'){{$message}}@enderror</span><br>
                
                        <label> Status :</label><br>
                        <select name="status" id="">
                            <option value="renewed">renewed</option>
                            <option value="not_renewed">not renewed</option>
                        </select>
                        <span style='color:red'>@error('status'){{$message}}@enderror</span><br>
                        <label for="email"><b>Email</b></label><br>
                        <input type="email" placeholder="Enter Email" name="email" ><br>
                        <span style='color:red'>@error('email'){{$message}}@enderror</span><br>
                   
                    </div>
                    <div class="bodyright">
                       <label for="occupation"><b>Occupation</b></label><br>
                        <input type="text" placeholder="Enter occupation" name="occopation"><br>
                        <label>Region </label><br>
                        <input type="text" placeholder="Enter region address" name="region" ><br>
                        <span style='color:red'>@error('region'){{$message}}@enderror</span><br>

                        <label>Zone </label><br>
                        <input type="text" placeholder="enter zone address" name="zone" ><br>
                        <span style='color:red'>@error('zone'){{$message}}@enderror</span><br>

                        <label>Woreda </label><br>
                        <input type="text" placeholder="enter wereda address" name="woreda" ><br>
                        <span style='color:red'>@error('woreda'){{$message}}@enderror</span><br>

                        <label>Kebele</label><br>
                        <input type="text" placeholder="enter kebele" name="kebele" ><br>
                        <span style='color:red'>@error('kebele'){{$message}}@enderror</span><br>

                        <label for="psw"><b>UserName</b></label><br>
                        <input type="text" placeholder="user name" name="userName" ><br>
                        <span style='color:red'>@error('userName'){{$message}}@enderror</span><br>
                        <label for="psw"><b>Password</b></label><br>
                        <input type="password" placeholder="Enter Password" name="password"><br>
                        <span style='color:red'>@error('password'){{$message}}@enderror</span><br>
                        <label for="photo">upload photo</label><br>
                        <input type="file" id="photo" name="photo"><br>
                        <span style='color:red'>@error('photo'){{$message}}@enderror</span><br>
                    </div>
                    <div class="buttonContainer">
                        <button type="submit" class="btn btn-primary"> Register</button>
                        <button type='reset' class='btn btn-danger'>Reset</button>
                        <a href="{{ url('familyMember') }}" class='btn btn-primary'>Add member +</a>
                    </div>
                </div>
            </div>
    </form>
@endsection