@extends('admin/adminHomepage')
@section('content')
    <head>
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/inputForm.css">
        {{-- <style>
* {
  box-sizing: border-box;
}

input[type=text],select,tel {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=tel] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  padding-left:24px;
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

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */ --}}
        <style>
          .buttonContainer{
            margin-bottom: 20px;
          }
            @media screen and (max-width: 600px) {
                .bodyleft,.bodyright
                input[type=text] {
                    width: 100%;
                    margin-top: 0;
                }
            }
        </style>
    </head>

    <body>
      <div style="padding: 20px">
        <div class="container">
            <h4>health Insurance scheme staff registration</h4><hr>
            <form action="{{url('/acountCreate')}}" method='post'>
               
            @csrf
            <div>

                    <div class="bodyleft">

                    <label for="employeeID">Employee ID</label><br>
                        <input type="text" id="employeeID" name="employeeID" placeholder="enter id of the employee.."
                            required><br>
                        <label for="fname">First Name</label><br>
                        <input type="text" id="fname" name="fName" placeholder="enter first name of the employee.."
                            required><br>
                        <label for="lname">Last Name</label><br>
                        <input type="text" id="lname" name="lName" placeholder="enter last name of employe .."
                            required><br>
                        <label for="dateofbirth">Date of birth</label><br>
                        <input type="date" id="DOB" name="dateofbirth"
                            placeholder="enter date of birth of employe.." required><br>
                            <label style="padding: 6px">Gender :</label><br>
                        <input type="radio" value="Male" name="gender" checked> <label>Male</label>
                        <input type="radio" value="Female" name="gender"><label>Female</label>
                        <input type="radio" value="Other" name="gender"><label> Other</label><br>
                        <label for="Email">Email</label><br>
                        <input type="text" id="email" name="email" placeholder="enter email of the employe.."
                            required><br>
                        <label for="Address">Region</label><br>
                        <input type="text" id="adress" name="region" placeholder="enter address of the employe.."
                            required><br>
                            <label for="Address">Zone</label><br>
                        <input type="text" id="adress" name="zone" placeholder="enter address of the employe.."
                            required><br>
                            <label for="Address">Woreda</label><br>
                        <input type="text" id="adress" name="woreda" placeholder="enter address of the employe.."
                            required><br>

                    </div>
                    <div class="bodyright">
                    <label for="Address">Kebele</label><br>
                        <input type="text" id="adress" name="kebele" placeholder="enter address of the employe.."
                            required><br>
                        <label for="Address">phone</label><br>
                        <input type="tel" id="phone" name="phone"
                             placeholder="enter mobile number of the employe.."required> <br>
                        <label for="profession">profession type</label><br>
                        <input type="text" id="profession" name="profession"
                            placeholder="enter the profession of the employe.. "required> <br>
                        <label for="Education level">Education level</label><br>
                        <select id="educationlevel" name="educationlevel">
                            <option value="masters">masters</option>
                            <option value="degree">degree</option>
                            <option value="TVET">TVET</option>
                            <option value="deploma">deploma</option>
                        </select><br>
                        <label for="username">User name</label><br>
                        <input type="text" id="username" name="userName"
                            placeholder="enter the user name of the employe.." required> <br>
                        <label for="password">password</label><br>
                        <input type="password" id="password" name="password"
                            placeholder="enter the password of the employe.." required><br>
                        <label for="role">Role of staff</label><br>
                        <select id="role" name="role">
                            <option value="board">board</option>
                            <option value="financeOfficer">finance officer</option>
                            <option value="cardOfficer">card_officer</option>
                            <option value="healthExtension">health_extension</option>
                            <option value="clinicalAuditor">Clinical Auditor</option>
                        </select><br>
                        <label for="Address">Scheme ID</label><br>
                        <input type="text" id="adress" name="schemeID" placeholder="enter the id of the organization.."
                            required><br>
                    </div>
                </div>
                <div class="buttonContainer">
                  <input class="btn btn-danger" type="reset" value="Reset">
                  <input class="btn btn-primary" type="submit" value="Register">
                </div>
            </form>
        </div>
      </div>
    </body>
@endsection