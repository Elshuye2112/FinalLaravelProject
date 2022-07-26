@extends('memberpage/index')
@section('content')

    <head>
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/inputForm.css">
    </head>

    <body>
        <div style="padding: 20px">
            <div class="container">
                <h4>Request for update form</h4>
                <hr>
                <div style="padding: 30px">
                    <form action="{{url('/storeRequest')}}" method  ='post'>
                        @csrf
                        <div class="row">
                            <div class="col-25">
                                <label for="memberID">MemberID</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="memberID" name="memberID"
                                    placeholder="memberiD of the requester..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject">subject</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="subject" name="subject"
                                    placeholder="enter the subject for the  request">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="description">Discription</label>
                            </div>
                            <div class="col-75">
                                <textarea id="subject" name="description" placeholder="Write something.." style="height:200px"></textarea>
                            </div>
                        </div>
                        <div class="buttonContainer">
                            <input class="btn btn-danger" type="reset" value="Reset"> 
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection