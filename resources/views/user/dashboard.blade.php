@extends('user.base')
@section('content')
@inject('injected','App\Defaults\Custom')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="bg-white border rounded-4 shadow-sm p-5 text-center">
                <h1 class="fw-semibold mb-3" style="font-size: 1rem;">
                    Welcome, {{ Auth::user()->name ?? 'Guest' }}
                </h1>
            </div>
        </div>
    </div>
</div>


    @foreach($promos as $promo)
        <div class="ui-kit-card mb-24">
            <h3>{{$promo->title}}</h3>
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">{{$promo->title}}</h4>
                {!! $promo->content !!}
                <div class="mt-3">
                    <a href="{{route('user.enrollPromo',['id'=>$promo->id])}}" class="btn btn-primary">Enroll</a>
                </div>
            </div>
        </div>
    @endforeach

@foreach($notifications as $notification)
    <div class="ui-kit-card mb-24">
        <h3>{{$notification->title}}</h3>
        <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">{{$notification->title}}</h4>
            {!! $notification->content !!}
        </div>
    </div>
@endforeach


    <div class="today-card-area pt-24" style="margin-top:-3rem;">
        <div class="container-fluid">
            @include('templates.notification')
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6 text-start col-6">
                    <div class="single-today-card d-flex align-items-center">
                        <a href="{{route('new_investment')}}" class="default-btn">Deposit</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 text-end col-6">
                    <div class="single-today-card d-flex align-items-center">
                         <a href="{{route('new_withdrawal')}}" class="btn btn-primary rounded-pill">Withdraw</a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Account Balance</span>
                            <h6>${{number_format($user->profit,2)}}</h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/user.png')}}" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="active-single-item single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p>
                                <img src="{{asset('dashboard/user/images/icon/user-2.png')}}" alt="Images">
                                Ongoing Investments
                            </p>
                            <h6>
                                ${{number_format($ongoingInvestments,2)}}
                            </h6>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="active-single-item single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p>
                                <img src="{{asset('dashboard/user/images/icon/curser.png')}}" alt="Images">
                                Completed Investments
                            </p>

                            <h6>${{number_format($completedInvestments,2)}}</h6>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="active-single-item single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p>
                                <img src="{{asset('dashboard/user/images/icon/items.png')}}" alt="Images">
                                Completed Withdrawals
                            </p>
                            <h6> ${{number_format($withdrawals,2)}}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Today's Earning</span>
                            <h6>${{number_format($injected->userDailyEarning($user->id),2)}}</h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/discount.png')}}" alt="Images">
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Total Referrals</span>
                            <h6>{{ $referrals }}</h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/groop.png')}}" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Referral Balance</span>
                            <h6>${{number_format($user->refBal,2)}}</h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/groop.png')}}" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-today-card d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="today">Total Withdrawal</span>
                            <h6>${{number_format($user->withdrawals,2)}}</h6>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <img src="{{asset('dashboard/user/images/icon/discount.png')}}" alt="Images">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Link
            </h6>
        </div>
        <div class="card-body row">
            <div class="col-md-12 mx-auto">

                <div class="form-row">
                    <div class="form-group col-md-6 mx-auto">
                        <label for="inputEmail4">Referral Link</label>
                        <input type="text" class="form-control" id="inputEmail4"
                               value="{{route('register',['referral'=>$user->username])}}" readonly>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button  class="btn btn-primary copy"
                             data-clipboard-target="#inputEmail4">copy</button>
                </div>
            </div>
        </div>
    </div>

@endsection
