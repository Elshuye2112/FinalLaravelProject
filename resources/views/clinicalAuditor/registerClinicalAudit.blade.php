@extends('clinicalAuditor.clinicalAuditorHomepage')
@section('content')

    <head>
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/inputForm.css">
    </head>
    <style>
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            {
                width: 100%;
                margin-top: 0;
            }

            input{
                width: 90%;
                margin-top: 12px;
            }
        }
    </style>

    <body>
        <div style="padding: 20px">
            <div class="container">
                <h4>Well Come To The Audit Writting Page</h4><hr>
                <div style="padding: 30px">
                    <form action="/action_page.php">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Name of the clinic</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="enter the gratitude clinic name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="audit result">Audit result</label>
                            </div>
                            <div class="col-75">
                                <textarea id="audit" name="Audit result" placeholder="write the audit result here.." style="height:200px"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="upload">Upload the file</label>
                            </div>
                            <div class="col-75">
                                <input type="file" id="uploadfile" name="fileupload" placeholder="Your name..">
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