@extends('cardOfficer.cardOfficerHomepage')
@section('content')
<h1>Validated Individuals</h1>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<table id='customers'>
    <tr>
    <th>MemberID</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Status</th>
    <th>Photo</th>
    <th>Family Members</th>
   
    </tr>
    @foreach($result as $data)
    <tr>
        <td>{{$data->memberID}}</td>
        <td>{{$data->firstName}}</td>
        <td>{{$data->middleName}}</td>
        <td>{{$data->lastName}}</td>
        <td>{{$data->status}}</td>
        <td>
        <img style='width:100px; height:70px;' src="../storage/images/{{$data->photo}}" alt="image doesn't exist">
    </td>
    <td><a href={{'/listOfFamily/'.$data->memberID }}>view Family Members</a></td>
        
    </tr>
    @endforeach
</table>

@endsection