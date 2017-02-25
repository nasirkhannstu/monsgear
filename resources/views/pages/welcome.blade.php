@extends('main')
@section('title', '| Welcome')
@section('stylsheets')
    {!! Html::style('css/cart/app.css') !!}

        <!-- for nivo slider -->
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/nivo/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" href="css/demo/style.css" type="text/css" media="screen" />




    <!-- bxSlider CSS file -->






@endsection
@section('content')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>




    <div id="main-wrap">

        <div class="header-content">
            <div class="row">
                <div >
                    <div id="wrapper">
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider"> <img src="uploads/demo/images/slider1.jpg" data-thumb="uploads/demo/images/slider1.jpg"  title="100% DOMESTIC SHIPPING" alt="" /> <a href=""><img src="uploads/demo/images/slider2.jpg" data-thumb="uploads/demo/images/slider2.jpg" alt="" title="WU MG BITCOIN AMEX GIFT CARD" /></a> <img src="uploads/demo/images/slider3.jpg" data-thumb="uploads/demo/images/slider3.jpg" alt="" data-transition="sliceDown" title="DISCREET SHIPPING" /> <img src="uploads/demo/images/slider4.jpg" data-thumb="uploads/demo/images/slider4.jpg" alt="" title="1-2 DAY SHIPPING " /> </div>
                            <div id="htmlcaption" class="nivo-html-caption"> <strong>100% DOMESTIC SHIPPING</strong>  </div>
                        </div>
                    </div>
                </div>

                <!-- End homeSlider -->
                <div class="ad-space">
                    <p><a href=""><img alt="Free Workouts" src="uploads/icon/findafreeworkout.jpg"></a></p>
                    <div class="social">

                        <ul class="follow">
                            <li><a rel="nofollow" href="https://web.facebook.com/monster.mylabs/">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-facebook-brand"></use>
                                        <image width="25" height="25" src="uploads/icon/facebook-brand.png"></image>
                                    </svg>
                                </a></li>
                            <li><a rel="nofollow" href="">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-twitter-brand"></use>
                                        <image width="25" height="25" src="uploads/icon/twitter-brand.png"></image>
                                    </svg>
                                </a></li>

                        </ul>
                        <span>Join over  Monster Gear fans!</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content wide-format">
            <div class="tabs">
            </div> <!-- /#tabs -->
            @foreach($injectable->chunk(6) as $key => $productchunk)
            <div class="todays-deals clearfix">
                <h2 class="hstyle-two"><?php
                if($key==0){
                echo "BLENDS";}
                elseif($key==1){
                echo"POPULAR";
                }elseif($key==2){echo "GOLDLINE";}
                elseif($key==3){echo "MORE";}?>
                                                   </h2>
                <div class="product-grid-4up">
                    <ul style="padding-left: 0em;">

                        @foreach ($productchunk as $key => $product)


                                @if($product->category->name == "Injectable")

                                    <li class="item id-{{ $key + 1 }}">
                                        <div class="inner-wrap">
                                            <div class="grid-product-header">
                                                <h4 class="product-name">
                                                    <a href="{{ url('shop/'.$product->slug)}}">{{ $product->name}}</a>
                                                </h4>
                                            </div>
                                            <div class="product-image">
                                                <a href="{{ url('shop/'.$product->slug)}}" title="{{ $product->name}}">
                                                    <img src="{{ asset('uploads/product/'. $product->image) }}" alt="{{ $product->name}}">
                                                </a>
                                            </div>
                                            <div class="prodDataWrap">
                                                <div class="price-box">
                                                    <!-- <span class="retail-price">
                                                        <del><span class="price">$25.99</span></del>
                                                    </span> -->
                                                    <span class="price">${{ $product->price}}</span>
                                                </div>
                                                <div class="savings">
                                                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-lg btn-flat-blue aloading basic-load validate-rating " style="font-size: 0.8em;padding: 7px;font-weight: bold;margin-top: 4px;" role="button">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach

            @foreach($oral->chunk(6) as $key => $productchunk)
                <div class="todays-deals clearfix">
                    <h2 class="hstyle-two"><?php
                        if($key==0){
                            echo "HORMONES";}
                        elseif($key==1){
                            echo"ANTI ESTROGEN";
                        }elseif($key==2){echo "POPULAR";}
                        elseif($key==3){echo "MORE";}?>  </h2>
                    <div class="product-grid-4up">
                        <ul style="padding-left: 0em;">

                            @foreach ($productchunk as $key => $product)


                                @if($product->category->name == "Oral")

                                    <li class="item id-{{ $key + 1 }}">
                                        <div class="inner-wrap">
                                            <div class="grid-product-header">
                                                <h4 class="product-name">
                                                    <a href="{{ url('shop/'.$product->slug)}}">{{ $product->name}}</a>
                                                </h4>
                                            </div>
                                            <div class="product-image">
                                                <a href="{{ url('shop/'.$product->slug)}}" title="{{ $product->name}}">
                                                    <img src="{{ asset('uploads/product/'. $product->image) }}" alt="{{ $product->name}}">
                                                </a>
                                            </div>
                                            <div class="prodDataWrap">
                                                <div class="price-box">
                                                    <!-- <span class="retail-price">
                                                        <del><span class="price">$25.99</span></del>
                                                    </span> -->
                                                    <span class="price">${{ $product->price}}</span>
                                                </div>
                                                <div class="savings">
                                                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-lg btn-flat-blue aloading basic-load validate-rating " style="font-size: 0.8em;padding: 7px;font-weight: bold;margin-top: 4px;" role="button">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach

            @foreach($peptides->chunk(6) as $key => $productchunk)
                <div class="todays-deals clearfix">
                    <h2 class="hstyle-two">Peptides/HGH/HCG{{ $key+1 }} Products </h2>
                    <div class="product-grid-4up">
                        <ul style="padding-left: 0em;">

                            @foreach ($productchunk as $key => $product)


                                @if($product->category->name == "Peptides")

                                    <li class="item id-{{ $key + 1 }}">
                                        <div class="inner-wrap">
                                            <div class="grid-product-header">
                                                <h4 class="product-name">
                                                    <a href="{{ url('shop/'.$product->slug)}}">{{ $product->name}}</a>
                                                </h4>
                                            </div>
                                            <div class="product-image">
                                                <a href="{{ url('shop/'.$product->slug)}}" title="{{ $product->name}}">
                                                    <img src="{{ asset('uploads/product/'. $product->image) }}" alt="{{ $product->name}}">
                                                </a>
                                            </div>
                                            <div class="prodDataWrap">
                                                <div class="price-box">
                                                    <!-- <span class="retail-price">
                                                        <del><span class="price">$25.99</span></del>
                                                    </span> -->
                                                    <span class="price">${{ $product->price}}</span>
                                                </div>
                                                <div class="savings">
                                                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-lg btn-flat-blue aloading basic-load validate-rating " style="font-size: 0.8em;padding: 7px;font-weight: bold;margin-top: 4px;" role="button">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach






            <div class="new clearfix">
                <h2 class="hstyle-two">Blog <a href="{{url('allblogs')}}" class="inner-link">View all</a></h2>
                <div class="content-grid-3up">
                    <div class="view view-newest-content-by-type view-id-newest_content_by_type view-display-id-posted_in view-dom-id-3739d303609e7db5c7e0ee32613b6362">

                        <div class="view-content">
                            @foreach ($blogs as $key => $blog)
                                <div class="item">
                                    <div class="inner-wrap">
                                        <a href="{{ url('blog/'.$blog->slug)}}" title="{{ $blog->title }}">
                                            <div class="nodeImgWrap">
                                                <div class="nodeImg ">
                                                    <img src="{{ asset('uploads/blogimg/'. $blog->image) }}" width="400" height="250" alt="{{ $blog->title }}" /></div>
                                            </div>
                                            <div class="nodeData">
                                                <div class="nodeTitle">
                                                    {{ $blog->title }}
                                                </div>
                                            </div>
                                        </a>
                                        {{--<div class="stats-wrap">--}}

                                        {{--<div class="posted-in">cvcv dfdg</div>    </div>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection