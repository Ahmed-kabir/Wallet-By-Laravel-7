@extends('admin.admin_dashboard')
@section('main')

 <form action="{{route('updatePermission')}}" method="post">
 @csrf
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Currency Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="currency_name" value="{{$edit_permission->currency_name}}" placeholder="Currency Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Transfer Charge:</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="transfer_charge" value="{{$edit_permission->transfer_charge}}" placeholder="Transfer Charge">
      <input type="hidden" value="{{$edit_permission->id}}" class="form-control" name="permission_id">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Reffered Bonus:</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="reffered_bouns_ammount" value="{{$edit_permission->reffered_bouns_ammount}}" placeholder="Reffered Bonus">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">SignUp Bonus:</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="signup_bonus" value="{{$edit_permission->signup_bonus}}" placeholder="SignUp Bonus">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Interest Ammount %:</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="interest_ammount" value="{{$edit_permission->interest_ammount}}" placeholder="Interest Ammount %" min="0" max="50">
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </div>
</form>

@endsection