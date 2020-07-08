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

        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($permission as $row)
      <tr>
        <td>{{ $row->currency_name }}</td>
        <td>{{ $row->transfer_charge }} {{Session::get('currency')}}</td>
        <td>{{ $row->reffered_bouns_ammount }} {{Session::get('currency')}}</td>
        <td>{{ $row->signup_bonus }} {{Session::get('currency')}}</td>

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
