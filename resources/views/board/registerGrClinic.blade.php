@extends('board/boardHomepage')

@section('content')
<head>
    <link rel="stylesheet" href="css/inputForm.css">
</head>
<body>
    <div style="padding: 30px">
        <div class="container">
            <center><h2>Register gratitude clinic</center><hr>
              <form action="{{url('/registerGClinic')}}" method ='post'>
                        @csrf
                        <div class="row">
                          <div class="col-25">
                            <label for="G-ClinicID">ID of gratitude clinic</label>
                          </div>
                          <div class="col-75">
                         
                            <input type="text" id="ID" name="G-ClinicID" placeholder="enter the  id of gratitude clinic " required>
                          </div>
                        </div>
                          <div class="row">
                          <div class="col-25">
                            <label for="name">name</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="Name" name="name" placeholder="enter the name of  gratitude clinic " required>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label for="region">region</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="region" name="region" placeholder="enter zone of " required>
                            </div>
                          </div>
                         
                    
            
                          <div class="row">
                            <div class="col-25">
                              <label for="zone">zone</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="zone" name="zone" placeholder="enter zone of " required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="woreda">woreda</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="woreda" name="woreda" placeholder="enter woreda the ganization e.g poly campas" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="services">services</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="services" name="services" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="fax">fax</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="fax" name="fax" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="postalcode">postalcode</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="postalcode" name="postalCode" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="email">email</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="email" name="email" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="officetelephone">officetelephone</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="officetelephone" name="officeTelephone" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="staffID">staffID</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="staffID" name="staffID" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="accountID">accountID</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="accountID" name="accountID" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>
                    
                        <div class="buttonContainer" id="button">
                            <input class="btn btn-danger" type="reset" value="Reset">
                            <input class="btn btn-primary" type="submit" value="Register">
                        </div>
                    
            
              </form>
            </div>
    </div>
</body>
@endsection