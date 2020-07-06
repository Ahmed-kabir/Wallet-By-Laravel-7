<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User Login</title>
  </head>
  <body>
					<!-- Default form login -->
<!-- Default form login -->
<div class="container h-100 d-flex justify-content-center">
    <div class="jumbotron my-auto">
    
      <form class="text-center border border-light p-5" action="{{route('checkUser')}}" method="post">
    @csrf
                <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                <h3 class="text-danger text-center">{{Session::get('error_message')}}</h3>
    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="text" id="defaultLoginFormEmail" name="username" class="form-control mb-4" placeholder="User Name">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <!-- <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label> -->
            </div>
        </div>
        <div>
            <!-- Forgot password -->
             Forgot password?  <a href="">Click Here</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="{{route('userRegister')}}">Register</a>
    </p>

    <!-- Social login -->
  

</form>
    </div>
</div>

<!-- Default form login -->

    <!-- Social login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



<div class="row  h-100 row align-items-center">
  
  

</div>