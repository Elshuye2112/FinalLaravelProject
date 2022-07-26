<!DOCTYPE html>
<html></html>
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
                 <li><a class="active" href="#">Home</a></li>
                 <li><a href="{{ url('/employee') }}">About</a></li>
                 <li><a href="#">Services</a></li>
                 <li><a href="#">Contact</a></li>
                 <li><a href="#">FeedBack</a></li>
                 <li><a href="#">Help</a></li>
                 <li><a href="{{url('/login')}}">login</a></li>
            </ul>
        </nav>
    <div id="body2" class="body">
        <h2>this is the body display</h2>
        @yield('content')
    </div>
    </body>
</html>