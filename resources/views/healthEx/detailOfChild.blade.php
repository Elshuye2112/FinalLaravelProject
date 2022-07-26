@extends('healthEx.healthExtensionHome')
@section('content')
<h1>Welcome You can see the details of the child here</h1>

<table>
    <tr>
        <td>ID</td>
        <td>Fname</td>
        <td>Photo</td>
        <td>Desability</td>
    </tr>
   
    <tr>

    <td>{{$child->memberID}}</td>
    <td>{{$child->firstName}}</td>
    <td>
        <img style='width:100px;' src="../storage/images/{{$child->photo}}"alt="no image">
    </td>
    <td>{{$child->disablity}}</td>
    </tr>
    </table>


@endsection