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
            <span class="cart-header-text">Secure Checkout</span>
        </h1>
    </div>
    <div class="aside">
        <div id="checkout-progress-wrapper">
            <div class="checkoutProgressWrapper">
                <h3 class="title">Your Order</h3>
                <div class="block-progress opc-block-progress">
                    <div class="block-content checkoutProgress">
                        <dl>
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
    </div>
    <div class="aside-shadow" style="top: 226.467px;"></div>
    <div class="main-content">
                                
<ol class="onePageCheckout" id="checkoutSteps">
    
    <li id="opc-billing" class="section allow active">
        <div class="step-title ashake clearfix">
            <h3 class="title">Shipping Address 
                <span class="checkmark noshake">
                <svg width="20" height="20">
                    <use xlink:href="#icon-check-mark"></use>
                    <image width="20" height="20" src="/store/skin/frontend/mnsv4/default/images/fallback/check-mark.png"></image>
                </svg>
                </span>
            </h3>
        </div>
        <div id="checkout-step-billing" class="step a-item" style="">
            {!! Form::open(array('route' => 'order.store','data-parsley-validate'=>'')) !!}
                <fieldset class="group-select">
                <ul>
                    <li id="billing-new-address-form">
                        <fieldset>
                        <legend>Country -United State(us)</legend>
                        <ul>
                            <li class="clearfix">
                                <div class="input-box">
                                    <label for="fname">First Name<span class="required">*</span></label><br>
                                    @if($userInfo)
                                    {{Form::text('fname',$userInfo->fname,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('fname',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @endif
                                </div>
                                <div class="input-box">
                                    <label for="lname">Last Name<span class="required">*</span></label><br>
                                    @if($userInfo)
                                    {{Form::text('lname',$userInfo->lname,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('lname',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @endif
                                </div>
                                <div class="input-box">
                                    <label for="company">Company Name</label><br>
                                    @if($userInfo)
                                    {{Form::text('company',$userInfo->company,array('class' => 'input-text','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('company',null,array('class' => 'input-text','maxlength'=>'255'))}}
                                    @endif
                                    
                                </div>
                                <div class="input-box">
                                    <label for="address">Address<span class="required">*</span></label><br>
                                    @if($userInfo)
                                    {{Form::text('address',$userInfo->address,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('address',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @endif
                                    
                                </div>
                                <div class="input-box">
                                    <label for="city">Town/City<span class="required">*</span></label><br>
                                    @if($userInfo)
                                    {{Form::text('city',$userInfo->city,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('city',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @endif
                                    
                                </div>
                                <div class="input-box">
                                    <label for="state">State<span class="required">*</span></label><br>
                                    @if($userInfo)
                                    {{Form::text('state',$userInfo->state,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('state',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @endif
                                    
                                </div>
                                <div class="input-box">
                                    <label for="zip">Zip<span class="required">*</span></label><br>
                                    @if($userInfo)
                                    {{Form::text('zip',$userInfo->zip,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('zip',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @endif
                                    
                                </div>
                                <div class="input-box">
                                    <label for="email">Email Address<span class="required">*</span></label><br>
                                    @if($userInfo)
                                    {{Form::text('email',$userInfo->email,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('email',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                    @endif
                                    
                                </div>
                                <div class="input-box">
                                    <label for="board">Board Id<span class="required">*</span></label><br>
                                    @if($userInfo)
                                    {{Form::text('board',$userInfo->board,array('class' => 'input-text','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('board',null,array('class' => 'input-text','maxlength'=>'255'))}}
                                    @endif
                                    
                                </div>
                                <div class="input-box">
                                    <label for="info">Additional Information</label><br>
                                    @if($userInfo)
                                    {{Form::text('info',$userInfo->info,array('class' => 'input-text','maxlength'=>'255'))}}
                                    @else
                                    {{Form::text('info',null,array('class' => 'input-text','maxlength'=>'255'))}}
                                    @endif
                                    
                                </div>
                                <br>
                                <h3 class="title">Payment Method</h3>
                                <input name="method" value="wu" class="radio" type="radio"><label>Western Union(WU)</label>

                                <input name="method" value="mg" class="radio" type="radio"><label>Money Gram(MG)</label>

                                <input name="method" value="bc" class="radio" type="radio"><label>Bit Coin</label>

                                {{Form::submit('Order Now',array('class' => 'btn btn-success btn-sm', 'style'=>'margin-top:20px'))}} 
                            </li>
                        </ul>
                        </fieldset>
                    </li> 
                </ul>
    
                </fieldset>
            {!! Form::close() !!}
        <br>
        </div>
    </li>
</ol>


            </div>
        </div>

@endsection