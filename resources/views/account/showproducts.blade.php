@extends('main')
@section('title', '| Order Details')
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
            </div>
        </div>			</div>
    <div style="top: 157.25px;" class="aside-shadow"></div>

    <div class="main-content">
        <h1>Order Details</h1>
        <br>
        <h6>Order #{{ $order->id }} was placed on {{$order->created_at}} and is Currently {{ $order->status }}</h6>
        <table  class="table table-hover">
        <thead> 
            <tr> 
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
            </tr> 
        </thead>
        <tbody>
        @foreach ($cartproducts as $cartproduct)
        
            <tr>
                <td>
                @foreach ($mproducts as $mproduct)
                    @if($cartproduct->product_id == $mproduct->id)
                    {{ $mproduct->name }}
                    @endif
                @endforeach
                </td>
                <td>
                    {{$cartproduct->product_amount}}
                </td>
                <td>
                @foreach ($mproducts as $mproduct)
                    @if($cartproduct->product_id == $mproduct->id)
                    {{ $mproduct->price }}
                    @endif
                @endforeach
                </td>
            </tr>
        
        @endforeach
            <tr><th>
                Cart Subtotal
                </th><td></td><th>
                {{$order->total}}
            </th></tr>
            <tr><th>
                Shipping
                </th><td></td><th>
                @if($couponsel)
                    @if($couponsel->freeship == 'No' && $order->total <= 500)
                        + $25
                    @else
                        $0
                    @endif
                @elseif($order->total <= 500)
                    + $25
                @else
                    $0
                @endif
            </th></tr>
            @if($couponsel)
            <tr><th>
                Coupon
                </th><td></td><th>
                {{ $couponsel->name }}
            </th></tr>
            @endif
            <tr><th>
                Payment Method
                </th><td></td><th>
                {{$order->method}}
            </th></tr>
            <tr><th>
                Grand Total
                </th><td></td><th>
                {{$order->grandtotal}}
            </th></tr>
        </tbody> 
        </table>

        <h3>Customer Details</h3>
        E-mail: {{ $userinfo->email }}

        <h3>Customer Details</h3>
        Address: {{ $userinfo->address }}<br>
        City: {{ $userinfo->city }}<br>
        State: {{ $userinfo->state }}<br>
        Zip: {{ $userinfo->zip }}
    </div>

</div>
@endsection