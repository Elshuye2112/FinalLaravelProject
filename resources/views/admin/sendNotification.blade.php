@extends('admin.adminHomepage')
@section('content')
<head>
    <link rel="stylesheet" href="css/inputForm.css">
</head>
<body>
    <div style="padding: 30px">
        <div class="container">
            <center><h2>Send Notification</center><hr>
              <form  method='post' action="{{url('/notificationFromAdmin')}}">
   
                @csrf
                        <div class="row">
                          <div class="col-25">
                            <label for="greeting">Greeting</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="Name" name="greeting" placeholder="greeting " required>
                          </div>
                        </div>
                       
                
                          
                          <div class="row">
                            <div class="col-25">
                              <label for="body">body/content</label>
                            </div>
                            <div class="col-75">
                              <textarea type="text" id="name" name="body" column='90' ></textarea>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="thanks">thanks</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="thanks" name="thanks" placeholder "thanks" required>
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