@extends('financeOfficer.financeOfficerHomepage')
@section('content')
<head>
    <link rel="stylesheet" href="css/layout.css">
</head>
<h4>{{__('field.cashoutHeader')}}</h4><hr>
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
<table>
    <tr>
        <th>{{__('field.cashier')}}</th>
        <th>{{__('field.amount')}}</th>
        <th>{{__('field.dateOfPayment')}}</th>
        <th>{{__('field.waysOfPayment')}}</th>
    </tr>
    @foreach($cashout as $data)
    <tr>
        <td>{{$data->cashier}}</td>
        <td>{{$data->amount}}</td>
        <td>{{$data->dateOfPayment}}</td>
        <td>{{$data->waysOfPayment}}</td>
    </tr>
    @endforeach
</table>


@endsection