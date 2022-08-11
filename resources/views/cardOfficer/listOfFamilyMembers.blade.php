@extends('cardOfficer.cardOfficerHomepage')
@section('content')

<table>

<tr> 
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
      <th>Photo</th>

</tr>
  @foreach($result as $data)
  
    <tr >
    <td>{{$data->firstName}}</td>
    <td>{{$data->middleName}}</td>
    <td>{{$data->lastName}}</td>
    <td>
    <img style='height:50px;' src="../storage/images/{{$data->photo}}" alt="image doesn't exist">

    </td>
    </tr> 

    @endforeach

</table>
<span>
    {{$result->links()}}

    
</span>
<style>
    .w-5{
        display:none;
    }
</style>
@endsection