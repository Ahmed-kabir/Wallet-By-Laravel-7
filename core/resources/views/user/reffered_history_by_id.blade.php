@extends('user.user_dashboard')
@section('main')
<div class="col-md-9">
            
<table class="table table-bordered">
    <h2 class="text-center">Transaction History Of {{ Auth::user()->name }}</h2>
    <br>
    <thead>
      <tr>
        <th>Reffered User</th>
        <th>Reffered Bonus</th>
        <th>Reffered Date Time</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($refferedById as $row)  
      <tr>
        
        <td>
          @if(empty($row->user))
            <span>No data found!!</span>
            @else
            {{ $row->user->name }}
            @endif
        </td>
        <td>{{ $row->reffered_bonus }}</td>
        <td>{{ $row->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>



        </div>
        @endsection