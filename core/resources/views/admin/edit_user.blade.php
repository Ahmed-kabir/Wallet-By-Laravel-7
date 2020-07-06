@extends('admin.admin_dashboard')
@section('main')
<div style="padding-left: 380px">
 <form action="{{route('updateUser')}}" method="post">
 @csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" value="{{$edit_user->name}}" placeholder=" Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">User Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username" value="{{$edit_user->username}}" placeholder="User Name">
      <input type="hidden" value="{{$edit_user->id}}" class="form-control" name="id">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="email" value="{{$edit_user->email}}" placeholder="Email">
    </div>
  </div>

  

  

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </div>
</form>
</div>
@endsection