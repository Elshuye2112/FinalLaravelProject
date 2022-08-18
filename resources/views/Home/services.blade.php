
@extends('Home.navBar')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/></head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>  
    <style>
    .carousel-inner img {
    width: 100%;
    height: 550px;;

  } 
</style>
<div style="width: 100%">
    <div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
</ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/background.jpg" alt="image of customer">
    </div>
    <div class="carousel-item">
      <img src="assets/cbhi1.PNG" alt="image of customer">
    </div>
    <div class="carousel-item">
      <img src="assets/cbhi.PNG" alt="image of customer">
    </div>
  </div>
   <!-- Left and right controls -->
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
   </div>
         <div class="dashBoard">
                 <div class="dashBoardCard" style="margin-top: 0px">
                     <div>
                         <center> <i class='fas fa-users' style='font-size:100px;color:rgb(136, 20, 139)'></i></center>
                     </div>
                     <div>
                     <p class="card-text">{{__('field.service-c1p1')}}</p>
                     <p class="card-text">{{__('field.service-c1p2')}}</p>
                     <p class="card-text"> {{__('field.service-c1p3')}}</p>
                     <p class="card-text"> {{__('field.service-c1p4')}}</p>

                     <div>
                         <h1 style="color: blue">3489</h1>
                     </div>
                   </div>
                   <div class="dashBoardCard">
                     <div>
                         <center> <i class='fas fa-bell' style='font-size:100px;color:rgb(208, 255, 0)'></i></center>
                     </div>
                     <div>
                        <p class="card-text">{{__('field.service-c2p1')}}</p>
                        <p class="card-text">{{__('field.service-c2p2')}} </div>
                        </div>
                     <div>
                         <h1 style="color: blue">3489</h1>
                     </div>
                   </div>
                   <div class="dashBoardCard">
                     <div>
                         <center> <i class='fas fa-user-times' style='font-size:100px;color:rgba(238, 71, 71, 0.651)'></i></center>
                     </div>
                     <div>
                       <p class="card-text">{{__('field.service-c3p1')}}</p>
                        <p class="card-text">{{__('field.service-c3p2')}}</p></div>
                        </div>
                     <div>
                         <h1 style="color: blue">3489</h1>
                     </div>
                </div>
        </div>   
@endsection