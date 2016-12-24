@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
    {!! Html::style('css/cart/app.css') !!} 
@endsection
@section('content')

<div id="main-wrap">
            
    <div class="clearfix cartHeader">
        @include('partials._messages')
        <h1 class="cart-title">
            <span class="cart-header-text">Your Order Details</span>
        </h1>
    </div>
    <div class="main-content">
                                
        <div id="checkout-progress-wrapper">
            <div class="checkoutProgressWrapper">
                <h3 class="title">Your Order</h3>
                <div class="block-progress opc-block-progress">
                    <div class="block-content checkoutProgress">
                        <dl>
                            <div id="billing-progress-opcheckout">    
                                <h5>Order Number: 
                                <span class="floatRight">{{ $order->id }}</span>
                                </h5>
                            </div>
                            <div id="billing-progress-opcheckout">    
                                <h5>Payment Method: 
                                <span class="floatRight">{{ $order->method }}</span>
                                </h5>
                            </div>
                            <hr>
                            <h3>Products:</h3>
                            @foreach($products as $product)
                            <div id="billing-progress-opcheckout">    
                                <h5>{{ $product['item']['name'] }}
                                ({{ $product['qty'] }})
                                <span class="floatRight">${{ $product['price'] }}</span>
                                </h5>
                            </div>
                            @endforeach
                            <br>
                            <hr>
                            <br>
                            <div>
                                <p>
                                    Cart Total-
                                    <span class="floatRight">${{ $totalPrice }}</span>
                                <p>
                            </div>
                            @if($coupon)
                            <div id="payment-progress-opcheckout">
                                <p>
                                    Coupone({{ $coupon->name }})
                                    <span class="floatRight">
                                        @if($coupon->dtype == 'cart')
                                            -{{ $coupon->amount }}
                                        @endif
                                        @if($coupon->dtype == 'percent')
                                            %{{ $coupon->amount }}
                                        @endif
                                    </span>
                                <p>
                            </div>
                            @endif
                            <div id="payment-progress-opcheckout">
                                <p>
                                    Shipping Cost-
                                    <span class="floatRight">
                                @if($coupon)
                                    @if($coupon->freeship == 'No' && $totalPrice <= 500)
                                        + $25
                                    @else
                                        $0
                                    @endif
                                @elseif($totalPrice <= 500)
                                    +$25
                                @else
                                    $0
                                @endif
                                    </span>
                                <p>
                            </div>
                            <div id="payment-progress-opcheckout">
                                <p>
                                    Order Total-
                                    <span class="floatRight">
                                        @if($couponTotal)
                                            ${{ $couponTotal }}
                                        @else
                                            @if($totalPrice <= 500)
                                                ${{ $totalPrice + 25 }}
                                            @else
                                                ${{ $totalPrice }}
                                            @endif
                                        @endif
                                    </span>
                                <p>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div id="checkout-progress-wrapper">
            <div class="checkoutProgressWrapper">
                <h3 class="title">Billing Address</h3>
                <div class="block-progress opc-block-progress">
                    <div class="block-content checkoutProgress">
                        <dl>
                            <div id="billing-progress-opcheckout">    
                                <h5>Email: {{ $info->email }}</h5>
                            </div>
                            <div id="billing-progress-opcheckout">    
                                <h5>Address: {{ $info->address }}</h5>
                            </div>
                            <div id="billing-progress-opcheckout">
                                <h5>City: {{ $info->city }}</h5>
                            </div>
                            <div id="billing-progress-opcheckout">
                                <h5>State: {{ $info->state }}</h5>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div> 

    </div>
</div>

@endsection