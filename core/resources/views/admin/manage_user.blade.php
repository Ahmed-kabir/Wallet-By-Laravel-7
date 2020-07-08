  @extends('admin.admin_dashboard')
@section('main')
  <div class="card mb-4">
                            <div class="card-header" style="text-align: center;">
                                <i class="fas fa-table mr-1"></i>
                                All User
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Registerd Time</th>
                                                <th>Action</th>
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
                                            @foreach ($all_user as $row)
                                          <tr>

                                              <td><a href="{{route('transactionById',$row->id)}}">{{ $row->name }}</a></td>
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
                            </div>
                        </div>
                        @endsection




