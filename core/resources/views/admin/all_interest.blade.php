  @extends('admin.admin_dashboard')
@section('main')
                          <div class="card mb-4">
                            <div class="card-header" style="text-align: center;">
                                <i class="fas fa-table mr-1"></i>
                                Interest History
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Receiver Name</th>
                                                <th>Previous Ammount</th>
                                                <th>Interest Percentage</th>
                                                <th>Interest Balance</th>
                                                <th>Current Ammount </th>
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
                                      @foreach ($all_interest as $row)
                                    <tr>

                                       <!-- <td> -->
                                        <!-- <a href="{{route('transactionById',$row->interestReceiverName->id)}}">{{ $row->interestReceiverName->name }}</a> -->
                                      <!-- </td> -->


                                      <td>{{ $row->interestReceiverName->name }} </td>
                                      <td>{{ $row->pre_balance }} {{Session::get('currency')}}</td>
                                      <td>{{ $row->interest_percentige }} %</td>
                                      <td>{{ $row->current_balance - $row->pre_balance }} {{Session::get('currency')}}</td>
                                      <td>{{ $row->current_balance }} {{Session::get('currency')}}</td>


                                  <!-- <td>
                                        @if(empty($row->receiverName))
                                          <span>No data found!!</span>
                                          @else
                                          {{ $row->receiverName->name }}

                                          @endif
                                      </td> -->


                                      <td>{{ $row->created_at->diffForHumans() }} </td>


                                    </tr>
                                    @endforeach

                                  </tbody>

                                        </table>
                                        </div>
                                        </div>
                                        </div>
                                     @endsection



