@extends('financeOfficer.financeOfficerHomepage')
@section('content')
<!-- <head>
    <link rel="stylesheet" href="css/layout.css">
</head> -->
<style>
    a{
        margin-left:5px;
        border-radius:20px;
    }
    table{
        font-family:arial,sans-serif;
        border-collapse:collapse;
        width:100%;
        margin:20px;
        border-radius:30px;
    }
    td,th{
        border:1px solid #ddd;
        text-align:left;
        padding:3px;

    }
    tr:nth-child(even){
        background-color:#ddd;
    }
</style>
<h4>You can view cashin's here</h4><hr>
<table>
    <tr>
        <th>Cashier</th>
        <th>Amount</th>
        <th>Date Of Payment</th>
        <th>Ways Of Payment</th>
    </tr>
    @foreach($cashin as $data)
    <tr>
        <td>{{$data->cashier}}</td>
        <td>{{$data->amount}}</td>
        <td>{{$data->dateOfPayment}}</td>
        <td>{{$data->waysOfPayment}}</td>
    </tr>
    @endforeach
</table>

@endsection