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
      <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
         <nav>
            <img src="assets/logo.jpg"  width="50px" alt="logo is no available" />
            <label class="logo" style="width:50px; margin-bottom:10px;">{{__('navbar.welcome')}}</label>
            <ul>
                 <li><a href="{{ url('/') }}" class="{{'/'==request()->path()? 'active':''}}" >{{__('navbar.homepage')}}</a></li>
                 <li><a href="{{ url('/about') }}" class="{{'about'==request()->path()? 'active':''}}">{{__('navbar.about')}}</a></li>
                 <li><a href="{{url('/services')}}" class="{{'services'==request()->path()? 'active':''}}">{{__('navbar.profile')}}</a></li>
                 <li><a href="{{url('/contact')}}" class="{{'contact'==request()->path()? 'active':''}}">{{__("localization.contact")}}</a></li>
                 <!-- <li><a href="{{url('/help')}}" class="{{'help'==request()->path()? 'active':''}}">{{__('navbar.help')}}</a></li> -->
                 <li><select class="changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="amh" {{ session()->get('locale') == 'amh' ? 'selected' : '' }}>Amharic</option>
                </select></li>
                 <li><a href="{{url('/login')}}" class="{{'login'==request()->path()? 'active':''}}">{{__('navbar.login')}}</a></li>

            </ul>
        </nav>
    <div id="body2" class="body">
      
        @yield('content')
    </div>
    </body>
    <script type="text/javascript">
  
    var url = "{{ route('changeLang') }}";
  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
  
</script>
</html>