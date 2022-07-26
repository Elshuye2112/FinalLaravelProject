<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Administor</title>
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
           Admin page
          </div>
          <div> <a class="logout" href="{{url('/logout')}}">logout</a></div>
        </div>
    </div>
        <div class='card' id='account' style="display:none">
        <h3>the account name</h3>
        <h3>your email</h3>
        <button onClick=" window.location {{route('logout')}}">logout</button>
        </div>
    </nav>
    <div>
        <div class='left'>
            <ul>
                <li> <a href="{{ url('/create') }}" class='active'>Create staff acount </a></li>
                <li><a href="{{url('/toSearch') }}" >Search</a></li>
                <li><a href="{{url('/view') }}" >view staff acount</a></li>
                <li><a href="{{url('/adminSendNotification') }}" >Send notification</a></li>
             </ul>
           </div>
           <div id='content' class='right'>
             @yield('content')
           </div>
    </div>
</body>
</html>