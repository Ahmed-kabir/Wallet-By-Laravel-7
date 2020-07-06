@extends('admin.admin_dashboard')
@section('main')

<div class="container">
  <h2>Manage User </h2> 
  <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Registerd Time</th>
       
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($all_user as $row)  
      <tr>
        <td>{{ $row->name }}</td>
        <td>{{ $row->username }} </td>
        <td>{{ $row->email }} </td>
        <td>{{ $row->created_at->diffForHumans() }} </td>
    
        <td>
          <a href="{{route('editUser',$row->id)}}" class="btn btn-success">
                <span class="glyphicon glyphicon-edit">Edit</span></a>


        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection