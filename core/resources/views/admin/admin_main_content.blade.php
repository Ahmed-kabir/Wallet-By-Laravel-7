@extends('admin.admin_dashboard')
@section('main')
<main>
                    <div class="container-fluid">
{{--                        <h1 class="mt-4">Dashboard</h1>--}}
{{--                        <ol class="breadcrumb mb-4">--}}
{{--                            <li class="breadcrumb-item active">Dashboard</li>--}}
{{--                        </ol>--}}
                        </br>
                        </br>

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total No Of Registered User : {{ $total_registered_user }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('allUser')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Total Balance Of System : {{ $total_transaction_by_user }} {{Session::get('currency')}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('usersTotalBalance')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Reffered Bonus : {{$total_reffered_bonus}} {{Session::get('currency')}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('refferedHistory')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"> Total Transfer Charge: {{$total_earn_by_transfer}} {{Session::get('currency')}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('totalTransferCharge')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </main>
    @endsection
