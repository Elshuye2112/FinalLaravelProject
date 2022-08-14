@extends('Home.navBar')
@section('content')
<style>
.welcome{
    margin-left:20px;
        background-image:url('assets/bg.jpg');
        height:70%;
        width:98%;
        margin-top:0%;
       
    }
    .div1{
        margin:30px;
        font-size: 24px;
        padding:20px;
    }
    .div2{
        margin:30px;
        font-size:24px;
    }
    .div3{
        margin:30px;
        font-size:24px;
    }
    a{
        color:blue;
    }
    h1{
        padding:80px;

    }
</style>
<div class='welcome'>
    <h1>{{__('localization.welcome')}}</h1>
</div>
<div class='div1'>
{{__('navbar.home-div1')}}</div>
<div class='div2'>
{{__('navbar.home-div2')}}
</div>
<div class='div3'>
{{__('navbar.home-div3')}}
<br>
{{__('navbar.home-div4')}}
</div>

<div>
    <div>
        <a href="https://www.ehia.gov.et/" ><b>Agency site</b></a>
        <a href="https://www.moh.gov.et/site/Ethiopian_Health_Insurance">wesite</a>
        <a href="https://www.facebook.com/EthiopiaFMoH">facebook</a>
    </div>
</div>

@endsection