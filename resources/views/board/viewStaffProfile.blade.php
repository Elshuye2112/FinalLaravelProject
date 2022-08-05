@extends('board.boardHomepage')
@section('content')
<h4>Staff members </h4>
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

<tr > 
    <th>Employee ID</th>
    <th>First name</th>
    <th>Last Name</th>
    <th>Role</th>
    <th>Phone</th>
    <th>SchemeID</th>
    <th>Email</th>
    <th>User Name</th>
</tr>
 <tr >
    <td>{{$staff->employeeID}}</td>
    <td>{{$staff->firstName}}</td>
    <td>{{$staff->lastName}}</td>
     <td>{{$staff->role}}</td>
    <td>{{$staff->phone}}</td>
    <td>{{$staff->schemeID}}</td>
    <td>{{$staff->email}}</td>
    <td>{{$staff->userName}}</td>
    <td>
   
</tr>
@endsection