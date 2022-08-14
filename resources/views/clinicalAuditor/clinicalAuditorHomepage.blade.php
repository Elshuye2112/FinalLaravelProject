<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>CHBII</title>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css\layout.css">
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
          Clinical Auditor page
          </div>
           <div> <a class="logout" href="{{url('/logout')}}" ><i class="fa fa-user"></i></a></div>
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
   <li> <a href="{{ url('registerClinicalAudit') }}" class="{{'registerClinicalAudit'==request()->path()? 'active':''}}">Register clinical audit </a></li>
   <li>  <a href="{{ url('viewNotificaton') }}" class="{{'viewNotificaton'==request()->path()? 'active':''}}">View Notification</a></li>
    </ul>
   </div> 

   <div id='content' class='right'>
 {{--<form class="example" action="">
  <input type="text" placeholder="Search.." name="search" class='input-text'>
  <button type="submit"><i class="fa fa-search"></i></button>
 </form>--}}
   @yield('content')
   </div> 
   <div></div>
   </div>
</body>
</html>