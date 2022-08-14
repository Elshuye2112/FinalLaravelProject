@extends('Home.navBar')
@section('content')
<style>
   
    .div1{
        margin:30px;
        font-size:24px;
    }
    a{
        color:black; 
    }
    .welcome{
        margin-left:20px;
        background-image:url('assets/bg.jpg');
        height:80%;
        width:98%;
        margin-top:0%;
       
    }
    h1{
        text-align:center;
        padding:80px;
    }
    
</style>
<div class='welcome'>
<h1>{{__('localization.welcome')}}</h1>
</div>

<div>
<div class='div1'>
    {{__('navbar.about-div1')}}
</div>
<div class='div1'>

{{__('navbar.about-div2')}}
</div>

<div class='div1'>
{{__('navbar.about-div3')}}
</div>
</div>
<a href="https://www.ehia.gov.et/sites/default/files//Magazine/SHI%20Directive%20FINAL%20draft_June%2030%2C%202021%20Adama.pdf"><h1>{{__('navbar.about-download')}}</h1></a>


@endsection