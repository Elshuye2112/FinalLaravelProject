@extends('board/boardHomepage')

@section('content')
<head>
    <link rel="stylesheet" href="css/inputForm.css">
</head>
<body>
    <div style="padding: 30px">
        <div class="container">
            <center><h2>Register community based health insurance scheme</center><hr>
              <form  method='post' action="{{url('/insertScheme')}}">
                @csrf
                        <div class="row">
                          <div class="col-25">
                            <label for="schemeID">schemeID</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="Name" name="schemeID" placeholder="enter the id of the account " required>
                          </div>
                        </div>
                       
                
                          
                          <div class="row">
                            <div class="col-25">
                              <label for="lname">scheme name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="name" name="schemeName" placeholder="enter  name of the ganization e.g poly campas" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="region">region of scheme</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="region" name="region" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="zone">zone </label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="zone" name="zone" placeholder="enter the account type e.g commercial bank" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="woreda">woreda </label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="woreda" name="woreda" placeholder="enter the account type e.g commercial bank" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="officetel">officetelephone </label>
                            </div>
                            <div class="col-75">
                              <input type="tel" id="officetele" name="officetelephone" placeholder="enter the account type e.g commercial bank" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="fax">fax </label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="fax" name="fax" placeholder="enter the account type e.g commercial bank" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="email">emaiil </label>
                            </div>
                            <div class="col-75">
                              <input type="email" id="email" name="email" placeholder="enter the account type e.g commercial bank" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="bankAccountID">bankAccountID </label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="bankaccountID" name="accountID" placeholder="enter the account type e.g commercial bank" required>
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