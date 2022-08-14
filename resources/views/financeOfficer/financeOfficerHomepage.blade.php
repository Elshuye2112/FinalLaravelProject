<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>CHBII</title>
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  {{-- <style>
   .navbar, .nav-header, .nav-logo, .final{
      width: 100%;
      height: 30%;
      background-color:aqua;
      margin-top:0%;
   }
   a{
    color:black;
   }
   .nav-header{
   display: flex;
   }
   .left{
      float: left;
      width: 30%;
      background-color:dimgray;
      height:400px ;
      width:20%;

   }
   .right{
      float: right;
      width: 70%;
   }

   </style>--}}
   <style>
    a{
        color: white;
    }
   </style>
</head>
<body>
  <nav>
    <div class="navbar" >
        <!-- Navbar logo -->
        <div class="nav-header">
          <div class="nav-logo">
              <img src="assets/logo.jpg"  width="50px" alt="logo is no available" />
          </div>
          <div class="final" >
          {{__('field.financeofficerpage')}} 
          </div>
           <div> <a class="logout" href="{{url('/logout')}}" >{{__('navbar.logout')}}</a></div>
        </div>
        <!-- responsive navbar toggle button -->
        {{--  <input type="checkbox" id="nav-check">
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>  --}}
        </div>
    </nav>
   <div class='left'>
   <ul>
   <li> <a href="{{url('/registerPayment') }}" class="{{'registerPayment'==request()->path()? 'active':''}}">{{__('field.registerpayment')}} </a></li>
   <li> <a href="{{ url('/viewCashin') }}" class="{{'viewCashin'==request()->path()? 'active':''}}">{{__('field.viewcashin')}} </a></li>
   <li> <a href="{{ url('/viewCashout') }}" class="{{'viewCashout'==request()->path()? 'active':''}}">{{__('field.viewcashout')}} </a></li>
   <li> <a href="{{url('/generateReport') }}" class="{{'generateReport'==request()->path()? 'active':''}}">{{__('field.search')}} </a></li>
   <li> <a href="{{url('/financeViewNotification') }}" class="{{'financeViewNotification'==request()->path()? 'active':''}}" >{{__('field.viewnotification')}} </a></li>
    </ul>
   </div>
   <div id='content' class='right'>
      @yield('content')
   </div>
   </div>
</body>
</html>