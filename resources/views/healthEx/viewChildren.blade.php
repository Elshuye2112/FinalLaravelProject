@extends('healthEx/healthExtensionHome')
@section('content')
<style>
    a{
        color: #000;
    }
</style>
<h4>Welcome to the view Members page</h4><hr>
<table>

<tr>
    <th>First name</th>
    <th>Phone</th>
    <th>Photo</th> 
    <th>Actions</th> 
    
</tr>

    @foreach($children as $child)

    <tr>
    <td>{{$child->firstName}}</td>
    <td>{{$child->phone}}</td>
    <td>
        <img style='width:100px; height:70px;' src="../storage/images/{{$child->photo}}" alt="image doesn't exist">
    </td>
    <td>
    <a href={{"/deleteChild/".$child->memberID}}>delete</a>
    <a href="">update</a>
    <a href={{"/detailOfChild/".$child->memberID}}>view detail</a>

    </td>
    </tr>
    @endforeach

</table>
<!-- customise the pagination -->
<div class="col-md-12" >
 {{ $children->links('vender.pagination.custom')}}
</div>
<!-- 
<span>
    {{$children->links()}}

    }
</span>
<style>
    .w-5{
        display:none;
    }
</style> -->
@endsection