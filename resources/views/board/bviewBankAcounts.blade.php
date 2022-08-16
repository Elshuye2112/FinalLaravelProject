@extends('board.boardHomepage')
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
<h4>{{__('field.boardHeader')}}</h4><hr>
<table>
    <tr>
        <th>{{__('field.accountID')}}</th>
        <th>{{__('field.ownerName')}}</th>
        <th>{{__('field.accountNumber')}}</th>
        <th>{{__('field.type')}}</th>
        <th colspan='2'>{{__('field.actions')}}</th>
    </tr>
    @foreach($data as $adata)
    <tr>
        <td>{{$adata->accountID}}</td>
        <td>{{$adata->ownerName}}</td>
        <td>{{$adata->accountNumber}}</td>
        <td>{{$adata->type}}</td>
         <td><a href={{"/editBankAcount/".$adata->accountID}} class='btn btn-primary'>{{__('field.edit')}}</a></td>
       <td> 
      <form method="POST" action="{{ route('acount.delete', $adata->accountID) }}">
        @csrf
     <input name="_method" type="hidden" value="DELETE">
     <button type="submit" class="btn btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>{{__('field.deleteI')}}</button>
    </form>
  </td>


    </tr>
    @endforeach
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