<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Reset Password</title>
  </head>
  <body>
					<!-- Default form login -->
<!-- Default form login -->
<div class="container h-100 d-flex justify-content-center">
    <div class="jumbotron my-auto">
    
      <form class="text-center border border-light p-5" action="{{route('updateForgotPassword')}}" method="post">
    @csrf
                <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                <h3 class="text-danger text-center">{{Session::get('error_message')}}</h3>
    <p class="h4 mb-4">Reset Password</p>

    <!-- Email -->
    <input type="Password" id="defaultLoginFormEmail" name="password" class="form-control mb-4" placeholder="Enter Password">
    <input type="hidden" id="defaultLoginFormEmail" name="user_id" class="form-control mb-4" value="{{$user_id}}">
    <input type="Password" id="defaultLoginFormEmail" name="retype_password" class="form-control mb-4" placeholder="Retype Password">

    <!-- Password -->
    

    

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Update Password</button>

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