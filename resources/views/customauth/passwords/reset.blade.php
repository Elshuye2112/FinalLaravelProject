@extends('layouts.dashboard')
@section('content')

<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
                 <div class="card-header">Reset Password</div>

                      <div class="card-body">
                          <form method="POST" action="/reset">
                           @csrf
                           @if(Session::has('success'))
                    <div class='alert alert-success' >{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class='alert alert-danger' >{{Session::get('fail')}}</div>
                    @endif
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                          <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style='color:red;'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                <input type="checkbox" onclick="viewPassword()">Show Password


                                @error('password')
                                    <span class="invalid-feedback" role="alert" style='color:red;'>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                      <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" id="myInput">
                                <input type="checkbox" onclick="viewConfirmPassword()">Show Password

                            </div><br>
  
                        </div>

                     <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                        <div>


<script>
function viewPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function viewConfirmPassword() {
  var x = document.getElementById("password-confirm");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection