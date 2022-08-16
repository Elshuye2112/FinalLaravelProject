@extends('Home.navBar')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/></head>
    <style>
    .image{
        background-image:url("/assets/background.jpg");
        width:100%;
        height: 500px;
        padding-top: 100px;
        margin-top: 0;
    }
    /* 600px */
</style>
<div style="width: 100%">
    <div class="mapouter" id="googleaddress">
        <div class="gmap_canvas">
        <iframe src="https://maps.google.com/maps?q=11.599059,%2037.364373&amp;
            t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" 
            frameborder="0" scrolling="yes" style="width: 100%; height: 600px;"></iframe>
            <a href="https://fnftest.net" style="display:none">fnf test</a><style>
            .mapouter{position:relative;text-align:right;height:100%;width:100%;}
            </style><a href="https://googlemapsiframegenerator.com" style="display:none">
            Google Maps Iframe Generator - Free Html Embed Code</a>
    <style>
        .gmap_canvas{overflow:hidden;background:none!important;height:90%;width:fit; margin-top:30px;;}
</style>
</div>
</div>
      
  <div class="right">
  <!-- <html> -->
<head>
<style>

*, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  /* -moz-osx-font-smoothing: grayscale; */
}
 
body {
  /* background: linear-gradient(to right, #ea1d6f 0%, #eb466b 100%); */
  font-size: 12px;
}
 
body, button, input {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
}
 
.background {
  display: flex;
  min-height: 100vh;
}
 
.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}
 
.screen {
  position: relative;
  background: gray;
  border-radius: 15px;
}
 
.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  /* box-shadow: 0 20px 40px rgba(0, 0, 0, .4); */
  z-index: -1;
}
 
.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #4d4d4f;
  /* border-top-left-radius: 15px;
  border-top-right-radius: 15px; */
}
.screen-header-right {
  display: flex;
}
 
.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: #999;
}
 
.screen-body {
  display: flex;
}
 
.screen-body-item {
  flex: 1;
  padding: 50px;
}
 
.screen-body-item.left {
  display: flex;
  flex-direction: column;
}
 
.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: #ea1d6f;
  font-size: 26px;
}
 
.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: #ea1d6f;
}
 
.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}
 
.app-form-group {
  margin-bottom: 15px;
}
 
.app-form-group.message {
  margin-top: 40px;
}
 
.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}
 
.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}
 
.app-form-control::placeholder {
  color: #666;
}
 
.app-form-control:focus {
  border-bottom-color: #ddd;
}
 
.app-form-button {
  background: none;
  border: none;
  color: #ea1d6f;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}
 
.app-form-button:hover {
  color: #b9134f;
}
 
.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}
 
.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}
 
.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}
 
@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }
 
  .screen-body-item.left {
    margin-bottom: 30px;
  }
 
  .app-title {
    flex-direction: row;
  }
 
  .app-title span {
    margin-right: 12px;
  }
 
  .app-title:after {
    display: none;
  }
}
 
@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }
 
  .screen-body-item {
    padding: 0;
  }
}
</style>
</head>

<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <!-- <span>CONTACT</span>
            <span>US</span> -->
            <span>{{__('field.contact-us')}}</span>
          </div>
          <div class="app-contact">CONTACT INFO : +251948263781</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="name" value="">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="email">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="phone NO">
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="message">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">{{__('field.reset')}}</button>
              <button class="app-form-button">{{__('field.send')}}</button>
            </div>
          </div>
        </div>
      </div>
    </div>
 
  </div>
</div>
<!-- </html> -->
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