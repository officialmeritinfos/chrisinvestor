@extends('user.base')

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pending Deposits</h6>
        </div>
        <div class="card-body">
            @include('templates.notification')
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Wallet</th>
                        <th>Status</th>
{{--                        <th>Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pendings as $pending)
                        <tr>
                            <td>{{$pending->reference}}</td>
                            <td>{{number_format($pending->amount,2)}}</td>
                            <td>{{$pending->wallet}}</td>
                            <td>
                                @switch($pending->status)
                                    @case(1)
                                    <span class="text-success">Completed</span>
                                    @break
                                    @case(2)
                                    <span class="text-info">Pending Payment</span>
                                    @break
                                    @case(3)
                                    <span class="text-danger">Cancelled</span>
                                    @break
                                    @default
                                    <span class="text-primary">Ongoing</span>
                                    @break
                                @endswitch
                            </td>
{{--                            <td>--}}
{{--                                <a href="{{route('invest_detail',['id'=>$investment->id])}}" class="btn btn-primary">--}}
{{--                                    <i class="fa fa-eye"></i> View Details--}}
{{--                                </a>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$pendings->links()}}
            </div>
        </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Confirmed Deposits</h6>
        </div>
        <div class="card-body">
            @include('templates.notification')
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Roi</th>
                        <th>Current profit</th>
                        <th>Wallet</th>
                        <th>Status</th>
                        {{--                        <th>Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($confirms as $investment)
                        <tr>
                            <td>{{$investment->reference}}</td>
                            <td>{{number_format($investment->amount,2)}}</td>
                            <td>{{$investment->roi}}%</td>
                            <td>{{$investment->currentProfit}}</td>
                            <td>{{$investment->wallet}}</td>
                            <td>
                                @switch($investment->status)
                                    @case(1)
                                        <span class="text-success">Completed</span>
                                        @break
                                    @case(2)
                                        <span class="text-info">Pending Payment</span>
                                        @break
                                    @case(3)
                                        <span class="text-danger">Cancelled</span>
                                        @break
                                    @default
                                        <span class="text-primary">Ongoing</span>
                                        @break
                                @endswitch
                            </td>
                            {{--                            <td>--}}
                            {{--                                <a href="{{route('invest_detail',['id'=>$investment->id])}}" class="btn btn-primary">--}}
                            {{--                                    <i class="fa fa-eye"></i> View Details--}}
                            {{--                                </a>--}}
                            {{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$investments->links()}}
            </div>
        </div>
    </div>

@endsection
