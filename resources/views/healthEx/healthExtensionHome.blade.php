
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Health-extension</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('css/layout.css')}}">
   
  <!-- conformation -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
  #logout{
    display: none;
    width:40px;
    height: 25%;
    display:hidden;
  }
</style>
<script>
 
</script>
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
               {{__('field.Communitybased')}}               </div>
               <div> <a class="logout" href="{{url('/logout')}}"><i class="fas fa-users"></i></a>
              </div>
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
            <li class="link" > <a href="{{ url('/register') }}" class="{{'register'==request()->path()? 'active':''}}">{{__('field.registermember')}} </a></li>
            <li class="link" > <a href="{{ url('/search') }}" class="{{'search'==request()->path()? 'active':''}}">{{__('field.searchmember')}} </a></li>
            <li class="link" > <a href="{{ url('/sendnotification') }}" class="{{'sendnotification'==request()->path()? 'active':''}}">{{__('field.sendnotification')}} </a></li>
            <!-- <li class="link" > <a href="{{ url('/viewnotification') }}" >View notification</a></li> -->
            <li class="link" > <a href="{{ url('/listOfMembers') }}" class="{{'listOfMembers'==request()->path()? 'active':''}}">{{__('field.viewmembers')}} </a></li>
            <li><a href="{{url('/viewRequestFromMember')}}" class="{{'viewRequestFromMember'==request()->path()? 'active':''}}">{{__('field.viewrequest')}} </a></li>
            <!-- <li lass='link'><a href="{{ url('/listOfChildren') }}" class="{{'listOfChildren'==request()->path()? 'active':''}}">View children</a></li> -->
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
