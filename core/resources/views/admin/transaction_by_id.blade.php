@extends('admin.admin_dashboard')
@section('main')

<div class="container">
  <h2>Manage Permission</h2> 
  <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Currency Name</th>
        <th>Trasnfer Charge</th>
        <th>Reffered Bonus</th>
        <th>SignUp Bonus</th>
        <th>Interest Ammount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $row)  
      <tr>
        <td>{{ $row->user_id }}</td>
        <td>{{ $row->transfer_charge }} {{ $row->currency_name }}</td>
        <td>{{ $row->reffered_bouns_ammount }} {{ $row->currency_name }}</td>
        <td>{{ $row->signup_bonus }} {{ $row->currency_name }}</td>
        <td>{{ $row->interest_ammount }}%</td>
        <td>
          <a href="{{route('editPermission',$row->id)}}" class="btn btn-success">
                <span class="glyphicon glyphicon-edit">Edit</span></a>


        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection