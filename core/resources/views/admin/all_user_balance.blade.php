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
                        <th>User Name</th>
                        <th>Current balance</th>
                        <th>Create Account</th>

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
                    @foreach ($all_user_balance as $row)
                        <tr>




                            <td><a href="{{route('transactionById',$row->id)}}">{{ $row->name }}</a></td>
                            <td>{{ $row->ammount }} {{Session::get('currency')}}</td>
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



