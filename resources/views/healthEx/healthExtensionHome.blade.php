
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Health-extension</title>
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
</head>
<body>
<div style="margin:0%">
        <nav>
            <!-- Navbar logo -->
            <div class="nav-header">
              <div class="nav-logo">
                  <img src="../assets/logo.jpg"  width="50px" alt="logo is no available" />
               </div>
               <div class="final" >
                Community based health Insurance infromation System
               </div>
               <div> <a class="logout" href="{{url('/logout')}}">logout</a></div>
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
        </nav>
    <div>
      <div class='left'>
        <ul id="mySide">
          <div mySide>
            <li class="link" > <a href="{{ url('/register') }}">register</a></li>
            <li class="link" > <a href="{{ url('/search') }}">search member</a></li>
            <li class="link" > <a href="{{ url('/sendnotification') }}" >send notification</a></li>
            <li class="link" > <a href="{{ url('/viewnotification') }}" >View notification</a></li>
            <li class="link" > <a href="{{ url('/listOfMembers') }}" >View members</a></li>
            <li lass='link'><a href="{{ url('/listOfChildren') }}">View children</a></li>
        </div>
        </ul>

      </div>
      <div id='content' class='right'>
       @yield('content')
      </div>
    </div>
   <script>
    // Add active class to the current button (highlight it)
    var sideBar = document.getElementById("mySide");
    var links = sideBar.getElementsByClassName("link");
    for (var i = 0; i < links.length; i++) {
      links[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    </script>
</body>
</html>