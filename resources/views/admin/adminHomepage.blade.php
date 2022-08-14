<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Administor</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('css/layout.css')}}">
   
  <!-- conformation -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<style>
a{
    color: white;
}
</style>
 <script>
    function profile() {
      var x = document.getElementById("account");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>
</head>
<body>
    <nav>
        <!-- Navbar logo -->
        <div class="nav-header">
          <div class="nav-logo">
              <img src="../assets/logo.jpg"  width="50px" alt="logo is no available" />
          </div>
          <div class="final" >
          {{__('field.adminpage')}} 
          </div>
          <div> <a class="logout" href="{{url('/logout')}}"><i class="fas fa-user"></i></a></div>
        </div>
    </div>
        <div class='card' id='account' style="display:none">
        <h3>the account name</h3>
        <h3>your email</h3>
        <button onClick=" window.location {{route('logout')}}">{{__('navbar.logout')}}</button>
        </div>
    </nav>
    <div>
        <div class='left'>
            <ul>
                <li> <a href="{{ url('/create') }}" class="{{'create'==request()->path()? 'active':''}}">{{__('field.createstaff')}}  </a></li>
                <li><a href="{{url('/toSearch') }}" class="{{'toSearch'==request()->path()? 'active':''}}">{{__('field.search')}} </a></li>
                <li><a href="{{url('/view') }}" class="{{'view'==request()->path()? 'active':''}}">{{__('field.viewstaffaccount')}} </a></li>
                <li><a href="{{url('/adminSendNotification') }}" class="{{'adminSendNotification'==request()->path()? 'active':''}}">{{__('field.sendnotification')}} </a></li>
             </ul>
           </div>
           <div id='content' class='right'>
             @yield('content')
           </div>
    </div>
</body>
</html>