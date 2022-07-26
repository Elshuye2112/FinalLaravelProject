@extends('healthEx/healthExtensionHome')
@section('content')
<head>
    <link rel="stylesheet" href="css/inputForm.css">
    <style>

    </style>
</head>
<body>
    <div style="padding: 20px">
        <div class="container">
            <h4>Welcome to send notification</h4><hr>
            <div style="padding: 30px">
                <form action="">
                    <label for="id">Id of the reciever</label><br>
                    <input type="text" id="id" name="id" placeholder="Reciever id.."><br>
                    <label for="title">title</label><br>
                    <input type="text" id="title" name="title" placeholder="type the title here"><br>
                    <label for="description">description</label><br>
                    <textarea id="subject" name="description" placeholder="Write something.." style="height:200px"></textarea><br>
                <div class="buttonContainer">
                    <input type="reset" value="Reset" class="btn btn-danger">
                    <input type="submit" value="send" class="btn btn-primary">

                </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection