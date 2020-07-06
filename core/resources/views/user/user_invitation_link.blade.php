@extends('user.user_dashboard')
@section('main')
<div class="col-md-9">
<form class="text-center border border-light p-5" action="{{route('transferMoney')}}" method="post">
  @csrf
                <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                <h3 class="text-danger text-center">{{Session::get('error_message')}}</h3>
    <p class="h4 mb-4">Reffered Link</p>

<div class="form-row mb-4">
        <div class="col ">
            <!-- First name -->
            
            <input type="text" id="defaultRegisterFormFirstName" name="user_id" class="form-control" value="{{$link}}" readonly="">
        </div>
        
    </div>


    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <!-- <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label> -->
            </div>
        </div>
       
    </div>

    <!-- Sign in button -->
   
  

</form>
<!-- Default form login -->
        </div>
        @endsection