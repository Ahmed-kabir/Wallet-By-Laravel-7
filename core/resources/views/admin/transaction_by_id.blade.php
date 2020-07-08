  @extends('admin.admin_dashboard')
@section('main')
                          <div class="card mb-4">
                            <div class="card-header" style="text-align: center;">
                                <i class="fas fa-table mr-1"></i>
                                Transaction By User
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                              <th>User Name</th>
                                              <th>Trasnfer To</th>
                                              <th>Transfer Ammount</th>
                                              <th>Transfer Charge</th>
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
                                        @foreach ($transactions as $row)
                                      <tr>
                                        <td>{{ $row->user->username }}</td>
                                      <td>{{ $row->transferedUser->username }}</td>
                                      <td>{{ $row->transfer_ammount }} {{Session::get('currency')}}</td>
                                      <td>{{ $row->transfer_charge }} {{Session::get('currency')}}</td>
                                      <td>{{ $row->updated_at->diffForHumans() }}</td>



                                      </tr>
                                      @endforeach

                                    </tbody>

                                        </table>
                                        </div>
                                        </div>
                                        </div>
                                     @endsection




