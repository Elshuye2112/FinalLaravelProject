@extends('healthEx/healthExtensionHome')
@section('content')
<link rel="stylesheet" href="css/inputForm.css">
<body>
    <div style="padding: 20px">
    <div class="container">
        <center>  <h3 style="color:rgb(19, 112, 252)">Family  registration form</h3> </center><hr>
        <form action="{{url('/childrenRegister')}}" method='post' enctype="multipart/form-data">
          @csrf
          <div class="smallSize" style="margin-left: 40px">
            <label for="fname">Member ID</label><br>
            <input type="text" id="memberID" name="memberID" placeholder="enter member id.." ><br>
            <span style='color:red'>@error('memberID'){{$message}}@enderror</span><br>

            <label for="fname">First Name</label><br>
            <input type="text" id="fname" name="fName" placeholder="Your name.." ><br>
            <span style='color:red'>@error('fName'){{$message}}@enderror</span><br>

            <label for="mName">Middle Name</label><br>
            <input type="text" id="mName" name="mName" placeholder="Your middle name.." ><br>
            <span style='color:red'>@error('mName'){{$message}}@enderror</span><br>

            <label for="lname">Last Name</label><br>     
            <input type="text" id="lname" name="lName" placeholder="Your last name.."><br>
            <span style='color:red'>@error('lName'){{$message}}@enderror</span><br>

            <label for="age">Date of birth</label><br>
            <input type="date" id="age" name="dateOfBirth" placeholder="your date of birth.." ><br>
            <span style='color:red'>@error('dateOfBirth'){{$message}}@enderror</span><br>

            <label for="disability">status</label><br>
            <select id="disablity" name="disablity" >
             <option value="normal">normal</option>
             <option value="disable">disable</option>
            </select><br>
            <span style='color:red'>@error('status'){{$message}}@enderror</span><br>

            <label style="padding: 6px">Gender :</label><br>
            <input type="radio" value="Male" name="gender" checked > <label>Male</label>
            <input type="radio" value="Female" name="gender"><label>Female</label><br>
            <label for="photo">upload photo</label><br>
            <input type="file" id="photo" name="photo"><br>
            <span style='color:red'>@error('photo'){{$message}}@enderror</span><br>

          </div>
          <div class="buttonContainer">
            <button type="reset" value="Submit" class="btn btn-danger">Reset</button><br>
            <button type="submit" value="Submit" class="btn btn-primary">Submit</button><br>
          </div>
        </form>
      </div>
    </div>
</body>
@endsection