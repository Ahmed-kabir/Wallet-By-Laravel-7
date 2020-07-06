<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User Sign Up</title>
  </head>
  <body>
    

    <!-- Default form register -->

<div class="container h-100 d-flex justify-content-center">
    <div class="jumbotron my-auto">
      <!-- Default form register -->
<form class="text-center border border-light p-5" action="{{route('userSave')}}" method="post">
    @csrf
                <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                <h3 class="text-danger text-center">{{Session::get('error_message')}}</h3>
    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="username" class="form-control" placeholder="User Name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

     <div class="form-row mb-4">
        
        <div class="col">
            <!-- Last name -->
            <input type="password" id="defaultRegisterFormLastName" name="password" class="form-control" placeholder="Password">
        </div>
    </div>

    <!-- Password -->
    

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

    <!-- Social register -->
  
<p>Already Registered?
        <a href="{{route('userLogin')}}">Login</a>
    </p>

    <hr>

    <!-- Terms of service -->
    

</form>
<!-- Default form register -->
    </div>
</div>


<!-- Default form register -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>