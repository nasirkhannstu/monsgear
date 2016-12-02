@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
    {!! Html::style('css/cart/app.css') !!} 
@endsection
@section('content')

<div id="main-wrap">
            
    <div class="clearfix cartHeader">
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
                            <div id="shipping_method-progress-opcheckout">
                                <h4>
                                    Cart Total-
                                    <span class="floatRight">${{ $totalPrice }}</span>
                                </h4>
                            </div>
                
                            <div id="payment-progress-opcheckout">
                                <h4>
                                    Coupone-
                                    <span class="floatRight">$0</span>
                                </h4>
                            </div>
                            <div id="payment-progress-opcheckout">
                                <h4>
                                    Shipping Cost-
                                    <span class="floatRight">$0</span>
                                </h4>
                            </div>
                            <div id="payment-progress-opcheckout">
                                <h4>
                                    Order Total-
                                    <span class="floatRight">$0</span>
                                </h4>
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
            <div class="editLink ">
                <svg width="13" height="13">
                <use xlink:href="#icon-edit-blue"></use>
                <image width="13" height="13" src="/store/skin/frontend/mnsv4/default/images/fallback/edit-blue.png"></image>
                </svg> Edit
            </div>
        </div>
        <div id="checkout-step-billing" class="step a-item" style="">
            
            <form id="co-billing-form" action="" autocomplete="on">
                <fieldset class="group-select">
                <ul>
                    <li id="billing-new-address-form">
                        <fieldset>
                        <legend>Country -United State(us)</legend>
                        <ul>
                            <li class="clearfix">
                                <div class="input-box">
                                    <label for="fname">First Name<span class="required">*</span></label><br>
                                    {{Form::text('fname',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="lname">Last Name<span class="required">*</span></label><br>
                                    {{Form::text('lname',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="company">Company Name</label><br>
                                    {{Form::text('company',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="address">Address<span class="required">*</span></label><br>
                                    {{Form::text('address',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="city">Town/City<span class="required">*</span></label><br>
                                    {{Form::text('city',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="state">State<span class="required">*</span></label><br>
                                    {{Form::text('state',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="zip">Zip<span class="required">*</span></label><br>
                                    {{Form::text('zip',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="email">Email Address<span class="required">*</span></label><br>
                                    {{Form::text('email',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="board">Board Id<span class="required">*</span></label><br>
                                    {{Form::text('board',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                                <div class="input-box">
                                    <label for="info">Additional Information<span class="required">*</span></label><br>
                                    {{Form::text('info',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                                </div>
                            </li>
                        </ul>
                        </fieldset>
                    </li>
                </ul>
    
                </fieldset>
            {!! Form::close() !!}
        <br>
        <h3 class="title">Payment Method</h3>
        <div class="input-box">
            
        </div>
        </div>
    </li>
</ol>


            </div>
        </div>

@endsection