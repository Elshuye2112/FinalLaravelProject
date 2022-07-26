@extends('board/boardHomepage')

@section('content')
<head>
    <link rel="stylesheet" href="css/inputForm.css">
</head>
<body>
    <div style="padding: 30px">
        <div class="container">
            <center><h2>Register account of scheme and  gratitude clinic</center><hr>
              <form  method='post' action="{{url('/insert')}}">
                @csrf
                        <div class="row">
                          <div class="col-25">
                            <label for="account-id">ID of account</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="Name" name="accountID" placeholder="enter the id of the account " required>
                          </div>
                        </div>
                       
                
                          
                          <div class="row">
                            <div class="col-25">
                              <label for="lname">Account Name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="account_name" name="ownerName" placeholder="enter account name of the ganization e.g poly campas" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="Account-number">Account number</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="Account-number" name="accountNumber" placeholder="enter the account number of the of the rganization" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="acountType">Account type</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="account_type" name="accountType" placeholder="enter the account type e.g commercial bank" required>
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