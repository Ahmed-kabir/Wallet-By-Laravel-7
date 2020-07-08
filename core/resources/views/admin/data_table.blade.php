  @extends('admin.admin_dashboard')
@section('main')
  <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                All Transaction
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endsection




                        @extends('admin.admin_dashboard')
@section('main')

<div class="container">
  <h2>All Transaction </h2> 
  <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sender Name</th>
        <th>Transfer Ammount</th>
        <th>Transfer Charge</th>
        <th>Receiver Name</th>
        <th>Transaction Time</th>
       
       
      </tr>
    </thead>
    <tbody>
        @foreach ($allTransaction as $row)  
      <tr>
        <td><a href="{{route('transactionById',$row->id)}}">{{ $row->senderName->name }}</a></td>
        <!-- <td>{{ $row->senderName->name }}</td> -->
        <td>{{ $row->transfer_ammount }} </td>
        <td>{{ $row->transfer_charge }} </td>

    
        <td>
          @if(empty($row->receiverName))
            <span>No data found!!</span>
            @else
            {{ $row->receiverName->name }}
            
            @endif
        </td>

        <td>{{ $row->created_at->diffForHumans() }} </td>
    
      
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection