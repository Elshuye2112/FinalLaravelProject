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
        <center><h1>Community based health insurance</h1></center>
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
              <div class='head'>Menu</div>
              <ol>
                   <li class="link" > <a href="{{ url('/register') }}" class="{{'register'==request()->path()? 'active':''}}">{{__('field.registermember')}} </a></li>
                   <li class="link" > <a href="{{ url('/search') }}" class="{{'search'==request()->path()? 'active':''}}">{{__('field.searchmember')}} </a></li>
                   <li class="link" > <a href="{{ url('/sendnotification') }}" class="{{'sendnotification'==request()->path()? 'active':''}}">{{__('field.sendnotification')}} </a></li>
                   <!-- <li class="link" > <a href="{{ url('/viewnotification') }}" >View notification</a></li> -->
                   <li class="link" > <a href="{{ url('/listOfMembers') }}" class="{{'listOfMembers'==request()->path()? 'active':''}}">{{__('field.viewmembers')}} </a></li>
                   <li><a href="{{url('/viewRequestFromMember')}}" class="{{'viewRequestFromMember'==request()->path()? 'active':''}}">{{__('field.viewrequest')}} </a></li>
                   <li lass='link'><a href="{{ url('/hviewBankAcount') }}" class="{{'hviewBankAcount'==request()->path()? 'active':''}}">View Bank Acounts</a></li>
      
               </ol>
            </div>
     </div>
     <div class='navAndMain'>
              <div class='topNav'><h3>This is the main body</h3>
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