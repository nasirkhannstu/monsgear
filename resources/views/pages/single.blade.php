@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
  {!! Html::style('css/appSingle.css') !!} 
  {!! Html::style('css/appSingle1.css') !!} 
@endsection
@section('content')
<div id="main-wrap" >

  <div class="main-content">
    <div class="message-wrap">
        <div id="messages_product_view"></div>
    </div>
    <div class="product-header" itemscope itemtype="http://schema.org/Product">
        <div class="product-title-wrap">
            <h1 class="product-title" itemprop="name">
                {{ $product->name }}
            </h1>
        </div>
        <div class="product-image">

          <picture class="large" >
              <img itemprop="image" id="image" src="{{ asset('uploads/product/'. $product->image) }}" alt="Creactor" title="Creactor">
          </picture>
        </div>
        <div class="product-info">
          <span class="brand" itemprop="brand" itemscope itemtype="http://schema.org/Brand">
            <div class="brand">A <a itemprop="url" href="/store/manufacturer/muscletech.html">
              <span itemprop="name">MuscleTech</span></a> Product
            </div>     
          </span>
          <div class="tagline">
            Unique Free-Acid Creatine To Boost Size &amp; Strength!*
          </div>
        </div>
        <div class="product-data">
            <a href="#reviews" class="review-status-button"  itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                    <meta itemprop="worstRating" content="1"/>
                    <meta itemprop="bestRating" content="5"/>
                    <meta itemprop="ratingValue" content="4.6"/>
                    <meta itemprop="reviewCount" content="271"/>
                                <div class="product-rating-wrap">
                    <div class="rating-box">
                        <div class="star-overlay gray-bg"></div>
                        <div class="rating" style="width:92%;"></div>
                    </div>
                </div>
                                                                    <span class="button-text">271 <span class="button-text-label">Reviews</span></span>
            </a>
            <div class="product-share-btn addthis_toolbox">
                <a class="addthis_button_more">
                <div class="icon-wrap">
                    <svg version="1.1" x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                                <path fill="#005599" d="M9.9,4.6V0l6.7,7.1l-6.7,7.1V9.5c0,0-4.5-0.7-9.8,4.7C-0.5,14.7,0.9,5.3,9.9,4.6z" />
                            </svg>
                </div>
                <div class="active icon-wrap">
                    <svg version="1.1" x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 100 100"
                         enable-background="new 0 0 16 16" xml:space="preserve">
                               <path fill="#005599"
                                     d="M58.4,47.3l38.1,48.9H81.6L50.9,55.6L20.4,96.2h-16L43.7,48L4.4,4.6h16l30.7,35.2L81.6,4.6h14.8L58.4,47.3z"/>
                            </svg>
                </div>
                <span class="button-text">Share</span>
                </a>
            </div>
        </div>
    </div>
    <div class="features-list-wrap">
    <ul class="features-list">
        <li>
            <div class="inner-wrap">
                <a href="#" data-featherlight="#features-list-rewards">
                    <span class="inner-icon">
                        <svg style="width:1em; height:1em; margin-bottom: -.21em; margin-left:.3em;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-mns-rewards-icon"></use>
                            <image style="width:1em; height:1em; margin-bottom: -.21em; margin-left:.3em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/mns-rewards-icon.png"></image>
                        </svg>
                    </span>
                    Earn Points <span class="new-line">On Everything</span>
                </a>
            </div>
        </li>
        <li><div class="inner-wrap">
                <a href="#" data-featherlight="#features-list-samples">
                    <span class="inner-icon">
                        <svg style="width:1em; height:1em; margin-bottom: -.15em; margin-left:.3em;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-supplements-blue"></use>
                            <image style="width:1em; height:1em; margin-bottom: -.15em; margin-left:.3em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/supplements-blue.png"></image>
                        </svg>
                    </span>
                    Free Samples <span class="new-line">With All Orders</span>
                </a>
            </div>
        </li>
        <li>
            <div class="inner-wrap">
                <a href="#" data-featherlight="#features-list-shipping">
                    <span class="inner-icon">
                        <svg style="width:1em; height:1em; margin-bottom: -.18em; margin-left:.3em;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-truck"></use>
                            <image style="width:1em; height:1em; margin-bottom: -.18em; margin-left:.3em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/truck.png"></image>
                        </svg>
                    </span>
                    Same Day <span class="new-line">Shipping</span>
                </a>
            </div>
        </li>
        <li>
            <div class="inner-wrap">
                <a href="#" data-featherlight="#features-list-returns">
                    <span class="inner-icon">
                        <svg style="width:1em; height:1em; margin-bottom: -.15em; margin-left:.3em;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-saved-cards"></use>
                            <image style="width:1em; height:1em; margin-bottom: -.15em; margin-left:.3em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/saved-cards.png"></image>
                        </svg>
                    </span>
                    Money Back <span class="new-line">Guarantee</span>
                </a>
            </div>
        </li>
    </ul>
    <div class="features-list-lightbox-content">
        <div id="features-list-rewards" class="features-list-lightbox-item">
            <div class="features-list-lightbox-image-wrap">
                <img srcset="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/rewards.png 1x, https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/large/rewards.png 2x" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/rewards.png" >
            </div>
            <div class="features-list-lightbox-content-wrap">
                <div class="features-list-lightbox-copy">
                    <div class="features-list-lightbox-title">Muscle &amp; Strength Rewards</div>
                    <p>Earn 2 points for every dollar you spend at Muscle &amp; Strength! Spend your points on order discounts, fitness gear and exclusive products.</p>
                </div>
                <div class="features-list-lightbox-btn-wrap">
                    <a href="/store/rewards" class="btn btn-flat-blue btn-style1">Learn More</a>
                </div>
            </div>
        </div>
        <div id="features-list-samples" class="features-list-lightbox-item">
            <div class="features-list-lightbox-image-wrap">
                <img srcset="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/sample.png 1x, https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/large/sample.png 2x" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/sample.png" >
            </div>
            <div class="features-list-lightbox-content-wrap">
                <div class="features-list-lightbox-copy">
                    <div class="features-list-lightbox-title">2 Free Samples</div>
                    <p>Try before you buy! You can choose 2 free samples with every order you place at Muscle &amp; Strength.</p>
                </div>
                <div class="features-list-lightbox-btn-wrap">
                    <a href="/store/samples" class="btn btn-flat-blue btn-style1">View Samples</a>
                </div>
            </div>
        </div>
        <div id="features-list-shipping" class="features-list-lightbox-item">
            <div class="features-list-lightbox-image-wrap">
                <img srcset="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/shipping.png 1x, https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/large/shipping.png 2x" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/shipping.png" >
            </div>
            <div class="features-list-lightbox-content-wrap">
                <div class="features-list-lightbox-copy">
                    <div class="features-list-lightbox-title">Same Day Shipping</div>
                    <p>We ship fast! USA orders placed before 6pm EST will be shipped the same day.</p>
                    <p>International orders placed before 4pm EST will be shipped the same day.</p>
                </div>
                <div class="features-list-lightbox-btn-wrap">
                    <a href="/store/help/shipping.html" class="btn btn-flat-blue btn-style1">Learn More</a>
                </div>
            </div>
        </div>
        <div id="features-list-returns" class="features-list-lightbox-item">
            <div class="features-list-lightbox-image-wrap">
                <img srcset="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/money.png 1x, https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/large/money.png 2x" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/money.png" >
            </div>
            <div class="features-list-lightbox-content-wrap">
                <div class="features-list-lightbox-copy">
                    <div class="features-list-lightbox-title">60 Day Guarantee</div>
                    <p>Not happy with your purchase? No problem. Simply return it to us within 60 days and we'll replace it, credit your account, or give you a full refund.</p>
                </div>
                <div class="features-list-lightbox-btn-wrap">
                    <a href="/store/help/returns.html" class="btn btn-flat-blue btn-style1">Learn More</a>
                </div>
            </div>
        </div>
        <div id="paypal-purchase" class="features-list-lightbox-item">
            <div class="features-list-lightbox-image-wrap">
                <img srcset="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/paypal.png 1x, https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/large/paypal.png 2x" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/paypal.png" >
            </div>
            <div class="features-list-lightbox-content-wrap">
                <div class="features-list-lightbox-copy">
                    <div class="features-list-lightbox-title">PayPal Message</div>
                    <p>Due to PayPal's Acceptable Use Policy, you cannot purchase this product using PayPal. Choose a different option when checking out.</p>
                    <p>If you have any questions about PayPal please call us on <a href="tel:1-800-537-9910">1-800-537-9910</a> or email <a href="mailto:support@muscleandstrength.com">support@muscleandstrength.com</a></p>
                </div>
            </div>
        </div>
        <div id="contact-us" class="features-list-lightbox-item">
            <div class="features-list-lightbox-image-wrap">
                <img srcset="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/contact.png 1x, https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/large/contact.png 2x" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/popup-boxes/contact.png" >
            </div>
            <div class="features-list-lightbox-content-wrap">
                <div class="features-list-lightbox-copy">
                    <div class="features-list-lightbox-title">Contact Us</div>
                    <p>If you have any questions about products please call us on <a href="tel:1-800-537-9910">1-800-537-9910</a> or email <a href="mailto:support@muscleandstrength.com">support@muscleandstrength.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>        <div class="deals-coupons-section solo">
        <div class="section-inner-wrap">
            <h3 class="deals-coupons-title">
                <svg class="svg-icon" style="width: 1em; height: 1em; margin-bottom: -0.15em; margin-right: .3em;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-deal-white"></use><image style="width: 1em; height: 1em; margin-bottom: -0.15em; margin-right: .3em;" src="/store/skin/frontend/mnsv4/default/images/fallback/deal-white.png"></image>
                </svg> Deals
            </h3>
            <div class="deals-swiper-container">
                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                            <img class="deal-image" src="https://cdn.muscleandstrength.com/store/media/mnsresized/promos/3cac4e/200/200/creactor_2_29.jpg" alt="Buy 1 Get 1 FREE" />
                            <div class="deal-info-wrap">
                                <div class="deal-label">Buy 1 Get 1 FREE</div>
                                <div class="deal-desc">Buy 1 MuscleTech Creactor and get 1 absolutely FREE! Limited time only.</div>
                            </div>
                        </div>
                                    </div>
            </div>
                    </div>
    </div>
</div>
<div class="aside aside-after">
  <div class="product-shop">
    <div class="shop-wrap">
            <div class="section-title">Buying Options</div>

            <form action="https://www.muscleandstrength.com/store/checkout/cart/add/uenc/aHR0cHM6Ly93d3cubXVzY2xlYW5kc3RyZW5ndGguY29tL3N0b3JlL2NyZWFjdG9yLmh0bWw,/product/15588/form_key/SEt5cTBgXjHLDngK/" method="post"
                  id="product_addtocart_form">
                <div class="section-inner-wrap">                                                <div class="group-wrap">

                            <div class="group"  itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <div class="group-header">
            <div class="cost">
                                <meta itemprop="priceCurrency" content="USD" />                <span class="calc"  itemprop="price">
                                    

        
    <div class="price-box">
                                                            <span
                class="regular-price" id="product-price-18057">
                    <span class="price">$21.99</span>                </span>
                        
        </div>

                                </span>
            </div>
            <div class="title">120 Servings</div>
                                                                                        <br>
  <div class="deal">
    <span class="label success">
      Buy 1 Get 1 FREE    </span>
  </div>
        </div>
        <div class="fields">
            <div class="row">
                                <link itemprop="availability" href="http://schema.org/InStock"/>
                                                                                                                                                    <span itemprop="itemOffered" itemscope itemtype="http://schema.org/Product">
                    <meta itemprop="name" content="MuscleTech Creactor - 120 Servings Unflavored" />
                    <meta itemprop="itemCondition" content="NewCondition" />
                                        <meta itemprop="gtin12" content="631656708172" />
                                        <meta itemprop="sku" content="MT0247" />
                    </span>
                                                <div class="option-field field">
                    <select class="select_on flavor_picker">
                        <option value="-1">Pick a Flavor</option>
                                                                        <option value="" disabled disabled="disabled" data-option-label="Out of Stock">Blue Raspberry</option>
                                                                                                <option value="" disabled disabled="disabled" data-option-label="Out of Stock">Fruit Punch</option>
                                                                                                <option value="" disabled disabled="disabled" data-option-label="Out of Stock">Lemon Lime</option>
                                                                                                <option value="15429">Unflavored</option>
                                                                    </select>
                </div>
                    <div class="qty-field field">
                        <div class="input-group">
                            <div class="minus increment">-</div>
                            <input class="number" readonly="readonly" type="text" value="0" min="0" max="20" />
                            <div class="add increment">+</div>
                        </div>
                    </div>
                            </div>
        </div>

                   
    </div>
        <div class="space-break">&nbsp;</div>
</div>
                
                
                
                
                </div>                            <div class="section-separator"></div>
                <div class="section-inner-wrap reward-points-section">
                    <div class="reward-points-wrap">
                        <a href="#" data-featherlight="#features-list-rewards" class="points-label">Rewards Earning  <svg class="svg-icon" style="width: 1.3em; height: 1.3em; margin-bottom: -.3em;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-question-mark"></use><image style="width: 1.3em; height: 1.3em; margin-bottom: -.3em;" src="/store/skin/frontend/mnsv4/default/images/fallback/question-mark.png"></image>
                            </svg></a><div class="points-earned"><span class="points">0</span> Points</div>
                    </div>
                </div>
                <div class="section-inner-wrap add-to-cart-wrap">
                    
    <div class="add-to-cart">
        <div class="button-wrap">
            <button class="btn btn-lg btn-flat-blue aloading basic-load validate-rating" onclick="productAddToCartForm.submit(this,event); return false;"><span class="init"><svg class="svg-icon" style="width: 1.4em; height: 1.4em; max-width: 100%;">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-store-cart"></use>
                  <image style="  width: 1.4em; height: 1.4em; max-width: 100%;" src="/store/skin/frontend/mnsv4/default/images/fallback/store-cart.png" data-src="/store/skin/frontend/mnsv4/default/images/fallback/store-cart.png"></image>
              </svg>Add To Cart</span><span class="loading"><span class="svg-wrap"><svg class="svg-icon" style="width: 1.4em; height: 1.4em; max-width: 100%;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-update-white"></use><image style="width: 1.4em; height: 1.4em; max-width: 100%;" src="/store/skin/frontend/mnsv4/default/images/fallback/update-white.png"></image>
              </svg></span> Adding... </span>
            </button>
        </div>
        <div class="badge-wrap">
            <div class="mcafee">
                <!-- START MCAFEESECURE CODE -->
                <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.muscleandstrength.com"><img width="115" height="32" border="0" src="https://images.mcafeesecure.com/meter/www.muscleandstrength.com/22.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams"
                                                                                                                       oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>
                <!-- END MCAFEESECURE CODE -->
            </div>
        </div>

            </div>
                </div>
                        </form>
        </div>
    </div>
    <div class="product-aside">
                            </div>
            <div class="product-nutrition">
            <div class="section-title">Nutrition Info</div>
            <div class="section-inner-wrap">
                        <div class="panelSelector">
            <a name="GRP4143" id="GRP4143"></a>
            <form name="nutrinfo-selector" id="nutrinfo-selector">
                <select name="nutrition-info-selector" id="nutrition-info-selector">
                                            <option id="option-mt0300" value="nutrition-info-mt0300">120 Servings Blue Raspberry</option>
                                            <option id="option-mt0299" value="nutrition-info-mt0299">120 Servings Fruit Punch</option>
                                            <option id="option-mt0248" value="nutrition-info-mt0248">120 Servings Lemon Lime</option>
                                            <option id="option-mt0247" value="nutrition-info-mt0247">120 Servings Unflavored</option>
                                    </select>
            </form>
        </div>
        <div class="panel-wrap">
            <div class="show-more-mask">
            </div>
            <div class="nutrition-info-inner">
                
                    <div class="nutrition-panel" id="nutrition-info-mt0300">

                                                    <div class="nutrition-panel-inner">
                                <h4>120 Servings Blue Raspberry</h4>
                                <div class="serving thickline">
                                    Serving Size: 1 Scoop (2g)<br />
                                    Servings Per Container: About 120                                </div>
                                <div id="nutrition-info-table">
                                    <div class="item thinline">
                                        <div class="col-1 ">Amount Per Serving</div>
                                        <div class="col-2">Amt</div>
                                        <div class="col-3">%DV</div>
                                    </div>
                                    <div class="row">
                                        <div class="item hairline"><div class="col-1">Creatine HCl </div><div class="col-2">750mg</div><div class="col-3"> &dagger;</div></div>
<div class="item hairline"><div class="col-1">Free-acid Creatine </div><div class="col-2">750mg</div><div class="col-3"> &dagger;</div></div>
                                        <div class="item thickline-top">
                                            * % Daily Value is based on a 2,000 calorie diet. Your daily values may be higher or lower based on your calorie needs.<br />
                                            &dagger; Daily Value (DV) not established.
                                        </div>

                                    </div>
                                </div>
                            </div><!-- End nutritionPanelInner -->
                                                            <div class="ingredients-heading">Ingredients</div>
                                <div class="ingredients">Natural and Artificial Flavors, Citric Acid, Malic Acid, Acesulfame-Potassium, Sucralose, Silicon Dioxide, Calcium Silicate, FD&C Blue No. 1.</div>
                                                                                        <div class="ingredients-heading">Allergen Warning</div>
                                <div class="ingredients">Processed in a facility that processes milk, egg, wheat, soy, peanut, tree nut, fish and shellfish ingredients.</div>
                                                    
                        <span class="item-directions-note hide"><p>Mix 1 serving (1 scoop) with 8 oz. of water and consume two times daily. On workout days, consume immediately after your workout. Do not exceed 2 servings in a 24-hour period. Drink 8 to 10 glasses of water daily for general good health. Read the entire label before use and follow directions provided.</p></span>
                        <span class="item-warning-note hide"><p></p></span>
                    </div>

                                    
                    <div class="nutrition-panel" id="nutrition-info-mt0299">

                                                    <div class="nutrition-panel-inner">
                                <h4>120 Servings Fruit Punch</h4>
                                <div class="serving thickline">
                                    Serving Size: 1 Scoop (2g)<br />
                                    Servings Per Container: About 120                                </div>
                                <div id="nutrition-info-table">
                                    <div class="item thinline">
                                        <div class="col-1 ">Amount Per Serving</div>
                                        <div class="col-2">Amt</div>
                                        <div class="col-3">%DV</div>
                                    </div>
                                    <div class="row">
                                        <div class="item hairline"><div class="col-1">Creatine HCl </div><div class="col-2">750mg</div><div class="col-3"> &dagger;</div></div>
<div class="item hairline"><div class="col-1">Free-acid Creatine </div><div class="col-2">750mg</div><div class="col-3"> &dagger;</div></div>
                                        <div class="item thickline-top">
                                            * % Daily Value is based on a 2,000 calorie diet. Your daily values may be higher or lower based on your calorie needs.<br />
                                            &dagger; Daily Value (DV) not established.
                                        </div>

                                    </div>
                                </div>
                            </div><!-- End nutritionPanelInner -->
                                                            <div class="ingredients-heading">Ingredients</div>
                                <div class="ingredients">Natural and Artificial Flavors, Citric Acid, Malic Acid, Acesulfame-Potassium, Sucralose, Silicon Dioxide, Calcium Silicate, FD&C Blue No. 1.</div>
                                                                                        <div class="ingredients-heading">Allergen Warning</div>
                                <div class="ingredients">Processed in a facility that processes milk, egg, wheat, soy, peanut, tree nut, fish and shellfish ingredients.</div>
                                                    
                        <span class="item-directions-note hide"><p>Mix 1 serving (1 scoop) with 8 oz. of water and consume two times daily. On workout days, consume immediately after your workout. Do not exceed 2 servings in a 24-hour period. Drink 8 to 10 glasses of water daily for general good health. Read the entire label before use and follow directions provided.</p></span>
                        <span class="item-warning-note hide"><p></p></span>
                    </div>

                                    
                    <div class="nutrition-panel" id="nutrition-info-mt0248">

                                                    <div class="nutrition-panel-inner">
                                <h4>120 Servings Lemon Lime</h4>
                                <div class="serving thickline">
                                    Serving Size: 1 Scoop (1.7g)<br />
                                    Servings Per Container: About 120                                </div>
                                <div id="nutrition-info-table">
                                    <div class="item thinline">
                                        <div class="col-1 ">Amount Per Serving</div>
                                        <div class="col-2">Amt</div>
                                        <div class="col-3">%DV</div>
                                    </div>
                                    <div class="row">
                                        <div class="item hairline"><div class="col-1">Creatine HCl </div><div class="col-2">750mg</div><div class="col-3"> &dagger;</div></div>
<div class="item hairline"><div class="col-1">Free-acid Creatine </div><div class="col-2">750mg</div><div class="col-3"> &dagger;</div></div>
                                        <div class="item thickline-top">
                                            * % Daily Value is based on a 2,000 calorie diet. Your daily values may be higher or lower based on your calorie needs.<br />
                                            &dagger; Daily Value (DV) not established.
                                        </div>

                                    </div>
                                </div>
                            </div><!-- End nutritionPanelInner -->
                                                            <div class="ingredients-heading">Ingredients</div>
                                <div class="ingredients">Other Ingredients: Natural Flavors, Citric Acid, Acesulfame-Potassium, Calcium Silicate, Silicon Dioxide, Sucralose, Maltodextrin, Tri-Calcium Phosphate, FD&C Yellow No. 5, FD&C Blue No. 1.</div>
                                                                                        <div class="ingredients-heading">Allergen Warning</div>
                                <div class="ingredients">Processed in a facility that processes milk, egg, wheat, soy, peanut, tree nut, fish and shellfish ingredients.</div>
                                                    
                        <span class="item-directions-note hide"><p>Mix 1 serving (1 scoop) with 8 oz. of water and consume two times daily. On workout days, consume immediately after your workout. Do not exceed 2 servings in a 24-hour period. Drink 8 to 10 glasses of water daily for general good health. Read the entire label before use and follow directions provided.</p></span>
                        <span class="item-warning-note hide"><p></p></span>
                    </div>

                                    
                    <div class="nutrition-panel" id="nutrition-info-mt0247">

                                                    <div class="nutrition-panel-inner">
                                <h4>120 Servings Unflavored</h4>
                                <div class="serving thickline">
                                    Serving Size: 1 Scoop (1.7g)<br />
                                    Servings Per Container: About 120                                </div>
                                <div id="nutrition-info-table">
                                    <div class="item thinline">
                                        <div class="col-1 ">Amount Per Serving</div>
                                        <div class="col-2">Amt</div>
                                        <div class="col-3">%DV</div>
                                    </div>
                                    <div class="row">
                                        <div class="item hairline"><div class="col-1">Creatine HCl </div><div class="col-2">750mg</div><div class="col-3"> &dagger;</div></div>
<div class="item hairline"><div class="col-1">Free-acid Creatine </div><div class="col-2">750mg</div><div class="col-3"> &dagger;</div></div>
                                        <div class="item thickline-top">
                                            * % Daily Value is based on a 2,000 calorie diet. Your daily values may be higher or lower based on your calorie needs.<br />
                                            &dagger; Daily Value (DV) not established.
                                        </div>

                                    </div>
                                </div>
                            </div><!-- End nutritionPanelInner -->
                                                            <div class="ingredients-heading">Ingredients</div>
                                <div class="ingredients">Other Ingredients: Natural Flavor, Calcium Silicate, Silicon Dioxide, Acesulfame-Potassium, Sucralose.</div>
                                                                                        <div class="ingredients-heading">Allergen Warning</div>
                                <div class="ingredients">Processed in a facility that processes milk, egg, wheat, soy, peanut, tree nut, fish and shellfish ingredients.</div>
                                                    
                        <span class="item-directions-note hide"><p>Mix 1 serving (1 scoop) with 8 oz. of water and consume two times daily. On workout days, consume immediately after your workout. Do not exceed 2 servings in a 24-hour period. Drink 8 to 10 glasses of water daily for general good health. Read the entire label before use and follow directions provided.</p></span>
                        <span class="item-warning-note hide"><p></p></span>
                    </div>

                                    

            </div>
            <div class="directions-warning">
                <div id="directions">
                    <div class="title">Directions</div>
                    <div id="directions-note" class="smallerFont"></div>
                </div>
                <div id="warnings">
                    <div class="title">Warnings</div>
                    <div id="warning-note" class="smallerFont"></div>
                </div>
            </div>
        </div>

                <div class="expand-wrap">
                    <div class="expand-btn btn btn-flat-blue btn-small">Expand Info</div>
                </div>
            </div>
        </div>
    </div>
<div class="main-content continued">
    <div class="recommended-products-section" style="display:none;">
        <div class="recommended-products-header-wrap">
            <div class="section-title">Recommended For You</div>
            <div class="expand-section-btn disable-swiper-btn" data-items="8">View All (8)</div>
        </div>
        <div class="recommended-products-list recommended-swiper-container">
                <div class="strandsRecs swiper-wrapper"
    tpl="prod_4"
        item="15588"    ></div>
        </div>
        <div class="recommended-pagination-wrap">
            <button class="pagination-view-all disable-swiper-btn" data-items="8">View All (8)</button>
            <div class="recommended-pagination">
            </div>
        </div>
        <div class="recommended-products-prev arrow-prev arrow-btn">&lsaquo;</div>
        <div class="recommended-products-next arrow-next arrow-btn">&rsaquo;</div>

    </div>
    <div class="product-information-section">
        <div class="section-title">Product Information</div>
        <div class="section-inner-wrap">
                                                <!--<h3 class="bordered clearBoth">Creactor Product Details</h3>-->
    <div class="std">
        <style type="text/css">
.creactorBlue {color:#009bb4;}
</style>

<p><img title="MuscleTech Creactor" src="https://cdn.muscleandstrength.com/store/media/wysiwyg/Products/C/CreactorHeader.jpg" alt="MuscleTech Creactor is a free-acid creatine formula" /></p>
<h3 class="hstyle-three creactorBlue">Max Potency Free-Acid Creatine Formula</h3>
<p>Creactor&trade; is a scientifically advanced creatine that delivers a potent, micro-dose of creatine. Each serving delivers 750mg of 100% ultra-pure, laboratory-tested creatine hydrochloride (creatine HCl). Plus 750mg of free-acid creatine &mdash; the purest form of creatine, free of acids and salts. This powerful never-before-seen ratio of creatine molecules delivers an ehnanced creatine experience!*</p>

<h5 class="hstyle-three creactorBlue">Amplified ATP Synthesis</h5>
<p>Creactor™ rapidly enhances your muscle cells’ ability to regenerate Adenosine Triphosphate (ATP).* ATP is your primary source of anaerobic energy, so you can recover faster between sets. During high intensity training, ATP from muscle stores is utilized first. Once this store has been diminished, you need to start generating your own ATP.  At high intensities of exercise, this ATP production occurs with the breakdown of phosphocreatine in your muscles.</p>

<p><iframe width="560" height="315" src="https://www.youtube.com/embed/0ylfuR-ulnI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>

<p>As we only have a set amount of creatine in our muscles, this method of ATP production runs out rather fast too – and results in fatigue and eventually muscle failure. That’s where Creactor™ comes into play. The powerful creatine molecules in Creactor™ are changed into a molecule called phosphocreatine which serves as a storage reservoir for regenerating ATP. With higher ATP levels, you’ll be able to train harder and recover faster and that means bigger and stronger gains!*</p>

<p class="acenter"><img src="https://cdn.muscleandstrength.com/store/media/wysiwyg/Products/C/PhosphocreatineGraphic.jpg" alt="Creactor yields Phosphocreatine" /></p>
<p class="caption nomargin">CREACTOR™ contains a unique combination of free-acid creatine and creatine HCL molecules that maximize levels of phosphocreatine, which then reacts with ADP to form ATP during exercise.</p>

<h5 class="hstyle-three creactorBlue">Ehnanced Solubility with Creactor</h5>
<div class="row">
  <div class="qg-half">
    <p><img src="https://cdn.muscleandstrength.com/store/media/wysiwyg/Products/C/CreactorShakerGraphic.jpg" alt="Solubility of Creactor" /></p>
      </div>

  <div class="qg-half">
    <p>Both forms of creatine in Creactor™ are engineered for increased solubility. You’ll notice this the very first time you mix a delicious serving of Creactor™ in water. It mixes almost instantly with no sedimentation so that no particles are sitting in the bottom of the glass. With Creactor™, you get high-quality, 100% ultra-pure creatine HCl and free-acid creatine with absolutely zero fillers, carbs, sugar or fat.*</p>
  </div>
</div>

<h5 class="hstyle-three creactorBlue">Boosts Gains in Size & Strength and Speeds Recovery</h5>
<p>The key ingredient in Creactor™ is clinically proven to jack up muscle strength, increase performance and enhance muscle size with just 2 super-concentrated scoops a day.*  Research published in the Journal of Applied Physiology found that dosages as low as 3 grams of creatine daily for about a month can saturate muscles. There is also no need to cycle and it won’t cause stomach bloating!*</p>

<h3 class="acenter hstyle-three creactorBlue">The Creactor Advantage</h3>
<p><img title="Creactor Advantage" src="https://cdn.muscleandstrength.com/store/media/wysiwyg/Products/C/AdvantageGraphs.jpg" alt="A better creatine: More Servings, More Active Ingredients" /></p>    </div>
                    </div>
    </div>
    

<div class="product-reviews-section">
    <span class="anchor" id="reviews"></span>
    <div class="section-title">Reviews</div>
    <div class="section-inner-wrap">
        <div class="overall-rating-subsection">
            <div class="subsection-inner-wrap">
                <div class="subsection-title">Overall Rating</div>
                <div class="rate-stars">
                    <div class="rating-box">
                        <div class="star-overlay"></div>
                        <div class="rating" style="width:92%;"></div>
                    </div>
                    <span class="overall-rating-label">4.6 out of 5 stars</span>
                </div>
                <div class="review-data-summary">
                    <div class="item">
                        <svg style="width:.9em;height:.9em; margin-bottom: -0.1em; margin-right:-.1em;">
                            <!--suppress CheckEmptyScriptTag -->
                            <use xlink:href="#icon-create-blue"/>
                            <!--suppress CheckEmptyScriptTag -->
                            <image style="width:.9em;height:.9em; margin-bottom: -0.1em; margin-right:-.1em;" class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/create-blue.png"/>
                        </svg>
                        Reviews (271)
                    </div>
                    <div class="item">
                        <svg style="width:.95em;height:.95em; margin-bottom: -0.1em; margin-right:-.1em;">
                            <!--suppress CheckEmptyScriptTag -->
                            <use xlink:href="#icon-verified-buyer"/>
                            <!--suppress CheckEmptyScriptTag -->
                            <image style="width:.95em;height:.95em; margin-bottom: -0.1em; margin-right:-.1em;" class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                        Verified Buyers (254)
                    </div>
                </div>
            </div>
        </div>
        <div class="review-graph-subsection">
            <div class="subsection-inner-wrap">
                <div class="subsection-title">Review Graph</div>
                <ul class="bar-graph-wrap">
                                                                <li>
                            <div class="stars">5 <span class="upper smaller">star</span></div>
                            <div class="bar-graph">
                                <div class="bar" style="width:71%"></div>
                            </div>
                            <div class="percentage">71%</div>
                        </li><br>
                                            <li>
                            <div class="stars">4 <span class="upper smaller">star</span></div>
                            <div class="bar-graph">
                                <div class="bar" style="width:21%"></div>
                            </div>
                            <div class="percentage">21%</div>
                        </li><br>
                                            <li>
                            <div class="stars">3 <span class="upper smaller">star</span></div>
                            <div class="bar-graph">
                                <div class="bar" style="width:6%"></div>
                            </div>
                            <div class="percentage">6%</div>
                        </li><br>
                                            <li>
                            <div class="stars">2 <span class="upper smaller">star</span></div>
                            <div class="bar-graph">
                                <div class="bar" style="width:1%"></div>
                            </div>
                            <div class="percentage">1%</div>
                        </li><br>
                                            <li>
                            <div class="stars">1 <span class="upper smaller">star</span></div>
                            <div class="bar-graph">
                                <div class="bar" style="width:1%"></div>
                            </div>
                            <div class="percentage">1%</div>
                        </li><br>
                                    </ul>
            </div>
        </div>
                            <div class="top-rated-flavors-subsection">
                <div class="subsection-inner-wrap">
                    <div class="subsection-title">Top Rated Flavors</div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                                    
                            <li class="item ">
                                <div class="rate-stars">
                                    <div class="rating-box">
                                        <div class="star-overlay"></div>
                                        <div class="rating" style="width:95%;"></div>
                                    </div>
                                </div>
                                <span class="option-label">Fruit Punch (4.8/5)</span>
                            </li>
                                                    
                            <li class="item ">
                                <div class="rate-stars">
                                    <div class="rating-box">
                                        <div class="star-overlay"></div>
                                        <div class="rating" style="width:94%;"></div>
                                    </div>
                                </div>
                                <span class="option-label">Blue Raspberry (4.7/5)</span>
                            </li>
                                                    
                            <li class="item ">
                                <div class="rate-stars">
                                    <div class="rating-box">
                                        <div class="star-overlay"></div>
                                        <div class="rating" style="width:93%;"></div>
                                    </div>
                                </div>
                                <span class="option-label">Lemon Lime (4.7/5)</span>
                            </li>
                                                    
                            <li class="item ">
                                <div class="rate-stars">
                                    <div class="rating-box">
                                        <div class="star-overlay"></div>
                                        <div class="rating" style="width:91%;"></div>
                                    </div>
                                </div>
                                <span class="option-label">Unflavored (4.6/5)</span>
                            </li>
                                                    
                            <li class="item ">
                                <div class="rate-stars">
                                    <div class="rating-box">
                                        <div class="star-overlay"></div>
                                        <div class="rating" style="width:90%;"></div>
                                    </div>
                                </div>
                                <span class="option-label">Icy Rocket Freeze (4.5/5)</span>
                            </li>
                                                <div class="slist-more">Show More +</div>
                        <div class="slist-less">Show Less -</div>
                    </ul>
                </div>
            </div>
                <div class="review-utility-bar">
            <a rel="nofollow" href='javascript:void(0);' class="btn btn-flat-blue btn-style1"
               onclick='reviews.inlineReview(15588, 0); return false;'>
                <svg style="width:1em;height:1em;margin-bottom: -0.2em;">
                    <use xlink:href="#icon-create"/>
                    <image style="width:1em;height:1em;margin-bottom: -0.2em;"
                           src="/store/skin/frontend/mnsv4/default/images/fallback/create.png"/>
                </svg>
                Write Review</a>
        </div>
    </div>
</div>

<div class="form-loading-message">
    <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
</div>
<div class="inline-review" style="display:none;">
</div>

<div class="refine-search-wrap" id="toolbar-target">
    <div class="mobile-header">
        <label class="heading">Sort &amp; Filter</label>
        <button class="caret-btn">
            <span class="s-caret">&rsaquo;</span>
        </button>
    </div>
<div class="review-sorting-filtering" data-product-id="15588">
    <div class="inner-wrap">
        <div class="sort-by section">
            <div class="wrap">
                <ul class="simple-radio list-style review-sorting">
                    <li>
                        <input type="radio" name="sort-group" value="recent" />
                        <div class="radio-check"><span class="yes"><span class="icon-check"></span></span></div>
                        Most Recent
                    </li>
                    <li class="checked">
                        <input type="radio" name="sort-group" value="helpful" checked="checked" />
                        <div class="radio-check"><span class="yes"><span class="icon-check"></span></span></div>
                        Most Helpful
                    </li>
                </ul>
            </div>
        </div>
        <div class="filter-by section">
            <div class="wrap">
                <ul class="simple-radio list-style review-filtering-1">
                    <li class="checked">
                        <input type="radio" name="filter-group" value="all" checked="checked" />
                        <div class="radio-check"><span class="yes"><span class="icon-check"></span></span></div>
                        All Reviews (271)
                    </li>
                    <li>
                        <input type="radio" name="filter-group" value="verified" />
                        <div class="radio-check"><span class="yes"><span class="icon-check"></span></span></div>
                        Verified Buyers (254)
                    </li>
                </ul>
            </div>
        </div>
        <div class="star-filter section">
          <div class="wrap">
                <input type="text" id="star-slider" name="star-slider" value="" />
          </div>
        </div>
    </div>
    <div id='loadingmessage' class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>
</div>
<div class="allReviews">
    <div class="review-wrapper" data-pagesize="10">
                                <div class="rID-46589 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:100%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:100%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Fruit Punch</span>
                    </li>
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">Abhay Garg</div>
        <div class="user-badge-wrap">
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">Next level supplement , amazing pump for whole day . I will trying continue <a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46589">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46589"
                    onclick="reviews.helpfulReview(46589, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46589"
                    onclick="reviews.helpfulReview(46589, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46589"
                    onclick="reviews.undoReviewVote(46589); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-25 04:50:10Z">2016-11-25 04:50:10Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46589">
                Comment
            </button>
            <button class="report" id="review-report-link-46589" data-rid="46589">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46580 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:100%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:100%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Blue Raspberry</span>
                    </li>
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">John C</div>
        <div class="user-badge-wrap">
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">Great flavor! Good definition improvement of muscle tone, especially in arms<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46580">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46580"
                    onclick="reviews.helpfulReview(46580, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46580"
                    onclick="reviews.helpfulReview(46580, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46580"
                    onclick="reviews.undoReviewVote(46580); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-25 02:55:06Z">2016-11-25 02:55:06Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46580">
                Comment
            </button>
            <button class="report" id="review-report-link-46580" data-rid="46580">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46550 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:100%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:100%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Fruit Punch</span>
                    </li>
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">CaptainW</div>
        <div class="user-badge-wrap">
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">Great product, amazing flavor. Strongly recommended.<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46550">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46550"
                    onclick="reviews.helpfulReview(46550, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46550"
                    onclick="reviews.helpfulReview(46550, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46550"
                    onclick="reviews.undoReviewVote(46550); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-24 22:23:06Z">2016-11-24 22:23:06Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46550">
                Comment
            </button>
            <button class="report" id="review-report-link-46550" data-rid="46550">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46518 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:80%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:80%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Lemon Lime</span>
                    </li>
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">Alex L</div>
        <div class="user-badge-wrap">
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">great product easy to mix with water or any of your favorite drink<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46518">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46518"
                    onclick="reviews.helpfulReview(46518, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46518"
                    onclick="reviews.helpfulReview(46518, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46518"
                    onclick="reviews.undoReviewVote(46518); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-24 14:49:40Z">2016-11-24 14:49:40Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46518">
                Comment
            </button>
            <button class="report" id="review-report-link-46518" data-rid="46518">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46482 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:100%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:100%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Blue Raspberry</span>
                    </li>
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:100%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Unflavored</span>
                    </li>
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">Chris  S</div>
        <div class="user-badge-wrap">
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">Tastes great, works really well.<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46482">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46482"
                    onclick="reviews.helpfulReview(46482, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46482"
                    onclick="reviews.helpfulReview(46482, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46482"
                    onclick="reviews.undoReviewVote(46482); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-24 03:31:15Z">2016-11-24 03:31:15Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46482">
                Comment
            </button>
            <button class="report" id="review-report-link-46482" data-rid="46482">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46431 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:100%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">basem s</div>
        <div class="user-badge-wrap">
                                </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">i love it because it’s almost the only product which doesn’t save the water inside the body<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46431">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46431"
                    onclick="reviews.helpfulReview(46431, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46431"
                    onclick="reviews.helpfulReview(46431, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46431"
                    onclick="reviews.undoReviewVote(46431); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-23 12:52:32Z">2016-11-23 12:52:32Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46431">
                Comment
            </button>
            <button class="report" id="review-report-link-46431" data-rid="46431">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46391 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:100%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:100%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Lemon Lime</span>
                    </li>
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">Milton B</div>
        <div class="user-badge-wrap">
                            <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;">
                            <use xlink:href="#icon-goal-build-muscle"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em;" class="icon" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/goal-build-muscle.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Build Muscle</div>
                </div>
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">Lots of servings for a cheap price and great effects<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46391">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46391"
                    onclick="reviews.helpfulReview(46391, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46391"
                    onclick="reviews.helpfulReview(46391, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46391"
                    onclick="reviews.undoReviewVote(46391); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-22 23:31:30Z">2016-11-22 23:31:30Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46391">
                Comment
            </button>
            <button class="report" id="review-report-link-46391" data-rid="46391">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46238 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:100%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">zolfikar i</div>
        <div class="user-badge-wrap">
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review"> Blue Raspberry taste amazing, great results<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46238">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46238"
                    onclick="reviews.helpfulReview(46238, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46238"
                    onclick="reviews.helpfulReview(46238, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46238"
                    onclick="reviews.undoReviewVote(46238); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-20 18:25:36Z">2016-11-20 18:25:36Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46238">
                Comment
            </button>
            <button class="report" id="review-report-link-46238" data-rid="46238">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46186 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:80%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:100%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Unflavored</span>
                    </li>
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">thomas s</div>
        <div class="user-badge-wrap">
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">Creactor is a great value and works good. Like the unflavored so I mix it with apple juice.<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46186">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46186"
                    onclick="reviews.helpfulReview(46186, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46186"
                    onclick="reviews.helpfulReview(46186, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46186"
                    onclick="reviews.undoReviewVote(46186); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-19 19:12:17Z">2016-11-19 19:12:17Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46186">
                Comment
            </button>
            <button class="report" id="review-report-link-46186" data-rid="46186">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>                                <div class="rID-46087 customer-review-wrap">
    <div class="review-rating-wrap">
        <div class="overall rating-wrap">
            <div class="rating-label-wrap">
                <span class="rating-label">Overall Rating</span>
            </div>
            <div class="rate-stars">
                <div class="rating-box">
                    <div class="star-overlay"></div>
                    <div class="rating" style="width:100%;"></div>
                </div>
            </div>
        </div>
                    <ul class="rating-item-wrap slist-on slist-3count ">
                                    <li class="item">
                        <div class="rate-stars">
                            <div class="rating-box">
                                <div class="star-overlay"></div>
                                <div class="rating" style="width:100%;"></div>
                            </div>
                        </div>
                        <span class="option-label">Unflavored</span>
                    </li>
                                <div class="slist-more">Show More +</div>
                <div class="slist-less">Show Less -</div>
            </ul>
            </div>
    <div class="review-user-wrap">
        <div class="user-image">
            <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/user-img.jpg" alt="User Image"/>
        </div>
        <div class="user-name">meshalrayes</div>
        <div class="user-badge-wrap">
                                        <div class="user-badge">
                    <div class="badge-icon">
                        <svg style="width:1.5em;height:1.5em; margin-bottom: -0.3em;  ">
                            <use xlink:href="#icon-verified-buyer"/>
                            <image style="width:1.5em;height:1.5em; margin-bottom: -0.3em; " class="icon"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/verified-buyer.png"/>
                        </svg>
                    </div>
                    <div class="badge-label">Verified Buyer</div>
                </div>
                    </div>
    </div>
    <div class="review-content-wrap">
                <div class="user-review">I like the HCL creatine more than the monohydrate cause it doesn&#39;t make water retention and dissolve very well<a
                href="#results-disclaimer">*</a>
        </div>
    </div>
    <div class="helpful-wrap" id="review-helpful-46087">
        <div class="question">Was this helpful?</div>
        <div class="response-wrap">You found this <span class="not-helpful">not </span>helpful</div>
        <div class="form">
            <button class="choice" id="review-helpful-link-46087"
                    onclick="reviews.helpfulReview(46087, 1); return false;">
                Yes
            </button>
            <button class="choice" id="review-helpful-link-46087"
                    onclick="reviews.helpfulReview(46087, 0); return false;">
                No
            </button>
            <button class="response-wrap change" id="review-vote-undo-link-46087"
                    onclick="reviews.undoReviewVote(46087); return false;">Undo
            </button>
        </div>
        <div class="helpful-data">0            of 0 found this helpful
        </div>
    </div>
    <div class="review-meta-wrap">
        <abbr class="date timeago" title="2016-11-18 10:19:28Z">2016-11-18 10:19:28Z</abbr>
        <div class="meta-button-wrap">
            <button class="open-comments" id="review-comment-link-46087">
                Comment
            </button>
            <button class="report" id="review-report-link-46087" data-rid="46087">Report
            </button>
        </div>
    </div>
    <div class="loading-message">
        <img src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>
</div>            </div>

    <div class="viewmore-loadingmessage" id='viewmore-loadingmessage'>
        <img style="width:2em;" src='https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/ajax-loader.gif'/>
    </div>

    <div class="button-columns">
        <a class="btn btn-flat-blue btn-style1 btn-right" id="load-more-reviews" onclick="reviews.loadMoreReviews(15588, 'product'); return false;" href="" data-pagesize="10" data-pageno="1" data-maxpages="28">View 10 More Reviews</a>        <a class="btn ellipsis btn-style1 btn-flat-white btn-left" href="/store/reviews/brands/muscletech/creactor.html">View All Reviews</a>
    </div>
</div>

<div id="results-disclaimer"> * Muscle &amp; Strength does not imply any medical claims from this review. There are no guarantees of specific results and results may vary.</div>

<script type="text/javascript">
jQuery(function() {
  reviews.loadMetadata('.review-wrapper');
  reviews.loadComments('.review-wrapper');
});
</script>
</div>
<div class="main-content end">
    <div class="fdaWarning smaller margBot20">
        * These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.
    </div>
</div>

        <script type="text/javascript">
        function catalog_product_view_rendering_function(rec_info) {
            var recsHtml = '';
            jQuery(rec_info.recommendations).each(function() {
                var metaProps = this.metadata.properties;
                var deal = '';
                if(typeof this.metadata.properties.promo_label != 'undefined'){ 
                    deal = '<div class="recommended-product-deal"><span class="label success">' + this.metadata.properties.promo_label + '</span></div>';
                }
                var onclick = "SBS.Tracking.onRecClick('"+this.itemId+"','"+rec_info.tpl+"','"+rec_info.rrq+"');return true;"
                recsHtml += '<a class="recommended-product swiper-slide" href="' + this.metadata.link + '" onclick="' + onclick + '"> \
                    <div class="recommended-product-inner-wrap"> \
                        <img src="' + metaProps.large_thumbnail_link[0] + '" /> \
                        <div class="recommended-product-name"> \
                            ' + this.metadata.name + ' \
                        </div> \
                        <div class="recommended-product-review-wrap"> \
                            <div class="product-rating-wrap"> \
                              <div class="rating-box"> \
                                <div class="star-overlay"></div> \
                                <div class="rating" style="width:' + metaProps.review_rating[0] + '%;"></div> \
                              </div> \
                            </div>\
                          </div> \
                        <div  class="recommended-product-price"> \
                            ' + this.metadata.properties.price_range + ' \
                         </div> \
                         ' + deal + '\
                    </div> \
                </a>';
            });
            jQuery('.strandsRecs').append(recsHtml);
            jQuery('.recommended-products-section').show();
            recommendedSwiper.update(true);
            jQuery(window).on('load resize', function () {
               equalHeight({
                  child: '.recommended-product .recommended-product-inner-wrap',
                  parent: '.recommended-product',
                  style: 'min-height'
               });
            });
        }
        </script>
        <script type="text/javascript">
    //<![CDATA[
    var productAddToCartForm = new VarienForm('product_addtocart_form');
    productAddToCartForm.submit = function (button, event, url) {
        jQuery('.add-to-cart button').removeClass('validation-failed');
        jQuery('.option-field').removeAttr('style');

        var items = jQuery('.qty-field').find(jQuery('.number').filter(function () {
            return this.value !== '0';
        })).closest('.row').find('.option-field select');

        var fail = 0;
        for (j = 0; j < items.length; j++) {
            if (jQuery(items[j]).val() === '-1') {
                jQuery(items[j]).parent('.sod_select').css('border', '1px solid red');
                fail++;
            }
        }

        if (fail > 0) {
            jQuery('.add-to-cart button').addClass('validation-failed');
            event.preventDefault();
            event.stopPropagation();
            return false;
        }

        if (this.validator.validate()) {
            var form = this.form;
            var oldUrl = form.action;

            if (url) {
                form.action = url;
            }
            var e = null;
            jQuery('.flavor_picker').each(function (k, v) {
                if (v.selectedIndex > 0) {
                    var qtyField = jQuery(v).parents('.row').find('.number');
                    jQuery(qtyField).attr('name', 'super_group[' + jQuery(v).val() + ']')
                }
            });
            try {
                this.form.submit();
            } catch (e) {
            }
            this.form.action = oldUrl;
            if (e) {
                throw e;
            }

            if (button && button !== 'undefined') {
                button.disabled = true;
            }
        }
    }.bind(productAddToCartForm);

    productAddToCartForm.submitLight = function (button, url) {
        if (this.validator) {
            var nv = Validation.methods;
            delete Validation.methods['required-entry'];
            delete Validation.methods['validate-one-required'];
            delete Validation.methods['validate-one-required-by-name'];
            if (this.validator.validate()) {
                if (url) {
                    this.form.action = url;
                }
                this.form.submit();
            }
            Object.extend(Validation.methods, nv);
        }
    }.bind(productAddToCartForm);
    //]]>
</script>
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');
    // Insert Your Custom Audience Pixel ID below.
    fbq('init', '664621053675457');
    // If you have a separate add to cart page that is loaded.
    fbq('track', 'ViewContent', {
        content_name: 'Creactor',
        content_ids: ['GRP4143'],
        content_type: 'product_group'
    });
</script>
<script type="text/javascript">
    var lifetime = 3600;
    var expireAt = Mage.Cookies.expires;
    if (lifetime > 0) {
        expireAt = new Date();
        expireAt.setTime(expireAt.getTime() + lifetime * 1000);
    }
    Mage.Cookies.set('external_no_cache', 1, expireAt);
</script>


<script type="text/javascript">

    var CAPTION_POINT = 'Points';
    var CAPTION_POINTS = 'Points';
    var CAPTION_YOU_WILL_SPEND = 'You Will Spend';
    var CAPTION_WITH = 'with';
    var CAPTION_CANNOT_USE_POINTS = "You cannot use points until you login or create a new account.";
    var CAPTION_NOT_ENOUGH_POINTS = "You don't have enough points to use this redemption rule.";
    var CAPTION_REFRESHING_CART = 'Refreshing cart, please wait..';

</script>
<script type="text/javascript" >
    document.observe("dom:loaded", function() {
        Validation.add(
        'validate-can_use_points', 
        CAPTION_CANNOT_USE_POINTS, 
        function(rule_id) {
            if(rule_id == "") {
                return true;
            } else {
                var can_use = rule_options[rule_id]['can_use_rule']; 
                return can_use;
            }
        }, 
        {}
    );
    
        Validation.add(
        'validate-has_enough_points', 
        CAPTION_NOT_ENOUGH_POINTS, 
        function(rule_id) {
            if(rule_id == "") {
                return true;
            } else {
                var can_use = rule_options[rule_id]['can_use_rule'];
                var amt = rule_options[rule_id]['points_amt']; 
                var curr = rule_options[rule_id]['points_currency_id'];
                
                var qty = parseInt($('qty').getValue());
                // fix NaN or bad value
                if( false == (qty > 0) )
                    qty = 1;
                
                var uses = parseInt($('redemption_rule_uses').getValue());
                // fix NaN or bad value
                if( false == (uses > 0) )
                    uses = 1;
                
                if (customer_points) {
                    if(customer_points[curr] >= qty*amt*uses) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return true;
                }
            }
        }, 
        {}
    );        
    });

</script>

            
        </div>
        <nav id="menu">
            <ul>

                <li>
                    <span>
                        <svg class="icon">
                            <use xlink:href="#icon-store-shop-bag"/>
                            <image class="icon" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/store-shop-bag.png"/>
                        </svg>
                        
                   Store
                    </span>
                    <ul class="sub-menu">
                        <li>
                            <a href="/store/">Go to Store</a></li>
                        
                        <li>
                            <span>
                               Shop by Category
                                
                            </span>

                            <ul class="sub-menu">

                                <li><a href="/store/category/accessories.html">Accessories</a></li>
                                <li><a href="/store/category/amino-acids.html">Amino Acids</a></li>
                                <li><a href="/store/category/antioxidants.html">Antioxidants</a></li>
                                <li><a href="/store/category/bars.html">Bars</a></li>
                                <li><a href="/store/category/bodybuilding-supplies.html">Bodybuilding Supplies</a></li>
                                <li><a href="/store/category/books-and-dvds.html">Books &amp; DVDs</a></li>
                                <li><a href="/store/category/brain-enhancers.html">Brain Enhancement</a></li>
                                <li><a href="/store/category/carbohydrates.html">Carbohydrates</a></li>
                                <li><a href="/store/category/clearance.html">Clearance</a></li>
                                <li><a href="/store/category/clothing.html">Clothing</a></li>
                                <li><a href="/store/category/creatine.html">Creatine</a></li>
                                <li><a href="/store/category/energy-boosters.html">Energy Boosters</a></li>
                                <li><a href="/store/category/equipment.html">Equipment</a></li>
                                <li><a href="/store/category/fat-loss.html">Fat Loss</a></li>
                                <li><a href="/store/category/free-samples.html">Free Samples</a></li>
                                <li><a href="/store/category/glutamine.html">Glutamine</a></li>
                                <li><a href="/store/category/growth-hormone.html">Growth Hormone Boosters</a></li>
                                <li><a href="/store/category/general-health.html">Health &amp; Wellness</a></li>
                                <li><a href="/store/category/oils-efas.html">Healthy Oils/EFAs</a></li>
                                <li><a href="/store/category/intra-workout.html">Intra Workout</a></li>
                                <li><a href="/store/category/joint-health.html">Joint Health</a></li>
                                <li><a href="/store/category/liver-health.html">Liver Health</a></li>
                                <li><a href="/store/category/meal-replacements.html">Meal Replacements</a></li>
                                <li><a href="/store/category/mood.html">Mood Enhancers</a></li>
                                <li><a href="/store/category/stacks.html">Multi-Buy Bundles</a></li>
                                <li><a href="/store/category/nitric-oxide.html">Nitric Oxide (NO2)</a></li>
                                <li><a href="/store/category/other-muscle-builders.html">Other Muscle Builders</a></li>
                                <li><a href="/store/category/post-workout.html">Post-Workout</a></li>
                                <li><a href="/store/category/pre-workout.html">Pre-Workout</a></li>
                                <li><a href="/store/category/protein.html">Protein</a></li>
                                <li><a href="/store/category/ready-to-drink.html">Ready-to-Drink (RTD)</a></li>
                                <li><a href="/store/category/recovery.html">Recovery</a></li>
                                <li><a href="/store/category/sexual-health.html">Sexual Health</a></li>
                                <li><a href="/store/category/sleep.html">Sleep Enhancement</a></li>
                                <li><a href="/store/category/snack-foods.html">Snack Foods</a></li>
                                <li><a href="/store/category/stress-reduction.html">Stress Reduction</a></li>
                                <li><a href="/store/category/stacks.html">Stacks</a></li>
                                <li><a href="/store/category/testosterone.html">Test Boosters</a></li>
                                <li><a href="/store/category/vitamins-minerals.html">Vitamins/Minerals</a></li>
                                <li><a href="/store/category/weight-gainers.html">Weight Gainers</a></li>
                                <li><a href="/store/category/women.html">Women's Products</a></li>
                                <li><a href="/store/category/other.html">Other Products</a></li>
                            </ul>



                        </li>
                        <li>
                            <span>
                               Shop by Brand
                            </span>
                            <ul class="sub-menu">
                            <li><a href="/store/brands/bpi-sports">BPI Sports</a></li>
                            <li><a href="/store/brands/optimum-nutrition">Optimum Nutrition</a></li>
                            <li><a href="/store/brands/nutrex">Nutrex</a></li>
                            <li><a href="/store/brands/musclepharm">MusclePharm</a></li>
                            <li><a href="/store/brands/cutler-nutrition">Cutler</a></li>
                            <li><a href="/store/brands/muscletech">MuscleTech</a></li>
                            <li><a href="/store/brands/dymatize">Dymatize</a></li>
                            <li><a href="/store/brands/cellucor">Cellucor</a></li>
                            <li><a href="/store/brands/allmax">Allmax</a></li>
                            <li><a href="/store/brands/fitmiss">FitMiss</a></li>
                            <li><a href="/store/brands/bsn">BSN</a></li>
                            <li><a href="/store/brands/prosupps">ProSupps</a></li>
                            <li><a href="/store/brands">More +</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>
                               Shop by Goal
                               
                            </span>
                            <ul class="sub-menu">
                                <li><a href="/store/goals/build-muscle">Build Muscle</a></li>
                                <li><a href="/store/goals/lose-fat">Lose Fat</a></li>
                                <li><a href="/store/goals/improve-workout">Improve Workout</a></li>
                                <li><a href="/store/goals/health-wellness">Health &amp; Wellness</a></li>
                                <li><a href="/store/goals/improve-sports">Improve Sports</a></li>
                                <li><a href="/store/goals/increase-energy">Increase Energy</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/store/promos.html">Deals &amp; Coupons</a></li>
                        <li>
                            <span>Top 50 Products</span>
                            <ul class="sub-menu">
                                <li><a href="/store/top-sellers">View All Top 50 Products</a></li>
                                <li><a href="/store/top-brands">Top 20 Brands</a></li>
                                <li><a href="/store/best-protein-supplements">Best Protein Powders</a></li>
                                <li><a href="/store/best-fat-burners">Best Fat Burners</a></li>
                                <li><a href="/store/best-pre-workouts">Best Pre-Workouts</a></li>
                                <li><a href="/store/best-protein-bars">Best Protein Bars</a></li>
                                <li><a href="/store/best-bcaas">Best BCAAs</a></li>
                                <li><a href="/store/best-creatine">Best Creatine</a></li>
                                <li><a href="/store/best-multivitamins">Best Multivitamins</a></li>
                                <li><a href="/store/best-test-boosters">Best Test Boosters</a></li>
                                <li><a href="/store/best-clothing">Best Fitness Clothing</a></li>
                                <li><a href="/store/best-weight-gainers">Best Weight Gainers</a></li>
                                <li><a href="/store/best-womens">Best Women's Products</a></li>
                                <li><a href="/store/best-accessories">Best Gym Gear</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>M&amp;S Rewards</span>
                            <ul class="sub-menu">
                                <li><a href="/store/rewards">How To Earn Reward Points</a></li>
                                <li><a href="/store/rewards/catalog">Shop Rewards Catalog</a></li>
                                <li><a rel="nofollow" href="/store/rewards/customer/">View My Points Balance</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/store/help/main.html">Help</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span>
                        <svg class="icon">
                            <use xlink:href="#icon-workouts-weight"/>
                            <image class="icon" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/workouts-weight.png"/>
                        </svg>
                        
                       Training
                    </span>
                    <ul class="sub-menu">
                        <li><a href="/articles/training">Go to Training</a></li>
                        <li><span>Workout Routines</span>
                            <ul class="sub-menu">
                                <li><a href="/workout-routines">Go to Workout Routines</a></li>
                                <li><a href="/articles/training">Workout Articles</a></li>
                                <li><a href="/workouts/muscle-building">Muscle Building</a></li>
                                <li><a href="/workouts/fat-loss">Fat Loss</a></li>
                                <li><a href="/workouts/strength">Increase Strength</a></li>
                                <li><a href="/workouts/women">For Women</a></li>
                                <li><a href="/workouts/abs">Ab Workouts</a></li>
                                <li><a href="/workouts/bodyweight">Bodyweight</a></li>
                                <li><a href="/workouts/home">Home Based</a></li>
                                <li><a href="/workouts/beginner">Beginner</a></li>
                                <li><a href="/workouts/sports">Sports Specific</a></li>
                                <li><a href="/workouts/celebrity">Celebrity</a></li>
                                <li><a href="/workouts/chest">Chest Workouts</a></li>
                                <li><a href="/workouts/cardio">Cardio</a></li>
                                <li><a href="/workouts/back">Back Workouts</a></li>
                                <li><a href="/workouts/biceps">Bicep Workouts</a></li>
                                <li><a href="/workouts/shoulders">Shoulder Workouts</a></li>
                                <li><a href="/workouts/legs">Leg Workouts</a></li>
                                <li><a href="/workouts/triceps">Tricep Workouts</a></li>
                                <li><a href="/workouts/other">Other Workouts</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Exercise Guides</span>
                            <ul class="sub-menu">
                                <li><a href="/exercises">Go to Exercise Guides</a></li>
                                <li><a href="/exercises/abs">Abs</a></li>
                                <li><a href="/exercises/biceps">Biceps</a></li>
                                <li><a href="/exercises/calves">Calves</a></li>
                                <li><a href="/exercises/chest">Chest</a></li>
                                <li><a href="/exercises/forearms">Forearms</a></li>
                                <li><a href="/exercises/glutes">Glutes</a></li>
                                <li><a href="/exercises/hamstrings">Hamstrings</a></li>
                                <li><a href="/exercises/lats">Lats</a></li>
                                <li><a href="/exercises/lower-back">Lower Back</a></li>
                                <li><a href="/exercises/middle-back">Middle Back</a></li>
                                <li><a href="/exercises/quads">Quads</a></li>
                                <li><a href="/exercises/shoulders">Shoulders</a></li>
                                <li><a href="/exercises/traps">Traps</a></li>
                                <li><a href="/exercises/triceps">Triceps</a></li>
                            </ul>
                        </li>
                        <li><a href="/workouts/muscle-building">Muscle Building</a></li>
                        <li><a href="/workouts/fat-loss">Fat Loss</a></li>
                        <li><a href="/workouts/sports">Training For Your Sport</a></li>
                        <li>
                            <span>Fitness Tools</span>
                            <ul class="sub-menu">
                                <li><a href="/tools">Go to Fitness Tools</a></li>
                                <li><a href="/tools/bench-press-calculator">Bench Press Calculator </a></li>
                                <li><a href="/tools/bmr-calculator">Daily Calorie Calculator </a></li>
                                <li><a href="/tools/measure-bodyfat">Body Fat Calculator </a></li>
                                <li><a href="/tools/ideal-measurements">Ideal Measurements </a></li>
                                <li><a href="/tools/bench-press-max-chart">Bench Press Max Chart </a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Training Gear</span>
                            <ul class="sub-menu">
                                <li><a href="/store/category/accessories.html">Go to Training Gear</a></li>
                                <li><a href="/store/category/clothing.html">Gym Clothing</a></li>
                                <li><a href="/store/category/accessories/shaker-bottles.html">Shaker Bottles</a></li>
                                <li><a href="/store/category/accessories/bags.html">Gym Bags</a></li>
                                <li><a href="/store/category/accessories/lifting-belts.html">Weight Belts</a></li>
                                <li><a href="/store/category/accessories/wrist-support.html">Wrist Support</a></li>
                                <li><a href="/store/category/accessories/gloves.html">Gloves</a></li>
                                <li><a href="/store/category/accessories/lifting-straps.html">Lifting Straps</a></li>
                                <li><a href="/store/category/accessories/joint-support.html">Joint Support</a></li>
                                <li><a href="/store/category/accessories/body-measure.html">Body Measurement</a></li>
                                <li><a href="/store/category/accessories/lifting-chalk.html">Lifting Chalk</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <span>
                        <svg class="icon">
                            <use xlink:href="#icon-apple"/>
                            <image class="icon" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/apple.png"/>
                        </svg>
                        
                        Nutrition
                    </span>
                        <ul class="sub-menu">
                            <li><a href="/nutrition">Go to Nutrition </a> </li>
                            <li>
                                <span>Featured in Nutrition</span>
                                <ul class="sub-menu">
                                    <li><a href="/tools/bmr-calculator">Daily Calorie Calculator</a></li>
                                    <li><a href="/expert-guides/whey-protein">The Ultimate Whey Protein Guide</a></li>
                                    <li><a href="/articles/meal-prep-ultimate-guide">Meal Prep: The Ultimate Guide &amp; Recipes</a></li>
                                    <li><a href="/articles/43-easy-high-protein-recipes">43 Best High Protein Recipes That Anyone Can Cook</a></li>
                                </ul>
                            </li>
                            <li><a href="/recipes">Recipe Database</a></li>
                            <li><a href="/articles/nutrition">Nutrition Articles</a></li>
                            <li><a href="/expert-guides/nutrition">Nutrition Guides</a></li>
                            <li><a href="/expert-guides/supplements">Supplement Guides</a></li>
                        </ul>
                </li>
                <li>
                    <span>
                        <svg class="icon">
                            <use xlink:href="#icon-m-motivation"/>
                            <image class="icon" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/m-motivation.png" />
                        </svg>
                        
                       Motivation
                    </span>
                    <ul class="sub-menu">
                        <li><a href="/motivation">Go to Motivation </a> </li>
                        <li ><a href="/transformations">Transformations</a></li>
                        <li ><a href="/articles/motivation">Motivation Guides</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/lifestyle">
                        <svg class="icon">
                            <use xlink:href="#icon-lifestyle"/>
                            <image class="icon" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/lifestyle.png"/>
                        </svg>
                        
                       Lifestyle
                    </a>
                </li>
                <li>
                    <a href="/articles/women">
                        <svg class="icon">
                            <use xlink:href="#icon-woman"/>
                            <image class="icon" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/woman.png"/>
                        </svg>
                        
                       For Women
                    </a>
                </li>
                <li>
                    <a href="/forum/">
                        <svg class="icon">
                            <use xlink:href="#icon-form-comment"/>
                            <image class="icon" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/form-comment.png"/>
                        </svg>
                        
                       Forum
                    </a>
                </li>
                <div class="customer-support-wrap">
                    
                    <li class="support-menu">
                        <a class="title" href="/store/help/main.html" alt="M&amp;S Help">
                          7 Day Support
                        </a>
                    </li>

                    <li class="support-menu">
                        <div class="left" >
                          <svg style="width:1em; height:1em; margin-bottom: -0.12em;">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-support-white"></use>
                              <image style="width:1em; height:1em; margin-bottom: -0.12em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/support-white.png"></image>
                          </svg> 1-800-537-9910</div>
                        <div class="right">
                          <span class="open-chat"><svg style="width:.9em; height:.9em; margin-bottom: -0.1em;">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-insta-comments"></use>
              <image style="width:.9em; height:.9em; margin-bottom: -0.1em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/insta-comments.png"></image>
            </svg> Live Chat</span></div>
                    </li>

                </div>
                
                <div class="helpfull-links">
                    <li><a href="/store/rewards/catalog">M&amp;S Rewards Catalog</a></li>
                    <li><a href="/store/rewards">How to earn reward points</a></li>
                    <li><a href="/new">New Articles at M&amp;S</a></li>
                    <li><a href="/store/new.html">New Products at M&amp;S</a></li>
                    <li><a href="/store/promos.html">Deals &amp; Coupons</a></li>
                    <li><a href="/workout-routines">Workout Routines</a></li>
                    <li><a href="/store/category.html">Shop by Category</a></li>
                    <li><a href="/store/brands">Shop by Brand</a></li>
                </div>
                <div class="social-links">
                    <li><a rel="nofollow" href="http://www.facebook.com/muscleandstrength">
                        <svg style="width:1em; height:1em;">
                          <use xlink:href="#icon-facebook"/>
                          <image style="width:1em; height:1em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/facebook.png"/>
                        </svg>
                      </a></li>
                    <li><a rel="nofollow" href="http://www.twitter.com/Muscle_Strength">
                        <svg style="width:1em; height:1em;">
                          <use xlink:href="#icon-twitter"/>
                          <image style="width:1em; height:1em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/twitter.png"/>
                        </svg>
                      </a></li>
                    <li><a rel="nofollow" href="http://www.youtube.com/muscleandstrength">
                        <svg style="width:1em; height:1em;">
                          <use xlink:href="#icon-youtube"/>
                          <image style="width:1em; height:1em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/youtube.png"/>
                        </svg>
                      </a></li>
                    <li><a rel="nofollow" href="http://instagram.com/muscleandstrength">
                        <svg style="width:1em; height:1em;">
                          <use xlink:href="#icon-instagram"/>
                          <image style="width:1em; height:1em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/instagram.png"/>
                        </svg>
                      </a></li>
                    <li><a href="https://plus.google.com/+muscleandstrength" rel="publisher nofollow">
                        <svg style="width:1em; height:1em;">
                          <use xlink:href="#icon-google"/>
                          <image style="width:1em; height:1em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/google.png"/>
                        </svg>
                      </a></li>
                    <li><a rel="nofollow" href="http://pinterest.com/musclestrength/">
                        <svg style="width:1em; height:1em;">
                          <use xlink:href="#icon-pinterest"/>
                          <image style="width:1em; height:1em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/pinterest.png"/>
                        </svg>
                      </a></li>
                    <li><a rel="nofollow" href="http://musclestrength.tumblr.com/">
                        <svg style="width:1em; height:1em;">
                          <use xlink:href="#icon-tumblr"/>
                          <image style="width:1em; height:1em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/tumblr.png"/>
                        </svg>
                      </a></li>
                </div>
            </ul>

        </nav>     </div>

    
@endsection
