@extends('board/boardHomepage')

@section('content')
<head>
    <link rel="stylesheet" href="css/inputForm.css">
</head>
<body>
    <div style="padding: 20px">
        <div class="container">
            <center><h2>{{__('field.registerAcountHeader')}}</center><hr>
            <div style="padding: 30px">
              <form  method='post' action="{{url('/insert')}}">
                @csrf
                            <label for="account-id">{{__('field.acountID')}}</label><br>
                                      <input type="text" id="Name" name="accountID" ><br>
                   
                              <label for="lname">{{__('field.acountName')}}</label><br>
                           
                              <input type="text" id="account_name" name="ownerName"  ><br>
                           
                              <label for="Account-number">{{__('field.acountNo')}}</label>
                          
                              <input type="text" id="Account-number" name="accountNumber" ><br>
                          
                              <label for="acountType">{{__('field.acountType')}}</label><br>
                            
                              <input type="text" id="account_type" name="accountType" ><br>
                            
                          <div class="buttonContainer" id="button">
                            <input class="btn btn-danger" type="reset" value="{{__('field.reset')}}">
                            <input class="btn btn-primary" type="submit" value="{{__('field.register')}}">
                        </div>
              </form>
              </div>
            </div>
    </div>
</body>
@endsection