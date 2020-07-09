  @extends('admin.admin_dashboard')
@section('main')
                          <div class="card mb-4">
                            <div class="card-header" style="text-align: center;">
                                <i class="fas fa-table mr-1"></i>
                                All Transaction
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th>Sender Name</th>
                                                <th>Transfer Ammount</th>
                                                <th>Transfer Charge</th>
                                                <th>Receiver Name</th>
                                                <th>Transaction Time</th>
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
                                        @foreach ($all_transaction as $row)
                                      <tr>
                                        <td>
                                            <a href="{{route('transactionById',$row->senderName->id)}}">{{ $row->senderName->name }}</a>
                                        </td>
                                        <td>{{ $row->transfer_ammount }} {{Session::get('currency')}}</td>
                                        <td>{{ $row->transfer_charge }} {{Session::get('currency')}}</td>

                                            <td>
                                          @if(empty($row->receiverName))
                                            <span>No data found!!</span>
                                            @else
                                            <a href="{{route('transactionById',$row->receiverName->id)}}">{{ $row->receiverName->name }}</a>

                                            @endif
                                        </td>

                                        <td>{{ $row->created_at->diffForHumans() }} </td>


                                      </tr>
                                      @endforeach

                                    </tbody>

                                        </table>
                                        </div>
                                        </div>
                                        </div>
                                     @endsection
