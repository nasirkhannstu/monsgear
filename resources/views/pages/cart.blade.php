@extends('main')
@section('title', '| Cart')
@section('stylsheets')
	{!! Html::style('css/cart/app.css') !!}	
@endsection
@section('content')
<div id="main-wrap" class="wide-format">
	<div class="main-content wide-format">
		@include('partials._messages')
		<div class="cartHeader clearfix">
			<h1 class=" cart-title">
				<span class="cart-header-text">Your Shopping Cart</span>
			</h1>
			<div class="checkout-types">
			 	<a href="{{ route('product.checkout') }}"><button class="btn btn-green proceedCheckout aloading"><span class="init">Proceed to Checkout</span></button></a>
			</div>
			<a href="/"><button type="button" class="btn btn-white btn-sm btn-auto btn-shop">Continue Shopping</button></a> 
	 	</div>

<div class="cart">
    <div class="clearBoth"></div>
        <div class="cart-wrap">
        	@if(Session::has('cart'))
            <div class="cart-labels">
            	<div class="image">image</div>
            	<div class="product">product</div>
            	<div class="unit-price">unit price</div>
            	<div class="qty">qty</div>
            	<div class="subtotal">subtotal</div>
            </div>
            @foreach($products as $product)
            <div class="cart-item row">             
				<div class="remove-wrap">
					<a class="btn btn-remove btn-sm" title="Remove item from cart" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">
						<svg width="18" height="18">
							<use xlink:href="#icon-remove"></use>
						</svg>
					</a>
				</div>

				<div class="item-image">
					<div class="padding">
						<a href="">
							<img src="{{ asset('uploads/product/'.$product['item']['image']) }}">
						</a>
					</div>
				</div>
    
				<div class="item-info">
				    <span class="product-name">
				        <a href="{{ url('shop/'.$product['item']['slug'])}}">{{ $product['item']['name'] }}</a>
					</span>
				    <span class="price">$4.99</span>			
				    <div class="options_messages">
					
					</div>
				</div>

				<div class="retail-price-wrap">
					<div class="padding">
						<div class="item-price">
							<span class="price">{{ $product['item']['price'] }}</span>
						</div>
					</div>
				</div>

				<div class="qty-wrap">
					<div class="padding">
						<div class="before"></div>
						<div class="field">
							{{ $product['qty'] }}
						</div>
						<div class="after"></div>
						<div class="row">
							<div class="col-md-3">
								<a href="{{ route('product.addToCartC', ['id' => $product['item']['id']]) }}" class="btn btn-success btn-sm" style="padding:5px;font-size:15px">+</a>
							</div>
							<div class="col-md-3">
								<a href="{{ route('product.reduceByOneC', ['id' => $product['item']['id']]) }}" class="btn btn-success btn-sm" style="padding:5px;font-size:15px">-</a>
							</div>
						</div>
					</div>

						
				</div>


				<div class="price-wrap">
					<div class="padding">
							<div class="item-subtotal">
								<span class="price">${{ $product['price'] }}</span>
							</div>
					</div>
				</div>          
			</div>
			@endforeach 
			@else

			@endif
		{!! Form::close() !!}
        </div>
    
    <!-- <div class="cart-upsell">
		<h3 class="hstyle-three blue bordered">Limited Time Price Cuts</h3>
		<div class="productBox clearfix">
		<a href="/store/allmax-glutamine.html"><img style="" class="floatLeft" src="https://cdn.muscleandstrength.com/store/media/wysiwyg//Cart/allmax-glutamine-cart.jpg"></a>
		<div class="prodData">
			<div style="font-weight: bold"><a href="/store/allmax-glutamine.html">Allmax Glutamine</a></div>
			<div class="smallestFont">Limited time price cut!</div>
			<div class="smallestFont"><del class="darkGray">$9.99</del> <span class="price">$3.99</span></div>
			<a class="btn tiny" href="/store/allmax-glutamine.html">Add to Cart</a>
		</div>
		</div>

		<div class="productBox clearfix">
		<a href="/store/mp-combat-crunch-bars.html"><img style="padding-left: 5px;" class="floatLeft" src="https://cdn.muscleandstrength.com/store/media/wysiwyg//Cart/combat-crunch-cart.jpg"></a>
		<div class="prodData">
			<div style="font-weight: bold"><a href="/store/mp-combat-crunch-bars.html">MP Combat Bars</a></div>
			<div class="smallestFont">Try a Combat bar!</div>
			<div class="smallestFont"><del class="darkGray">$3.49</del> <span class="price">$2.49</span></div>
			<a class="btn tiny" href="/store/mp-combat-crunch-bars.html">Add to Cart</a>
		</div>
		</div>

		<div class="productBox clearfix">
		<a href="/store/samples"><img class="floatLeft" src="https://cdn.muscleandstrength.com/store/media/wysiwyg//Cart/assault.png"></a>
		<div class="prodData">
			<div style="font-weight: bold"><a href="/store/samples">Free Samples</a></div>
			<div class="smallestFont">Pick your Free Samples!</div>
			<div class="smallestFont"><del class="darkGray">$3.99</del> <span class="price">$0.00</span></div>
			<a class="btn tiny" href="/store/samples">Add to Cart</a>
		</div>
		</div>

		<div class="productBox clearfix last">
		<a href="/store/allmax-creatine.html"><img class="floatLeft" src="https://cdn.muscleandstrength.com/store/media/wysiwyg//Cart/allmax-creatine-100.jpg"></a>
		<div class="prodData">
			<div style="font-weight: bold"><a href="/store/allmax-creatine.html">Allmax Creatine</a></div>
			<div class="smallestFont">Limited time price cut!</div>
			<div class="smallestFont"><del class="darkGray">$9.99</del> <span class="price">$3.99</span></div>
			<a class="btn tiny" href="/store/allmax-creatine.html">Add to Cart</a>
		</div>
		</div>	
	</div> -->
	
	<div class="cartToolsContainer">
		<div class="cartTools first">
			<div class="logic-show-hide">
					<button class="accordion-button openactive" hclass="closed" sclass="openactive" key="tool-box-coupon"><div class="text-wrap"><div class="cart-tool-title">Enter Coupon</div></div></button>
			</div>
			<div class="body tool-box-coupon clearBoth clearfix">
			{!! Form::open(array('route' => 'product.coupon','data-parsley-validate'=>'')) !!}
	            <div class="discount-form">
		            <label class="">Enter coupon code here:</label><br>
	                <div class="input-box">
	                	{{Form::text('coupon',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255', 'placeholder' => 'Enter code...'))}}
	                </div>
		            <div style="padding-top:0;padding-left: 0;">
		            	{{Form::submit('Enter Coupon',array('class' => 'btn btn-white btn-sm','style'=>'margin-top:20px'))}}
		            </div>
	            </div>
            {!! Form::close() !!}
			</div>
		</div>
		
		<div class="cartTools">
			
			<div class="logic-show-hide">
				
				<button class="accordion-button openactive"><div class="text-wrap"><div class="cart-tool-title">Calculate Shipping</div></div></button>
			</div>
			<div id="tool-box-shipping" class="body tool-box-shipping clearBoth clearfix key-open">
				<ul class="form-list">	        	
	                <li>
	                    <label class="margBot5" for="region_id">Shipping Cost- $25<span class="required"></span></label>
	                </li>
		        </ul>					
		    <!-- <form class="ieflat noborder" action="https://www.muscleandstrength.com/store/checkout/cart/estimatePost/" method="post" id="shipping-zip-form">
		            <ul class="form-list">
		                <li></li>
		            			        	
		                <li>
		                    <label class="margBot5" for="region_id">State/Province <span class="required">*</span></label>
		                    <select id="region_id" name="region_id" title="State/Province" style="" class="validate-select" defaultvalue="">
		                        </select>
		                   <input id="region" name="region" value="" title="State/Province" class="input-text required-entry" style="display:none;" type="text">
		                </li>
		            		            				    		                <li>
		                    <label class="margBot5" for="postcode">Zip/Postal Code <span class="required">*</span></label>
		                    <input class="input-text validate-capostcode validate-postcode required-entry" id="postcode" name="estimate_postcode" value="" type="text">
		                </li>
		                <li>
		                	<button type="submit" class="btn btn-white btn-sm btn-auto margBot5" onclick="coShippingMethodForm.submit()">Calculate Shipping</button>
		                </li>
		            </ul>    
		    </form> -->
		    <!-- <div class="smaller margTop15 margBot10">Shipping questions? <a target="_blank" href="/store/help/shipping.html">Domestic (USA)</a> | <a target="_blank" href="/store/help/shipping-international.html">Worldwide</a></div> -->
			</div>
		</div>
		
		<div class="cartTools last">
			<div class="head">
				<div class="text-wrap"><div class="cart-tool-title">Order Totals</div></div>
			</div>
			<div class="body">
				<div class="orderTotals" id="shopping-cart-totals-table">
				    <div class="row">
				        <div class="price-label">
				            Cart Total:
				        </div>
				        <div class="price-wrap">
				            {{ $totalPrice }}
				        </div>
				    </div>
				    @if($coupon)
			        <div class="row">
			        	<div class="price-label">
			        		Coupone({{ $coupon->name }})
			            </div>
			        	<div class="price-wrap">
			            	@if($coupon->dtype == 'cart')
                                -{{ $coupon->amount }}
                            @endif
                            @if($coupon->dtype == 'percent')
                                %{{ $coupon->amount }}
                            @endif
			            </div>
			    	</div>
			    	@endif
					<div class="row">
					    <div style="" class="price-label">
					            Shipping Cost:
					    </div>
					    <div style="" class="price-wrap">
					        <span class="price">
					        @if($coupon)
                                @if($coupon->freeship == 'no' && $totalPrice <= 500)
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
					    </div>
					</div>
					<div class="row grand">
					    <div style="" class="price-label">
					        <strong>Grand Total</strong>
					    </div>
					    <div style="" class="price-wrap">
					        <strong><span class="price">
					        	@if(!empty($couponTotal))
                                    ${{ $couponTotal }}
                                @else
                                    @if($totalPrice <= 500)
                                        ${{ $totalPrice + 25 }}
                                    @else
                                        ${{ $totalPrice }}
                                    @endif
                                        @endif
					        </span></strong>
					    </div>
					</div>
    			</div>		
				<div class="checkoutBtnWrapper checkout-types">
					<a href="{{ route('product.checkout') }}"><button class="btn btn-green proceedCheckout aloading floatRight"><span class="init">Proceed to Checkout</span></button></a>
				</div>
			</div>
		</div>

	</div><!-- End cartToolsContainer-->

</div><!-- End Cart -->

			</div>
			
		</div>
@endsection