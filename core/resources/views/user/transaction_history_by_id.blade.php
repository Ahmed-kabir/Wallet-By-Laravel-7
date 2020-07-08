@extends('user.user_dashboard')
@section('main')
<div class="col-md-9">

<table class="table table-bordered">
    <h2 class="text-center">Transaction History Of {{ Auth::user()->name }}</h2>
    <br>
    <thead>
      <tr>
        <th>SL</th>
        <th>Transfer Ammount</th>
        <th>Transfer To</th>
        <th>Transfer Charge</th>
        <th>Transfer Date Time</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($transactionById as $key => $row)
      <tr>
        <td>{{ $transactionById->firstItem() + $key}}</td>
        <td>{{ $row->transfer_ammount}} {{Session::get('currency')}}</td>

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

        <td>{{ $row->transfer_charge }} {{Session::get('currency')}}</td>
        <td>{{ $row->updated_at->diffForHumans() }}</td>

      </tr>
      @endforeach

    </tbody>

  </table>
    <div class="pagination">
        {{ $transactionById->links() }}
    </div>



        </div>
        @endsection
