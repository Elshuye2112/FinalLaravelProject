<!DOCTYPE html>
<html></html>
<!-- <style>
   body{
    background-image:url('assets/background.jpg');

   }
    
</style> -->
    <head> 
      <link rel="stylesheet" href="css\navBar.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
         <nav>
           <!-- <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
              <i class="fas fa-bars"></i>
            </label>
            </button>-->
              <img src="assets/logo.jpg"  width="50px" alt="logo is no available" />
            <label class="logo" style="width:50px; margin-bottom:10px;">CBHIIS</label>
            <ul>
                 <li><a href="{{ url('/') }}" class="{{'/'==request()->path()? 'active':''}}" >Home</a></li>
                 <li><a href="{{ url('/about') }}" class="{{'about'==request()->path()? 'active':''}}">About</a></li>
                 <li><a href="{{url('/services')}}" class="{{'services'==request()->path()? 'active':''}}">Services</a></li>
                 <li><a href="{{url('/contact')}}" class="{{'contact'==request()->path()? 'active':''}}">Contact</a></li>
                 <li><a href="{{url('/help')}}" class="{{'help'==request()->path()? 'active':''}}">Help</a></li>
                 <li><a href="{{url('/login')}}" class="{{'login'==request()->path()? 'active':''}}">login</a></li>
            </ul>
        </nav>
    <div id="body2" class="body">
      
        @yield('content')
    </div>
    </body>
</html>