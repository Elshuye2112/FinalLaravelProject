@extends('financeOfficer.financeOfficerHomepage')
@section('content')
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
<h4>{{__('field.cashinHeader')}}</h4><hr>
<table>
    <tr>
        <th>{{__('field.cashier')}}</th>
        <th>{{__('field.amount')}}</th>
        <th>{{__('field.dateOfPayment')}}</th>
        <th>{{__('field.waysOfPayment')}}</th>
    </tr>
    @foreach($data as $adata)
    <tr>
        <td>{{$adata->accountID}}</td>
        <td>{{$adata->ownerName}}</td>
        <td>{{$adata->accountNumber}}</td>
        <td>{{$adata->type}}</td>
    </tr>
    @endforeach
</table>
<div class="col-md-12" >
 {{ $adata->links('vender.pagination.custom')}}
</div>


@endsection