@extends('healthEx/healthExtensionHome')
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
    <th colspan='4' ><center>Actions</center></th> 
</tr>

   
    <tr >
    <td>{{$member->memberID}}</td>
    <td>{{$member->firstName}}</td>
    <td>{{$member->lastName}}</td>
    <td>{{$member->status}}</td>
    <td>{{$member->phone}}</td>
    <td>
        <img style='width:100px;' src="../storage/images/{{$member->photo}}" alt="image doesn't exist">
    </td>
    <td>
    <form method="POST" action="{{ route('member.delete', $member->memberID) }}">
        @csrf
     <input name="_method" type="hidden" value="DELETE">
     <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
    </form>

    </td>
    
    <td>
    <a href={{"/edit/".$member->memberID}} class='btn btn-success'>edit</a>
    <a href={{"/renew/".$member->memberID}} class='btn btn-success'>renew</a>


    <a href={{"/viewProfile/".$member->memberID}} class='btn btn-primary'>family Membere</a>
   <a href={{"/giveMembershipID/".$member->memberID}} class='btn btn-success'>Give Membership id</a>
   
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