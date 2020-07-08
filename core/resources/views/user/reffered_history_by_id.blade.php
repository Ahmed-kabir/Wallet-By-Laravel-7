@extends('user.user_dashboard')
@section('main')
<div class="col-md-9">

<table class="table table-bordered">
    <h2 class="text-center">Reffered Balance Of {{ Auth::user()->name }}</h2>
    <br>
    <thead>
      <tr>
        <th>Sl</th>
        <th>Refferel User</th>
        <th>Reffered Bonus</th>
        <th>Reffered Time</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($refferedById as $key => $row)
      <tr>
          <td>{{ $refferedById->firstItem() + $key}}</td>
        <td>{{$row->referral_name}}</td>
      <!--   <td>
          @if(empty($row->user))
            <span>No data found!!</span>
            @else
            {{ $row->user->name }}
            @endif
        </td> -->
        <td>{{ $row->reffered_bonus }} {{Session::get('currency')}}</td>
        <td>{{ $row->updated_at->diffForHumans() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

    <div class="pagination">
        {{ $refferedById->links() }}
    </div>

        </div>
        @endsection
