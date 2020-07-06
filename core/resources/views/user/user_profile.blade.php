@extends('user.user_dashboard')
@section('main')
<div class="col-md-9">
            
<table class="table table-bordered">
    <h2 class="text-center">Transaction History Of {{ Auth::user()->name }}</h2>
    <br>
    <thead>
      <tr>
        <th>Name</th>
        <th>User Name</th>
        <th>Email</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       
      <tr>
        
        <td><input type="text" class="form-control" name="currency_name" value="{{$user_profile->name}}"></td>
        <td><input type="text" class="form-control" name="currency_name" value="{{$user_profile->username}}"></td>
        <td><input type="text" class="form-control" name="currency_name" value="{{$user_profile->email}}"></td>
        
        <td>
         <a href="{{route('editProfile',$user_profile->id)}}" class="btn btn-success">
                <span class="glyphicon glyphicon-edit">Edit</span></a>
                </td>
      </tr>
   
    </tbody>
  </table>



        </div>
        @endsection