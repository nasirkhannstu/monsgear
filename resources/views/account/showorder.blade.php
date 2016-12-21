@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
    {!! Html::style('css/account.css') !!}
@endsection
@section('content')
<div id="main-wrap">
    <div class="breadcrumb">
        @include('partials._messages')
    </div>

    <!--[if (gte IE 9)|(gt IEMobile 7)]><!-->
    <!--<![endif]-->

    <div class="aside">
        <div class="account-nav">
            <span class="title">Account Navigation<span class="inline-caret">›</span></span>
            <div class="nav-wrap">
                <a class="dashboard" href="{{url('myaccount')}}">
                    <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                        <use xlink:href="#icon-account"></use>
                        <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/account.png"></image>
                    </svg>
                    Your Home</a>

                <a class="orders" href="{{url('account/showorder')}}">
                    <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                        <use xlink:href="#icon-history"></use>
                        <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/history.png"></image>
                    </svg>
                    Order History</a>

                <a class="referral" href="">
                    <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                        <use xlink:href="#icon-referral-program"></use>
                        <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/referral-program.png"></image>
                    </svg>
                    Manage Account</a>
            </div>
        </div>			</div>
    <div style="top: 157.25px;" class="aside-shadow"></div>

    <div class="main-content">
        <h1>Add/Edit Address</h1>
        @if($orders)
        <table class="table table-hover">
        <thead> 
            <tr> 
                <th>Order Id</th>
                <th>Order Status</th>
                <th>Method</th>
                <th>Total</th>
                <th>Created At</th>
                <th></th>
            </tr> 
        </thead> 
        <tbody>
        @foreach ($orders as $order)
            <tr>
                <td scope="row">{{ $order->id }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->method }}</td>
                <td>{{ $order->grandtotal }}</td>
                <td>{{ date('M j, Y', strtotime($order->created_at)) }}</td>
                <td>
                    <a href="{{route('account.showproducts', $order->id) }}" class="btn btn-white btn-sm">View</a>
                </td>
            </tr>
        @endforeach
        </tbody> 
        </table>
        @else
        You have no order
        <a class="btn btn-white btn-sm" href="{{url('/')}}">Continue Shopping</a>
        @endif
    </div>

</div>
@endsection