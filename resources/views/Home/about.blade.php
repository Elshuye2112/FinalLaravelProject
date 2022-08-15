
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
    height: 550px;
  } 
  .card-text{
    font-size:16px;
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

        <!-- <img src="/assets/background.jpg" alt="" class="image"  > -->
    </div>
    <div class="card-columns">
        <div class="card">
          <div class="card-body">
            <p class="card-text">{{__('field.about-c1p1')}}</p>
            <p class="card-text">{{__('field.about-c1p2')}}</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <p class="card-text">{{__('field.about-c2p1')}}</p>
          </div>
        </div>
        <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">{{__('field.about-c3p1')}} </p>
          <p class="card-text"> {{__('field.about-c3p2')}} </p>
            </div>
          </div>  
      </div>
<footer>
   <div class="article">
     <div class="left box">
       <div class="upper">
         <div class="topic">{{__('field.footer-tabout')}}</div>
         <p>{{__('field.footer-babout')}}</p>
       </div>
       <div class="lower">
         <div class="topic">{{__('field.contact-us')}}</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+251948263781</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>yihuniemulualem220@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">{{__('field.ourObjective')}}</div>
       <div><p>{{__('field.objectiveli1')}} </p></div>
       <div><p>{{__('field.objectiveli2')}} </p></div>
       <div><p>{{__('field.objectiveli3')}} </p></div>
       <div><p>{{__('field.objectiveli4')}} </p></div>
       <div><p> </p></div>
       <div><a></a></div>
     </div>
     <div class="right box">
     <div class="topic">{{__('field.coment')}} </div>
       <form action="#">
       <textarea id="textarea" name="text area" rows="4" cols="30">
       </textarea>
         <input type="submit" name="" value="Send">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2022 <a href="#">Community based health insurance information system</a> All rights reserved</p>
   </div>
 </footer>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
/* *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  text-decoration: none;
} */
footer{
  margin-top:30px;
  width: 100%;
  bottom: 0;
  left: 0;
  position:relative;
  background:blue;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  text-decoration: none;
}
footer .article{
  max-width: 1350px;
  margin: auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
footer .article p,a{
  color: #fff;
}
footer .article .box{
  width: 33%;
  transition: all 0.4s ease;
}
footer .article .topic{
  font-size: 22px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 16px;

Yihune m, [15/08/2022 10:40 ከሰዓት]
}
footer .article p{
  text-align: justify;
}
footer .article .lower .topic{
  margin: 24px 0 5px 0;
}
footer .article .lower i{
  padding-right: 16px;
}
footer .article .middle{
  padding-left: 80px;
}
footer .article .middle a{
  line-height: 32px;
}
footer .article .right input[type="textarea"]{
  height: 90px;
  width: 100%;
  outline: none;
  color: #d9d9d9;
  background: #000;
  border-radius: 5px;
  padding-left: 10px;
  font-size: 17px;
  border: 2px solid #222222;
}
footer .article .right input[type="submit"]{
  height: 42px;
  width: 100%;
  font-size: 18px;
  color: #d9d9d9;
  background: #eb2f06;
  outline: none;
  border-radius: 5px;
  letter-spacing: 1px;
  cursor: pointer;
  margin-top: 12px;
  border: 2px solid #eb2f06;
  transition: all 0.3s ease-in-out;
}
.article .right input[type="submit"]:hover{
  background: none;
  color:  #eb2f06;
}
footer .article .media-icons a{
  font-size: 16px;
  height: 45px;
  width: 45px;
  display: inline-block;
  text-align: center;
  line-height: 43px;
  border-radius: 5px;
  border: 2px solid #222222;
  margin: 30px 5px 0 0;
  transition: all 0.3s ease;
}
.article .media-icons a:hover{
  border-color: #eb2f06;
}
footer .bottom{
  width: 100%;
  text-align: right;
  color: #d9d9d9;
  padding: 0 40px 5px 0;
}
footer .bottom a{
  color: #eb2f06;
}
footer a{
  transition: all 0.3s ease;
}
footer a:hover{
  color: #eb2f06;
}
@media (max-width:1100px) {
  footer .article .middle{
    padding-left: 50px;
  }
}
@media (max-width:950px){
  footer .article .box{
    width: 50%;
  }
  .article .right{
    margin-top: 40px;
  }
}
@media (max-width:560px){
  footer{
    position: relative;
  }
  footer .article .box{
    width: 100%;
    margin-top: 30px;
  }
  footer .article .middle{
    padding-left: 0;
  }
}</style>
<!--- -->
<!--  -->
<div>
    <div>
        <a href="https://www.ehia.gov.et/" ><b>Agency site</b></a>
        <a href="https://www.moh.gov.et/site/Ethiopian_Health_Insurance">wesite</a>
        <a href="https://www.facebook.com/EthiopiaFMoH">facebook</a>
    </div>
</div>
</div>
@endsection