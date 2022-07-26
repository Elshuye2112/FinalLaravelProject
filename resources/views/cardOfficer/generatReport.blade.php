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
<!-- <head>
    <link rel="stylesheet" href="css/layout.css">
</head> -->
<h4>Threated Individuals</h4><hr>
<table>
    <tr>
    <th>MemberID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>G-clinic Name</th>
    <th>Phone number</th>
    <th>DateOf Threatement</th>
    </tr>
    @foreach($treated as $data)
    <tr>
        <td>{{$data->memberId}}</td>
        <td>{{$data->firstName}}</td>
        <td>{{$data->lastName}}</td>
        <td>{{$data->gratitudeclinicID}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->created_at}}</td>
    </tr>
    @endforeach
</table>

