<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>CBHIIS</title>
   <link rel="stylesheet" href="../css/sideBar.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
  <div>
    <div class="wellcome" >
        <center><h1>{{__('field.header')}}</h1></center>
    </div>
     <div style='margin-top:102px;'>
      <div style='float:left;'>
        <input type="checkbox" class='toggle' name='' id='check'>
          <!-- <img src="../assets/logo.jpg"  width="50px" alt="logo is no available" /> -->
            <div class='container1'>
              <label for="ckeck">
                   <span class='fas fa-times' id='times'></span>
                   <span class='fas fa-bars' id='bars'></span>
              </label>
              <div class='head'>{{__('field.menu')}}</div>
              <ol>
                   <li>  <a href="{{url('/registerGc') }}" class="{{'registerGc'==request()->path()? 'active':''}}">{{__('field.registerClinic')}}</a></li>
                   <li>  <a href="{{ url('/viewMember') }}" class="{{'viewMember'==request()->path()? 'active':''}}">{{__('field.viewMembers')}}</a></li>
                   <li>  <a href="{{ url('/viewStaff') }}" class="{{'viewStaff'==request()->path()? 'active':''}}">{{__('field.viewStaffs')}}</a></li>
                   <li>  <a href="{{ url('/sendNotification') }}" class="{{'sendNotification'==request()->path()? 'active':''}}">{{__('field.sendNotification')}}</a></li>
                   <li>  <a href="{{ url('/account') }}" class="{{'account'==request()->path()? 'active':''}}">{{__('field.registerAcount')}}</a></li>
                   <li>  <a href="{{ url('/registerscheme') }}" class="{{'registerscheme'==request()->path()? 'active':''}}">{{__('field.registerScheme')}}</a></li>
                   <li>  <a href="{{ url('/bviewBankAcount') }}" class="{{'bviewBankAcount'==request()->path()? 'active':''}}">View Bank Acounts</a></li>
                   <li>  <a href="{{ url('/bViewScheme') }}" class="{{'bviewBankAcount'==request()->path()? 'active':''}}">view Scheme Info</a></li>
                   <li>  <a href="{{ url('/viewAuditReport') }}" class="{{'bviewBankAcount'==request()->path()? 'active':''}}">view Audit report </a></li>
      
               </ol>
            </div>
     </div>
     <div class='navAndMain'>
              <div class='topNav'><h3>{{__('field.boardHeader')}}</h3>
                  <a class="logout" href="{{url('/logout')}}" >{{__('navbar.logout')}}</a>
              </div>
              <div class='displayBody'>
                   @yield('content')
              </div>
        </div>
     </div>
   </div>
</body>
</html>




       