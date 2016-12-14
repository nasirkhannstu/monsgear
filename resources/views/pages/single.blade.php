@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
  {!! Html::style('css/cart/app.css') !!}
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
        </div>
    </div>
    <div class="aside aside-after">
        <div class="product-shop">
            <div class="shop-wrap">
                <div class="section-title">Buying Options</div>
                <div class="section-inner-wrap">                  
                    <div class="group-wrap">
                        <div class="group"  itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <div class="group-header">
                                <div class="cost">
                                    <meta itemprop="priceCurrency" content="USD" />                
                                    <span class="calc"  itemprop="price">
                                        <div class="price-box">
                                            <span class="regular-price" id="product-price-18057">
                                                <span class="price">
                                                    {{ $product->name }}
                                                </span>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <div class="title">120 Servings</div>
                                <br>
                                <!-- <div class="deal">
                                    <span class="label success">
                                        Buy 1 Get 1 FREE    
                                    </span>
                                </div> -->
                            </div>
                            <div class="fields">
                                <div class="row">  
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
                </div>                            
                <div class="section-separator"></div>
                <div class="section-inner-wrap add-to-cart-wrap">
        
                    <div class="add-to-cart">
                        <div class="button-wrap">
                            <a href="{{ route('product.addToCart', ['id' => $product->id]) }}">
                            <button class="btn btn-lg btn-flat-blue aloading basic-load validate-rating">
                                <span class="init">
                                    <svg class="svg-icon" style="width: 1.4em; height: 1.4em; max-width: 100%;">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-store-cart"></use>
                                    </svg>
                                    Add To Cart
                              </span>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="main-content continued">
    <br>
        <div class="product-information-section">
            <div class="section-title">Product Information</div>
            <div class="section-inner-wrap">
                                                <!--<h3 class="bordered clearBoth">Creactor Product Details</h3>-->
                <div class="std">
                    <style type="text/css">
                        .creactorBlue {color:#009bb4;}
                    </style>
                    Product Description
                </div>
            </div>
        </div>
        <div class="allReviews">
            <div class="review-wrapper" data-pagesize="10">
                <br>
                <a name="comment-form"></a>
                <div class="comment-form-new clearfix">
                <div class="new-comment-form" style="">
                 @foreach($product->pcomment as $comment)
                 @if($comment->visibility == 'visible')
                <div class="aboutAuthor">
                  <!-- <h5>{{ $comment->name }}</h5> -->
                  <div class="author-inner">
                      <div class="name">
                          <a href="/authors/fredrik-tonstad-varvik"> {{ $comment->name }}</a>
                      </div>
                      <div class="summary">
                          <div class="field field-name-field-summary field-type-text-long field-label-hidden">
                              <div class="field-items">
                                  <div class="field-item even">
                                      <h6>Date: {{ $comment->created_at }}</h6>
                                      {{ $comment->body }}
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="link">
                          <a href="/authors/fredrik-tonstad-varvik">View all by Fredrik Tonstad Vårvik »</a>
                      </div>
                  </div>
                </div>
                 @endif
                 @endforeach
                {!! Form::open(array('route' => ['pcomments.store', $product->id], 'data-parsley-validate'=>'', 'class' => 'comment-form user-info-from-cookie user-info-from-cookie-processed', 'id' => 'comment-form', 'accept-charset' => 'UTF-8')) !!}
                <div>
                  <div class="form-item form-type-textfield form-item-name">
                    <label for="name">Your name 
                        <span class="form-required" title="This field is required.">*</span>
                    </label>
                    {{Form::text('name',null,array('class' => 'form-text required','id' => 'edit-name', 'required'=>'','maxlength'=>'255','size' => '30'))}}
                  </div>
                  <div class="form-item form-type-textfield form-item-mail">
                    <label for="email">E-mail <span class="form-required" title="This field is required.">*</span></label>
                    {{Form::text('email',null,array('class' => 'form-text required','id' => 'edit-mail', 'required'=>'','maxlength'=>'255','size' => '30'))}}
                    <div class="description">The content of this field is kept private and will not be shown publicly.</div>
                  </div>
                  <div class="field-type-text-long field-name-comment-body field-widget-text-textarea form-wrapper" id="edit-comment-body">
                    <div id="comment-body-add-more-wrapper">
                      <div class="text-format-wrapper">
                        <div class="form-item form-type-textarea form-item-comment-body-und-0-value">
                          <label for="body">Comment <span class="form-required" title="This field is required.">*</span></label>
                          <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                          {{Form::textarea('body',null,array('class' => 'text-full form-textarea required','id' => 'edit-mail', 'required' => '', 'cols'=>'60','rows' => '5'))}}
                            <div class="grippie"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-actions form-wrapper" id="edit-actions">
                    <input id="edit-submit" name="op" value="Save" class="form-submit" type="submit">
                  </div>
                </div>
                {!! Form::close() !!} 
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
