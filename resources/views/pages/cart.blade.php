@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
	{!! Html::style('css/cart/app.css') !!}	
@endsection
@section('content')
<div id="main-wrap" class="wide-format">
		 	


		  	<div class="main-content wide-format">
			    			    
<div class="cartHeader clearfix">
	<h1 class=" cart-title"><span class="cart-header-text">Your Shopping Cart</span>
	
            <div class="shopper badge">
                 <a href="http://shopperapprovedreviews.com/reviews/muscleandstrength.com/" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; var certheight=screen.availHeight-90; window.open(this.href,'shopperapproved','location='+nonwin+',scrollbars=yes,width=620,height='+certheight+',menubar=no,toolbar=no'); return false;">
			        <img src="https://c683207.ssl.cf2.rackcdn.com/8633-m.gif" style="border: 0" alt="" oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by shopperapproved \251 '+d.getFullYear()+'.'); return false;"></a>
            </div>
            <div class="bbb badge">
                 <a href="http://www.bbb.org/columbia/business-reviews/vitamins-and-food-supplements/muscle-and-strength-in-columbia-sc-34013064" target="_blank"><img src="/sites/all/themes/mnsnew/images/bbb.png" alt=""></a>
            </div>
			<div class="mcafee badge">
                <!-- START MCAFEESECURE CODE -->
                <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.muscleandstrength.com"><img src="https://images.mcafeesecure.com/meter/www.muscleandstrength.com/22.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;" width="115" height="32" border="0"></a>
                <!-- END MCAFEESECURE CODE -->
            </div>

	</h1>
	<div class="cart-feature-wrap">
		<div class="feature-five">
			<svg width="17" height="17" style="margin-bottom: -2px;">
				<use xlink:href="#icon-low-price"></use>
				<image width="17" height="17" src="/store/skin/frontend/mnsv4/default/images/fallback/low-price.png"></image>
	        </svg>
			<span class="text">Lowest Prices</span>
		</div>
		<div class="feature-one">
			<svg width="17" height="17" style="margin-bottom: -2px;">
				<use xlink:href="#icon-deal-gray"></use>
				<image width="17" height="17" src="/store/skin/frontend/mnsv4/default/images/fallback/deal-gray.png"></image>
	        </svg>
			<span class="text">Best Deals</span>
		</div>
		<div class="feature-three">
			<svg width="22" height="22" style="margin-bottom: -5px;">
				<use xlink:href="#icon-sale"></use>
				<image width="22" height="22" src="/store/skin/frontend/mnsv4/default/images/fallback/sale.png"></image>
	        </svg>
			<span class="text">Money Back Guarantee</span>
		</div>
		<div class="feature-four">
			<svg width="27" height="27" style="margin-bottom: -8px;">
				<use xlink:href="#icon-truck-gray"></use>
				<image width="27" height="27" src="/store/skin/frontend/mnsv4/default/images/fallback/truck-gray.png"></image>
	        </svg>
			<span class="text">Super Fast Shipping</span>
		</div>
		<div class="feature-two">
			<svg width="22" height="22" style="margin-bottom: -4px;">
				<use xlink:href="#icon-support"></use>
				<image width="22" height="22" src="/store/skin/frontend/mnsv4/default/images/fallback/support.png"></image>
	        </svg>
			<span class="text">7 Day Support</span>
		</div>
		
	</div>
	 <div class="checkout-types">
	<button class="btn btn-green proceedCheckout aloading" onclick="location='https://www.muscleandstrength.com/store/checkout/onepage/'"><span class="init">Proceed to Checkout</span><span class="loading"><span class="svg-wrap"><svg width="15" height="15"><use xlink:href="#icon-update-white"></use><image width="15" height="15" src="/store/skin/frontend/mnsv4/default/images/fallback/update-white.png"></image></svg></span> Loading...</span></button>
</div>
	 	 <button type="button" class="btn btn-white btn-sm btn-auto btn-shop" onclick="setLocation('https://www.muscleandstrength.com/store/')">Continue Shopping</button>
	 </div>

<div class="cart">     
   
    <div class="clearBoth"></div>
        <form id="cartForm" action="https://www.muscleandstrength.com/store/checkout/cart/updatePost/" method="post">
		<input name="form_key" value="FVZXdRviy6fu7exz" type="hidden">
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
				        <a href="https://www.muscleandstrength.com/store/universal-animal-whey.html">{{ $product['item']['name'] }}</a>
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
								<span class="price">{{ $product['price'] }}</span>
							</div>
					</div>
				</div>          
			</div>
			@endforeach 
			@else

			@endif
        </div>
    
    <div class="cart-upsell">
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
</div>	</div>
	
	<div class="cartToolsContainer">

		<div class="cartTools first">

			<div class="logic-show-hide">
									<button class="accordion-button openactive" hide="<div class='text-wrap'><div class='cart-tool-title'>Coupons</div><span class='b-caret'>›</span></div>" hclass="closed" sclass="openactive" key="tool-box-coupon"><div class="text-wrap"><div class="cart-tool-title">Enter Coupon</div><span class="b-caret">›</span></div></button>
							</div>

			<div id="tool-box-coupon" class="body tool-box-coupon clearBoth clearfix key-open">
			
				
            <form id="discount-coupon-form" action="https://www.muscleandstrength.com/store/checkout/cart/couponPost/" method="post">
            <div class="discount-form">
            
             <label class="padBot5">Enter coupon code here:</label>
            
                <input name="remove" id="remove-coupon" value="0" type="hidden">
                <div class="input-box">
                    <input placeholder="Enter code..." class="input-text" id="coupon_code" name="coupon_code" value="">
                </div>
                <div style="padding-top:0;padding-left: 0;" class="buttons-set">
                    		            		            <button type="button" class="btn btn-white btn-auto btn-sm" onclick="discountForm.submit(false); return false;">Apply Coupon</button>
                </div>
            </div>
            </form>
            <div class="smaller margTop15 margBot10">Don't have a coupon? <a target="_blank" href="/store/promos.html">Find one here</a></div>
   

    
<script type="text/javascript">
//<![CDATA[
var discountForm = new VarienForm('discount-coupon-form');
discountForm.submit = function (isRemove) {
    if (isRemove) {
        $('coupon_code').removeClassName('required-entry');
        $('remove-coupon').value = "1";
    } else {
        $('coupon_code').addClassName('required-entry');
        $('remove-coupon').value = "0";
    }
    return VarienForm.prototype.submit.bind(discountForm)();
}
//]]>
</script>			</div>
			
		</div>
		
		<div class="cartTools">
			
			<div class="logic-show-hide">
				
				<button class="accordion-button openactive" hide="<div class='text-wrap'><div class='cart-tool-title'>Calculate Shipping</div><span class='b-caret'>›</span></div>" hclass="closed" sclass="openactive" key="tool-box-shipping"><div class="text-wrap"><div class="cart-tool-title">Calculate Shipping</div><span class="b-caret">›</span></div></button>
			</div>
			
			<div id="tool-box-shipping" class="body tool-box-shipping clearBoth clearfix key-open">
									
		    <form class="ieflat noborder" action="https://www.muscleandstrength.com/store/checkout/cart/estimatePost/" method="post" id="shipping-zip-form">
		            <ul class="form-list">
		                <li>
		                    <label class="margBot5" for="country_id">Country</label>
		                    <select name="country_id" id="country" class="validate-select" title="Country"><option value=""> </option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo - Brazzaville</option><option value="CD">Congo - Kinshasa</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte d’Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard &amp; McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong SAR China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau SAR China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="KP">North Korea</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territories</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre and Miquelon</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">São Tomé and Príncipe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia &amp; South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="VC">St. Vincent &amp; Grenadines</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US" selected="selected">United States</option><option value="UY">Uruguay</option><option value="UM">U.S. Outlying Islands</option><option value="VI">U.S. Virgin Islands</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>		                </li>
		            			        	
		                <li>
		                    <label class="margBot5" for="region_id">State/Province <span class="required">*</span></label>
		                    <select id="region_id" name="region_id" title="State/Province" style="" class="validate-select" defaultvalue="">
		                        <option value="">Please select region, state or province</option>
		                    <option value="1">Alabama</option><option value="2">Alaska</option><option value="3">American Samoa</option><option value="4">Arizona</option><option value="5">Arkansas</option><option value="6">Armed Forces Africa</option><option value="7">Armed Forces Americas</option><option value="8">Armed Forces Canada</option><option value="9">Armed Forces Europe</option><option value="10">Armed Forces Middle East</option><option value="11">Armed Forces Pacific</option><option value="12">California</option><option value="13">Colorado</option><option value="14">Connecticut</option><option value="15">Delaware</option><option value="16">District of Columbia</option><option value="17">Federated States Of Micronesia</option><option value="18">Florida</option><option value="19">Georgia</option><option value="20">Guam</option><option value="21">Hawaii</option><option value="22">Idaho</option><option value="23">Illinois</option><option value="24">Indiana</option><option value="25">Iowa</option><option value="26">Kansas</option><option value="27">Kentucky</option><option value="28">Louisiana</option><option value="29">Maine</option><option value="30">Marshall Islands</option><option value="31">Maryland</option><option value="32">Massachusetts</option><option value="33">Michigan</option><option value="34">Minnesota</option><option value="35">Mississippi</option><option value="36">Missouri</option><option value="37">Montana</option><option value="38">Nebraska</option><option value="39">Nevada</option><option value="40">New Hampshire</option><option value="41">New Jersey</option><option value="42">New Mexico</option><option value="43">New York</option><option value="44">North Carolina</option><option value="45">North Dakota</option><option value="46">Northern Mariana Islands</option><option value="47">Ohio</option><option value="48">Oklahoma</option><option value="49">Oregon</option><option value="50">Palau</option><option value="51">Pennsylvania</option><option value="52">Puerto Rico</option><option value="53">Rhode Island</option><option value="54">South Carolina</option><option value="55">South Dakota</option><option value="56">Tennessee</option><option value="57">Texas</option><option value="58">Utah</option><option value="59">Vermont</option><option value="60">Virgin Islands</option><option value="61">Virginia</option><option value="62">Washington</option><option value="63">West Virginia</option><option value="64">Wisconsin</option><option value="65">Wyoming</option></select>
		                   <script type="text/javascript">
		                   //<![CDATA[
		                       $('region_id').setAttribute('defaultValue', "");
		                   //]]>
		                   </script>
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
		            
		    </form>
		    
		    <div class="smaller margTop15 margBot10">Shipping questions? <a target="_blank" href="/store/help/shipping.html">Domestic (USA)</a> | <a target="_blank" href="/store/help/shipping-international.html">Worldwide</a></div>

		    <script type="text/javascript">
		    //<![CDATA[
		        new RegionUpdater('country', 'region', 'region_id', {"config":{"show_all_regions":true,"regions_required":["AT","CA","EE","FI","FR","DE","LV","LT","RO","ES","CH","US"]},"LV":{"473":{"code":"\u0100da\u017eu novads","name":"\u0100da\u017eu novads"},"368":{"code":"Aglonas novads","name":"Aglonas novads"},"369":{"code":"LV-AI","name":"Aizkraukles novads"},"370":{"code":"Aizputes novads","name":"Aizputes novads"},"371":{"code":"Akn\u012bstes novads","name":"Akn\u012bstes novads"},"372":{"code":"Alojas novads","name":"Alojas novads"},"373":{"code":"Alsungas novads","name":"Alsungas novads"},"374":{"code":"LV-AL","name":"Al\u016bksnes novads"},"375":{"code":"Amatas novads","name":"Amatas novads"},"376":{"code":"Apes novads","name":"Apes novads"},"377":{"code":"Auces novads","name":"Auces novads"},"378":{"code":"Bab\u012btes novads","name":"Bab\u012btes novads"},"379":{"code":"Baldones novads","name":"Baldones novads"},"380":{"code":"Baltinavas novads","name":"Baltinavas novads"},"381":{"code":"LV-BL","name":"Balvu novads"},"382":{"code":"LV-BU","name":"Bauskas novads"},"383":{"code":"Bever\u012bnas novads","name":"Bever\u012bnas novads"},"384":{"code":"Broc\u0113nu novads","name":"Broc\u0113nu novads"},"385":{"code":"Burtnieku novads","name":"Burtnieku novads"},"386":{"code":"Carnikavas novads","name":"Carnikavas novads"},"389":{"code":"LV-CE","name":"C\u0113su novads"},"387":{"code":"Cesvaines novads","name":"Cesvaines novads"},"388":{"code":"Ciblas novads","name":"Ciblas novads"},"390":{"code":"Dagdas novads","name":"Dagdas novads"},"357":{"code":"LV-DGV","name":"Daugavpils"},"391":{"code":"LV-DA","name":"Daugavpils novads"},"392":{"code":"LV-DO","name":"Dobeles novads"},"393":{"code":"Dundagas novads","name":"Dundagas novads"},"394":{"code":"Durbes novads","name":"Durbes novads"},"395":{"code":"Engures novads","name":"Engures novads"},"474":{"code":"\u0112rg\u013cu novads","name":"\u0112rg\u013cu novads"},"396":{"code":"Garkalnes novads","name":"Garkalnes novads"},"397":{"code":"Grobi\u0146as novads","name":"Grobi\u0146as novads"},"398":{"code":"LV-GU","name":"Gulbenes novads"},"399":{"code":"Iecavas novads","name":"Iecavas novads"},"400":{"code":"Ik\u0161\u0137iles novads","name":"Ik\u0161\u0137iles novads"},"401":{"code":"Il\u016bkstes novads","name":"Il\u016bkstes novads"},"402":{"code":"In\u010dukalna novads","name":"In\u010dukalna novads"},"403":{"code":"Jaunjelgavas novads","name":"Jaunjelgavas novads"},"404":{"code":"Jaunpiebalgas novads","name":"Jaunpiebalgas novads"},"405":{"code":"Jaunpils novads","name":"Jaunpils novads"},"359":{"code":"J\u0113kabpils","name":"J\u0113kabpils"},"407":{"code":"LV-JK","name":"J\u0113kabpils novads"},"358":{"code":"LV-JEL","name":"Jelgava"},"406":{"code":"LV-JL","name":"Jelgavas novads"},"360":{"code":"LV-JUR","name":"J\u016brmala"},"408":{"code":"Kandavas novads","name":"Kandavas novads"},"414":{"code":"K\u0101rsavas novads","name":"K\u0101rsavas novads"},"475":{"code":"\u0136eguma novads","name":"\u0136eguma novads"},"476":{"code":"\u0136ekavas novads","name":"\u0136ekavas novads"},"409":{"code":"Kokneses novads","name":"Kokneses novads"},"412":{"code":"LV-KR","name":"Kr\u0101slavas novads"},"410":{"code":"Krimuldas novads","name":"Krimuldas novads"},"411":{"code":"Krustpils novads","name":"Krustpils novads"},"413":{"code":"LV-KU","name":"Kuld\u012bgas novads"},"415":{"code":"Lielv\u0101rdes novads","name":"Lielv\u0101rdes novads"},"361":{"code":"LV-LPX","name":"Liep\u0101ja"},"362":{"code":"LV-LE","name":"Liep\u0101jas novads"},"419":{"code":"L\u012bgatnes novads","name":"L\u012bgatnes novads"},"416":{"code":"LV-LM","name":"Limba\u017eu novads"},"420":{"code":"L\u012bv\u0101nu novads","name":"L\u012bv\u0101nu novads"},"417":{"code":"Lub\u0101nas novads","name":"Lub\u0101nas novads"},"418":{"code":"LV-LU","name":"Ludzas novads"},"421":{"code":"LV-MA","name":"Madonas novads"},"423":{"code":"M\u0101lpils novads","name":"M\u0101lpils novads"},"424":{"code":"M\u0101rupes novads","name":"M\u0101rupes novads"},"422":{"code":"Mazsalacas novads","name":"Mazsalacas novads"},"425":{"code":"Nauk\u0161\u0113nu novads","name":"Nauk\u0161\u0113nu novads"},"426":{"code":"Neretas novads","name":"Neretas novads"},"427":{"code":"N\u012bcas novads","name":"N\u012bcas novads"},"428":{"code":"LV-OG","name":"Ogres novads"},"429":{"code":"Olaines novads","name":"Olaines novads"},"430":{"code":"Ozolnieku novads","name":"Ozolnieku novads"},"434":{"code":"P\u0101rgaujas novads","name":"P\u0101rgaujas novads"},"435":{"code":"P\u0101vilostas novads","name":"P\u0101vilostas novads"},"436":{"code":"P\u013cavi\u0146u novads","name":"P\u013cavi\u0146u novads"},"431":{"code":"LV-PR","name":"Prei\u013cu novads"},"432":{"code":"Priekules novads","name":"Priekules novads"},"433":{"code":"Prieku\u013cu novads","name":"Prieku\u013cu novads"},"437":{"code":"Raunas novads","name":"Raunas novads"},"363":{"code":"LV-REZ","name":"R\u0113zekne"},"444":{"code":"LV-RE","name":"R\u0113zeknes novads"},"438":{"code":"Riebi\u0146u novads","name":"Riebi\u0146u novads"},"364":{"code":"LV-RIX","name":"R\u012bga"},"365":{"code":"LV-RI","name":"R\u012bgas novads"},"439":{"code":"Rojas novads","name":"Rojas novads"},"440":{"code":"Ropa\u017eu novads","name":"Ropa\u017eu novads"},"441":{"code":"Rucavas novads","name":"Rucavas novads"},"442":{"code":"Rug\u0101ju novads","name":"Rug\u0101ju novads"},"445":{"code":"R\u016bjienas novads","name":"R\u016bjienas novads"},"443":{"code":"Rund\u0101les novads","name":"Rund\u0101les novads"},"446":{"code":"Salacgr\u012bvas novads","name":"Salacgr\u012bvas novads"},"447":{"code":"Salas novads","name":"Salas novads"},"448":{"code":"Salaspils novads","name":"Salaspils novads"},"449":{"code":"LV-SA","name":"Saldus novads"},"450":{"code":"Saulkrastu novads","name":"Saulkrastu novads"},"457":{"code":"S\u0113jas novads","name":"S\u0113jas novads"},"451":{"code":"Siguldas novads","name":"Siguldas novads"},"453":{"code":"Skr\u012bveru novads","name":"Skr\u012bveru novads"},"452":{"code":"Skrundas novads","name":"Skrundas novads"},"454":{"code":"Smiltenes novads","name":"Smiltenes novads"},"455":{"code":"Stopi\u0146u novads","name":"Stopi\u0146u novads"},"456":{"code":"Stren\u010du novads","name":"Stren\u010du novads"},"458":{"code":"LV-TA","name":"Talsu novads"},"460":{"code":"T\u0113rvetes novads","name":"T\u0113rvetes novads"},"459":{"code":"LV-TU","name":"Tukuma novads"},"461":{"code":"Vai\u0146odes novads","name":"Vai\u0146odes novads"},"462":{"code":"LV-VK","name":"Valkas novads"},"366":{"code":"Valmiera","name":"Valmiera"},"463":{"code":"LV-VM","name":"Valmieras novads"},"464":{"code":"Varak\u013c\u0101nu novads","name":"Varak\u013c\u0101nu novads"},"471":{"code":"V\u0101rkavas novads","name":"V\u0101rkavas novads"},"465":{"code":"Vecpiebalgas novads","name":"Vecpiebalgas novads"},"466":{"code":"Vecumnieku novads","name":"Vecumnieku novads"},"367":{"code":"LV-VEN","name":"Ventspils"},"467":{"code":"LV-VE","name":"Ventspils novads"},"468":{"code":"Vies\u012btes novads","name":"Vies\u012btes novads"},"469":{"code":"Vi\u013cakas novads","name":"Vi\u013cakas novads"},"470":{"code":"Vi\u013c\u0101nu novads","name":"Vi\u013c\u0101nu novads"},"472":{"code":"Zilupes novads","name":"Zilupes novads"}},"FI":{"341":{"code":"Ahvenanmaa","name":"Ahvenanmaa"},"335":{"code":"Etel\u00e4-Karjala","name":"Etel\u00e4-Karjala"},"328":{"code":"Etel\u00e4-Pohjanmaa","name":"Etel\u00e4-Pohjanmaa"},"327":{"code":"Etel\u00e4-Savo","name":"Etel\u00e4-Savo"},"339":{"code":"It\u00e4-Uusimaa","name":"It\u00e4-Uusimaa"},"324":{"code":"Kainuu","name":"Kainuu"},"337":{"code":"Kanta-H\u00e4me","name":"Kanta-H\u00e4me"},"332":{"code":"Keski-Pohjanmaa","name":"Keski-Pohjanmaa"},"333":{"code":"Keski-Suomi","name":"Keski-Suomi"},"340":{"code":"Kymenlaakso","name":"Kymenlaakso"},"322":{"code":"Lappi","name":"Lappi"},"336":{"code":"P\u00e4ij\u00e4t-H\u00e4me","name":"P\u00e4ij\u00e4t-H\u00e4me"},"330":{"code":"Pirkanmaa","name":"Pirkanmaa"},"329":{"code":"Pohjanmaa","name":"Pohjanmaa"},"325":{"code":"Pohjois-Karjala","name":"Pohjois-Karjala"},"323":{"code":"Pohjois-Pohjanmaa","name":"Pohjois-Pohjanmaa"},"326":{"code":"Pohjois-Savo","name":"Pohjois-Savo"},"331":{"code":"Satakunta","name":"Satakunta"},"338":{"code":"Uusimaa","name":"Uusimaa"},"334":{"code":"Varsinais-Suomi","name":"Varsinais-Suomi"}},"LT":{"477":{"code":"LT-AL","name":"Alytaus Apskritis"},"478":{"code":"LT-KU","name":"Kauno Apskritis"},"479":{"code":"LT-KL","name":"Klaip\u0117dos Apskritis"},"480":{"code":"LT-MR","name":"Marijampol\u0117s Apskritis"},"481":{"code":"LT-PN","name":"Panev\u0117\u017eio Apskritis"},"482":{"code":"LT-SA","name":"\u0160iauli\u0173 Apskritis"},"483":{"code":"LT-TA","name":"Taurag\u0117s Apskritis"},"484":{"code":"LT-TE","name":"Tel\u0161i\u0173 Apskritis"},"485":{"code":"LT-UT","name":"Utenos Apskritis"},"486":{"code":"LT-VL","name":"Vilniaus Apskritis"}},"EE":{"342":{"code":"EE-37","name":"Harjumaa"},"343":{"code":"EE-39","name":"Hiiumaa"},"344":{"code":"EE-44","name":"Ida-Virumaa"},"346":{"code":"EE-51","name":"J\u00e4rvamaa"},"345":{"code":"EE-49","name":"J\u00f5gevamaa"},"348":{"code":"EE-59","name":"L\u00e4\u00e4ne-Virumaa"},"347":{"code":"EE-57","name":"L\u00e4\u00e4nemaa"},"350":{"code":"EE-67","name":"P\u00e4rnumaa"},"349":{"code":"EE-65","name":"P\u00f5lvamaa"},"351":{"code":"EE-70","name":"Raplamaa"},"352":{"code":"EE-74","name":"Saaremaa"},"353":{"code":"EE-78","name":"Tartumaa"},"354":{"code":"EE-82","name":"Valgamaa"},"355":{"code":"EE-84","name":"Viljandimaa"},"356":{"code":"EE-86","name":"V\u00f5rumaa"}},"ES":{"130":{"code":"A Coru\u0441a","name":"A Coru\u00f1a"},"131":{"code":"Alava","name":"Alava"},"132":{"code":"Albacete","name":"Albacete"},"133":{"code":"Alicante","name":"Alicante"},"134":{"code":"Almeria","name":"Almeria"},"135":{"code":"Asturias","name":"Asturias"},"136":{"code":"Avila","name":"Avila"},"137":{"code":"Badajoz","name":"Badajoz"},"138":{"code":"Baleares","name":"Baleares"},"139":{"code":"Barcelona","name":"Barcelona"},"140":{"code":"Burgos","name":"Burgos"},"141":{"code":"Caceres","name":"Caceres"},"142":{"code":"Cadiz","name":"Cadiz"},"143":{"code":"Cantabria","name":"Cantabria"},"144":{"code":"Castellon","name":"Castellon"},"145":{"code":"Ceuta","name":"Ceuta"},"146":{"code":"Ciudad Real","name":"Ciudad Real"},"147":{"code":"Cordoba","name":"Cordoba"},"148":{"code":"Cuenca","name":"Cuenca"},"149":{"code":"Girona","name":"Girona"},"150":{"code":"Granada","name":"Granada"},"151":{"code":"Guadalajara","name":"Guadalajara"},"152":{"code":"Guipuzcoa","name":"Guipuzcoa"},"153":{"code":"Huelva","name":"Huelva"},"154":{"code":"Huesca","name":"Huesca"},"155":{"code":"Jaen","name":"Jaen"},"156":{"code":"La Rioja","name":"La Rioja"},"157":{"code":"Las Palmas","name":"Las Palmas"},"158":{"code":"Leon","name":"Leon"},"159":{"code":"Lleida","name":"Lleida"},"160":{"code":"Lugo","name":"Lugo"},"161":{"code":"Madrid","name":"Madrid"},"162":{"code":"Malaga","name":"Malaga"},"163":{"code":"Melilla","name":"Melilla"},"164":{"code":"Murcia","name":"Murcia"},"165":{"code":"Navarra","name":"Navarra"},"166":{"code":"Ourense","name":"Ourense"},"167":{"code":"Palencia","name":"Palencia"},"168":{"code":"Pontevedra","name":"Pontevedra"},"169":{"code":"Salamanca","name":"Salamanca"},"170":{"code":"Santa Cruz de Tenerife","name":"Santa Cruz de Tenerife"},"171":{"code":"Segovia","name":"Segovia"},"172":{"code":"Sevilla","name":"Sevilla"},"173":{"code":"Soria","name":"Soria"},"174":{"code":"Tarragona","name":"Tarragona"},"175":{"code":"Teruel","name":"Teruel"},"176":{"code":"Toledo","name":"Toledo"},"177":{"code":"Valencia","name":"Valencia"},"178":{"code":"Valladolid","name":"Valladolid"},"179":{"code":"Vizcaya","name":"Vizcaya"},"180":{"code":"Zamora","name":"Zamora"},"181":{"code":"Zaragoza","name":"Zaragoza"}},"CH":{"104":{"code":"AG","name":"Aargau"},"106":{"code":"AR","name":"Appenzell Ausserrhoden"},"105":{"code":"AI","name":"Appenzell Innerrhoden"},"108":{"code":"BL","name":"Basel-Landschaft"},"109":{"code":"BS","name":"Basel-Stadt"},"107":{"code":"BE","name":"Bern"},"110":{"code":"FR","name":"Freiburg"},"111":{"code":"GE","name":"Genf"},"112":{"code":"GL","name":"Glarus"},"113":{"code":"GR","name":"Graub\u00fcnden"},"114":{"code":"JU","name":"Jura"},"115":{"code":"LU","name":"Luzern"},"116":{"code":"NE","name":"Neuenburg"},"117":{"code":"NW","name":"Nidwalden"},"118":{"code":"OW","name":"Obwalden"},"120":{"code":"SH","name":"Schaffhausen"},"122":{"code":"SZ","name":"Schwyz"},"121":{"code":"SO","name":"Solothurn"},"119":{"code":"SG","name":"St. Gallen"},"124":{"code":"TI","name":"Tessin"},"123":{"code":"TG","name":"Thurgau"},"125":{"code":"UR","name":"Uri"},"126":{"code":"VD","name":"Waadt"},"127":{"code":"VS","name":"Wallis"},"128":{"code":"ZG","name":"Zug"},"129":{"code":"ZH","name":"Z\u00fcrich"}},"FR":{"182":{"code":"01","name":"Ain"},"183":{"code":"02","name":"Aisne"},"184":{"code":"03","name":"Allier"},"185":{"code":"04","name":"Alpes-de-Haute-Provence"},"187":{"code":"06","name":"Alpes-Maritimes"},"188":{"code":"07","name":"Ard\u00e8che"},"189":{"code":"08","name":"Ardennes"},"190":{"code":"09","name":"Ari\u00e8ge"},"191":{"code":"10","name":"Aube"},"192":{"code":"11","name":"Aude"},"193":{"code":"12","name":"Aveyron"},"249":{"code":"67","name":"Bas-Rhin"},"194":{"code":"13","name":"Bouches-du-Rh\u00f4ne"},"195":{"code":"14","name":"Calvados"},"196":{"code":"15","name":"Cantal"},"197":{"code":"16","name":"Charente"},"198":{"code":"17","name":"Charente-Maritime"},"199":{"code":"18","name":"Cher"},"200":{"code":"19","name":"Corr\u00e8ze"},"201":{"code":"2A","name":"Corse-du-Sud"},"203":{"code":"21","name":"C\u00f4te-d'Or"},"204":{"code":"22","name":"C\u00f4tes-d'Armor"},"205":{"code":"23","name":"Creuse"},"261":{"code":"79","name":"Deux-S\u00e8vres"},"206":{"code":"24","name":"Dordogne"},"207":{"code":"25","name":"Doubs"},"208":{"code":"26","name":"Dr\u00f4me"},"273":{"code":"91","name":"Essonne"},"209":{"code":"27","name":"Eure"},"210":{"code":"28","name":"Eure-et-Loir"},"211":{"code":"29","name":"Finist\u00e8re"},"212":{"code":"30","name":"Gard"},"214":{"code":"32","name":"Gers"},"215":{"code":"33","name":"Gironde"},"250":{"code":"68","name":"Haut-Rhin"},"202":{"code":"2B","name":"Haute-Corse"},"213":{"code":"31","name":"Haute-Garonne"},"225":{"code":"43","name":"Haute-Loire"},"234":{"code":"52","name":"Haute-Marne"},"252":{"code":"70","name":"Haute-Sa\u00f4ne"},"256":{"code":"74","name":"Haute-Savoie"},"269":{"code":"87","name":"Haute-Vienne"},"186":{"code":"05","name":"Hautes-Alpes"},"247":{"code":"65","name":"Hautes-Pyr\u00e9n\u00e9es"},"274":{"code":"92","name":"Hauts-de-Seine"},"216":{"code":"34","name":"H\u00e9rault"},"217":{"code":"35","name":"Ille-et-Vilaine"},"218":{"code":"36","name":"Indre"},"219":{"code":"37","name":"Indre-et-Loire"},"220":{"code":"38","name":"Is\u00e8re"},"221":{"code":"39","name":"Jura"},"222":{"code":"40","name":"Landes"},"223":{"code":"41","name":"Loir-et-Cher"},"224":{"code":"42","name":"Loire"},"226":{"code":"44","name":"Loire-Atlantique"},"227":{"code":"45","name":"Loiret"},"228":{"code":"46","name":"Lot"},"229":{"code":"47","name":"Lot-et-Garonne"},"230":{"code":"48","name":"Loz\u00e8re"},"231":{"code":"49","name":"Maine-et-Loire"},"232":{"code":"50","name":"Manche"},"233":{"code":"51","name":"Marne"},"235":{"code":"53","name":"Mayenne"},"236":{"code":"54","name":"Meurthe-et-Moselle"},"237":{"code":"55","name":"Meuse"},"238":{"code":"56","name":"Morbihan"},"239":{"code":"57","name":"Moselle"},"240":{"code":"58","name":"Ni\u00e8vre"},"241":{"code":"59","name":"Nord"},"242":{"code":"60","name":"Oise"},"243":{"code":"61","name":"Orne"},"257":{"code":"75","name":"Paris"},"244":{"code":"62","name":"Pas-de-Calais"},"245":{"code":"63","name":"Puy-de-D\u00f4me"},"246":{"code":"64","name":"Pyr\u00e9n\u00e9es-Atlantiques"},"248":{"code":"66","name":"Pyr\u00e9n\u00e9es-Orientales"},"251":{"code":"69","name":"Rh\u00f4ne"},"253":{"code":"71","name":"Sa\u00f4ne-et-Loire"},"254":{"code":"72","name":"Sarthe"},"255":{"code":"73","name":"Savoie"},"259":{"code":"77","name":"Seine-et-Marne"},"258":{"code":"76","name":"Seine-Maritime"},"275":{"code":"93","name":"Seine-Saint-Denis"},"262":{"code":"80","name":"Somme"},"263":{"code":"81","name":"Tarn"},"264":{"code":"82","name":"Tarn-et-Garonne"},"272":{"code":"90","name":"Territoire-de-Belfort"},"277":{"code":"95","name":"Val-d'Oise"},"276":{"code":"94","name":"Val-de-Marne"},"265":{"code":"83","name":"Var"},"266":{"code":"84","name":"Vaucluse"},"267":{"code":"85","name":"Vend\u00e9e"},"268":{"code":"86","name":"Vienne"},"270":{"code":"88","name":"Vosges"},"271":{"code":"89","name":"Yonne"},"260":{"code":"78","name":"Yvelines"}},"US":{"1":{"code":"AL","name":"Alabama"},"2":{"code":"AK","name":"Alaska"},"3":{"code":"AS","name":"American Samoa"},"4":{"code":"AZ","name":"Arizona"},"5":{"code":"AR","name":"Arkansas"},"6":{"code":"AE","name":"Armed Forces Africa"},"7":{"code":"AA","name":"Armed Forces Americas"},"8":{"code":"AE","name":"Armed Forces Canada"},"9":{"code":"AE","name":"Armed Forces Europe"},"10":{"code":"AE","name":"Armed Forces Middle East"},"11":{"code":"AP","name":"Armed Forces Pacific"},"12":{"code":"CA","name":"California"},"13":{"code":"CO","name":"Colorado"},"14":{"code":"CT","name":"Connecticut"},"15":{"code":"DE","name":"Delaware"},"16":{"code":"DC","name":"District of Columbia"},"17":{"code":"FM","name":"Federated States Of Micronesia"},"18":{"code":"FL","name":"Florida"},"19":{"code":"GA","name":"Georgia"},"20":{"code":"GU","name":"Guam"},"21":{"code":"HI","name":"Hawaii"},"22":{"code":"ID","name":"Idaho"},"23":{"code":"IL","name":"Illinois"},"24":{"code":"IN","name":"Indiana"},"25":{"code":"IA","name":"Iowa"},"26":{"code":"KS","name":"Kansas"},"27":{"code":"KY","name":"Kentucky"},"28":{"code":"LA","name":"Louisiana"},"29":{"code":"ME","name":"Maine"},"30":{"code":"MH","name":"Marshall Islands"},"31":{"code":"MD","name":"Maryland"},"32":{"code":"MA","name":"Massachusetts"},"33":{"code":"MI","name":"Michigan"},"34":{"code":"MN","name":"Minnesota"},"35":{"code":"MS","name":"Mississippi"},"36":{"code":"MO","name":"Missouri"},"37":{"code":"MT","name":"Montana"},"38":{"code":"NE","name":"Nebraska"},"39":{"code":"NV","name":"Nevada"},"40":{"code":"NH","name":"New Hampshire"},"41":{"code":"NJ","name":"New Jersey"},"42":{"code":"NM","name":"New Mexico"},"43":{"code":"NY","name":"New York"},"44":{"code":"NC","name":"North Carolina"},"45":{"code":"ND","name":"North Dakota"},"46":{"code":"MP","name":"Northern Mariana Islands"},"47":{"code":"OH","name":"Ohio"},"48":{"code":"OK","name":"Oklahoma"},"49":{"code":"OR","name":"Oregon"},"50":{"code":"PW","name":"Palau"},"51":{"code":"PA","name":"Pennsylvania"},"52":{"code":"PR","name":"Puerto Rico"},"53":{"code":"RI","name":"Rhode Island"},"54":{"code":"SC","name":"South Carolina"},"55":{"code":"SD","name":"South Dakota"},"56":{"code":"TN","name":"Tennessee"},"57":{"code":"TX","name":"Texas"},"58":{"code":"UT","name":"Utah"},"59":{"code":"VT","name":"Vermont"},"60":{"code":"VI","name":"Virgin Islands"},"61":{"code":"VA","name":"Virginia"},"62":{"code":"WA","name":"Washington"},"63":{"code":"WV","name":"West Virginia"},"64":{"code":"WI","name":"Wisconsin"},"65":{"code":"WY","name":"Wyoming"}},"RO":{"280":{"code":"AB","name":"Alba"},"281":{"code":"AR","name":"Arad"},"282":{"code":"AG","name":"Arge\u015f"},"283":{"code":"BC","name":"Bac\u0103u"},"284":{"code":"BH","name":"Bihor"},"285":{"code":"BN","name":"Bistri\u0163a-N\u0103s\u0103ud"},"286":{"code":"BT","name":"Boto\u015fani"},"288":{"code":"BR","name":"Br\u0103ila"},"287":{"code":"BV","name":"Bra\u015fov"},"289":{"code":"B","name":"Bucure\u015fti"},"290":{"code":"BZ","name":"Buz\u0103u"},"292":{"code":"CL","name":"C\u0103l\u0103ra\u015fi"},"291":{"code":"CS","name":"Cara\u015f-Severin"},"293":{"code":"CJ","name":"Cluj"},"294":{"code":"CT","name":"Constan\u0163a"},"295":{"code":"CV","name":"Covasna"},"296":{"code":"DB","name":"D\u00e2mbovi\u0163a"},"297":{"code":"DJ","name":"Dolj"},"298":{"code":"GL","name":"Gala\u0163i"},"299":{"code":"GR","name":"Giurgiu"},"300":{"code":"GJ","name":"Gorj"},"301":{"code":"HR","name":"Harghita"},"302":{"code":"HD","name":"Hunedoara"},"303":{"code":"IL","name":"Ialomi\u0163a"},"304":{"code":"IS","name":"Ia\u015fi"},"305":{"code":"IF","name":"Ilfov"},"306":{"code":"MM","name":"Maramure\u015f"},"307":{"code":"MH","name":"Mehedin\u0163i"},"308":{"code":"MS","name":"Mure\u015f"},"309":{"code":"NT","name":"Neam\u0163"},"310":{"code":"OT","name":"Olt"},"311":{"code":"PH","name":"Prahova"},"313":{"code":"SJ","name":"S\u0103laj"},"312":{"code":"SM","name":"Satu-Mare"},"314":{"code":"SB","name":"Sibiu"},"315":{"code":"SV","name":"Suceava"},"316":{"code":"TR","name":"Teleorman"},"317":{"code":"TM","name":"Timi\u015f"},"318":{"code":"TL","name":"Tulcea"},"320":{"code":"VL","name":"V\u00e2lcea"},"319":{"code":"VS","name":"Vaslui"},"321":{"code":"VN","name":"Vrancea"}},"CA":{"66":{"code":"AB","name":"Alberta"},"67":{"code":"BC","name":"British Columbia"},"68":{"code":"MB","name":"Manitoba"},"70":{"code":"NB","name":"New Brunswick"},"69":{"code":"NL","name":"Newfoundland and Labrador"},"72":{"code":"NT","name":"Northwest Territories"},"71":{"code":"NS","name":"Nova Scotia"},"73":{"code":"NU","name":"Nunavut"},"74":{"code":"ON","name":"Ontario"},"75":{"code":"PE","name":"Prince Edward Island"},"76":{"code":"QC","name":"Quebec"},"77":{"code":"SK","name":"Saskatchewan"},"78":{"code":"YT","name":"Yukon Territory"}},"DE":{"80":{"code":"BAW","name":"Baden-W\u00fcrttemberg"},"81":{"code":"BAY","name":"Bayern"},"82":{"code":"BER","name":"Berlin"},"83":{"code":"BRG","name":"Brandenburg"},"84":{"code":"BRE","name":"Bremen"},"85":{"code":"HAM","name":"Hamburg"},"86":{"code":"HES","name":"Hessen"},"87":{"code":"MEC","name":"Mecklenburg-Vorpommern"},"79":{"code":"NDS","name":"Niedersachsen"},"88":{"code":"NRW","name":"Nordrhein-Westfalen"},"89":{"code":"RHE","name":"Rheinland-Pfalz"},"90":{"code":"SAR","name":"Saarland"},"91":{"code":"SAS","name":"Sachsen"},"92":{"code":"SAC","name":"Sachsen-Anhalt"},"93":{"code":"SCN","name":"Schleswig-Holstein"},"94":{"code":"THE","name":"Th\u00fcringen"}},"AT":{"102":{"code":"BL","name":"Burgenland"},"99":{"code":"KN","name":"K\u00e4rnten"},"96":{"code":"NO","name":"Nieder\u00f6sterreich"},"97":{"code":"OO","name":"Ober\u00f6sterreich"},"98":{"code":"SB","name":"Salzburg"},"100":{"code":"ST","name":"Steiermark"},"101":{"code":"TI","name":"Tirol"},"103":{"code":"VB","name":"Vorarlberg"},"95":{"code":"WI","name":"Wien"}}});
		    //]]>
		    </script>
		

						<script type="text/javascript">
			//<![CDATA[
			    var coShippingMethodForm = new VarienForm('shipping-zip-form');
                coShippingMethodForm.submit = function() {
                    var country = ($('country').value);
                    if (country != 'CA') {
                        Validation.addAllThese(
                            [
                                ['validate-postcode', 'Please enter a valid zip code. For example 90602 or 90602-1234.', function (v) {
                                    var element = $('postcode');
                                    if (element && ('' != element.value)) {
                                        if (!element.value.match(/(^[A-z0-9]{2,10}([\s]{0,2}|[\-]{0,2})[A-z0-9]{2,10}$)/)) {
                                            return false;
                                        }
                                    }
                                    return true;
                                }]
                            ]
                        );
                    } else {
                        Validation.addAllThese(
                            [
                                ['validate-postcode', 'Please enter a valid zip code.', function (v) {
                                    var element = $('postcode');
                                    if (element && ('' != element.value)) {
										var capostcodeentry = element.value.toUpperCase().replace(/\s*/g, '');
										if (!capostcodeentry.match(/(^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1}\d{1}[A-Z]{1}\d{1}$)/)) {
											return false;
										}
                                    }
                                    return true;
                                }]
                            ]
                        );
                    }
                }
            //]]>
			</script>							</div>
			
		</div>
		
		<div class="cartTools last">
			
			<div class="head">
				<div class="text-wrap"><div class="cart-tool-title">Order Totals</div></div>
			</div>
			
			<div class="body">
				
<div class="orderTotals" id="shopping-cart-totals-table">
        
    <div class="row">
        <div class="price-label">
            Points Earned        </div>
        <div class="price-wrap">
            451 points        </div>
    </div>

        <div class="row">
        <div class="price-label">
            Bonus Points Earned        </div>
        <div class="price-wrap">
            75 points        </div>
    </div>
    



<div class="row">
            <div style="" class="price-label">
            Subtotal        </div>
        <div style="" class="price-wrap">
            <span class="price">$225.78</span>        </div>
    </div>
    
<div class="row grand">
            <div style="" class="price-label">
            <strong>Grand Total</strong>
        </div>
        <div style="" class="price-wrap">
            <strong><span class="price">{{ $totalPrice }}</span></strong>
        </div>
    </div></div>
				
									
					<div class="checkoutBtnWrapper checkout-types">
						<button class="btn btn-green proceedCheckout aloading floatRight" onclick="location='https://www.muscleandstrength.com/store/checkout/onepage/'"><span class="init">Proceed to Checkout</span><span class="loading"><span class="svg-wrap"><svg width="15" height="15"><use xlink:href="#icon-update-white"></use><image width="15" height="15" src="/store/skin/frontend/mnsv4/default/images/fallback/update-white.png"></image></svg></span> Loading...</span></button>
					</div>
					
							</div>
			
			<div class="payment-methods">
				<div class="payment-icon"><img alt="paypal" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/payment-icons/paypal.png"></div>
				<div class="payment-icon"><img alt="mastercard" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/payment-icons/mastercard.png"></div>
				<div class="payment-icon"><img alt="visa" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/payment-icons/visa.png"></div>
				<div class="payment-icon"><img alt="american-express" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/payment-icons/american-express.png"></div>
				<div class="payment-icon"><img alt="discover" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/payment-icons/discover.png"></div>
			</div>

		</div>

	</div><!-- End cartToolsContainer-->

</div><!-- End Cart -->

<script type="text/javascript">
if (typeof StrandsTrack=="undefined"){StrandsTrack=[];}
//Order was placed (serveral items were purchased)
StrandsTrack.push({
    event: "updateshoppingcart",
    items: ["18919"]});
</script>

<!-- Custom Audience Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');
// Insert Your Custom Audience Pixel ID below.
fbq('init', '664621053675457');
// If you have a separate add to cart page that is loaded.
fbq('track', 'AddToCart', {
	content_name: 'Shopping Cart',
	content_ids: ["UN0287","UN0265","UN0272","UN0281"],
	content_type: 'product_group'
});
</script>
<!-- End Custom Audience Pixel Code -->

<script type="text/javascript">

    var CAPTION_POINT = 'Points';
    var CAPTION_POINTS = 'Points';
    var CAPTION_YOU_WILL_SPEND = 'You Will Spend';
    var CAPTION_WITH = 'with';
    var CAPTION_CANNOT_USE_POINTS = "You cannot use points until you login or create a new account.";
    var CAPTION_NOT_ENOUGH_POINTS = "You don't have enough points to use this redemption rule.";
    var CAPTION_REFRESHING_CART = 'Refreshing cart, please wait..';

</script>			</div>
			
		</div>
@endsection