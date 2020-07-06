@extends('user.user_dashboard')
@section('main')
<div class="col-md-9">
            
<table class="table table-bordered">
    <h2 class="text-center">Transaction History Of {{ Auth::user()->name }}</h2>
    <br>
    <thead>
      <tr>
        <th>Transfer Ammount</th>
        <th>Transfer To</th>
        <th>Transfer Charge</th>
        <th>Transfer Date Time</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($transactionById as $row)  
      <tr>
        <td>{{ $row->transfer_ammount}}</td>

        <td>
          @if($row->transferedUser)
            {{ $row->transferedUser->name}}
          @else
            <span class="text-danger">{{ __("No data found!!!") }}</span>
          @endif
        </td>


          <!-- <td>
          @if(empty($row->name))
            <span>No data found!!</span>
            @else
            {{ $row->user->name }}
            @endif
        </td>
 -->

        <td>{{ $row->transfer_charge }}</td>
        <td>{{ $row->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>



        </div>
        @endsection