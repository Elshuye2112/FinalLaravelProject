@extends('board.boardHomepage')
@section('content')

<h4>Welcome to the view Members page</h4><hr>
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
    <th>Member id</th>
    <th>First name</th>
    <th>Last Name</th>
    <th>Status</th>
    <th>Phone</th>
    <th>Photo</th> 
    
</tr>

     @foreach($members as $member)
    <tr >
    <td>{{$member->memberID}}</td>
    <td>{{$member->firstName}}</td>
    <td>{{$member->lastName}}</td>
    <td>{{$member->status}}</td>
    <td>{{$member->phone}}</td>
    <td>
        <img style='width:100px;' src="../storage/images/{{$member->photo}}" alt="image doesn't exist">
    </td>
    <td><a href={{"/boardViewProfile/".$member->memberID}} class='btn btn-primary'>familyMember</a>
</td>
</tr>
@endforeach


@endsection