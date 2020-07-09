@extends('admin.admin_dashboard')
@section('main')
<div style="padding-left: 380px">
  <h3 style="padding-left: 120px; padding-top: 40px">Give Interest </h3>
 <form action="{{route('giveInterestToAll')}}" method="post">
 @csrf

      <h3 class="text-success" style="padding-left: 30px; padding-top: 40px">{{Session::get('success_message')}}</h3>
                        <h3 class="text-danger text-center">{{Session::get('error_message')}}</h3>
     @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Interest %:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="percentage" value="" placeholder=" Enter Percentage">
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
