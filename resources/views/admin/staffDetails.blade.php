@extends('admin.adminHomepage')
@section('content')
<h4>Welcome to view staff account page</h4>
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
    <th colspan='3' ><center>Actions</center></th> 
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
    <form method="POST" action="{{ route('staff.delete', $staff->employeeID) }}">
        @csrf
     <input name="_method" type="hidden" value="DELETE">
     <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
    </form>

    </td>
    <td>
    
        <!-- <a href="" class='btn btn-danger '>delete</a> -->
        <a href={{"/edit/".$staff->employeeID}} class='btn btn-success'>edit</a>
        <a href={{"/viewProfile/".$staff->employeeID}} class='btn btn-primary'>view</a>
    </td>

 
    
 
    </tr> 
    

</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>

@endsection