@extends('board.boardHomepage')
@section('content')
<h1>Welcome to view scheme page</h1>
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
    <th>{{__('field.schemeID')}}</th>
    <th>{{__('field.name')}}</th>
    <th>{{__('field.fax')}}</th>
    <th>{{__('field.officeTelephone')}}</th>
    <th>{{__('field.region')}}</th>
    <th>{{__('field.email')}}</th>
    <th>{{__('field.accountID')}}</th>
    <th colspan='3' ><center>{{__('field.actions')}}</center></th> 
</tr>

     @foreach($scheme as $data)
    <tr >
    <td>{{$data->schemeID}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->fax}}</td>
    <td>{{$data->offiiceTelephone}}</td>
    <td>{{$data->region}}</td>
    <td>{{$data->email}}</td>
    <td> {{$data->accountID}}</td>
    <td>
    
        
    <a href={{"/viewStaffProfile/".$data->employeeID}} class='btn btn-primary'>{{__('field.view')}}</a>
    </td>
 
    </tr> 
    @endforeach

</table>
@endsection