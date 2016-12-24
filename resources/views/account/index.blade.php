@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
    {!! Html::style('css/account.css') !!}
@endsection
@section('content')
    <div id="main-wrap">
        <div class="breadcrumb">
            <a href="https://www.muscleandstrength.com/" title="Home" id="bc-home" class="breadcrumb-0">
                Home »</a>


            <a href="https://www.muscleandstrength.com/store/" title="Store" id="bc-store" class="breadcrumb-1">
                Store »</a>
            My Account
        </div>

        <!--[if (gte IE 9)|(gt IEMobile 7)]><!-->
        <!--<![endif]-->
        <div class="aside">
            <div class="account-nav">
                <span class="title">Account Navigation
                    <span class="inline-caret">›</span>
                </span>
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
            </div>			
        </div>
        <div style="top: 157.25px;" class="aside-shadow"></div>
        <div class="main-content">
            <h1>Account Dashboard</h1>
            <div class="dashboard clearfix">
                <div class="simple-card-wrap">
                    <div class="card">
                        <div class="contactInfo inner-wrap">
                            <div class="margBot10 card-header"><h3 class="bottomBorder">Profile Info</h3></div>
                            <div class="margBot5 row qg-full">
                                <div class="margBot10">
                                    <div class="blue smaller upper">Contact Name</div>
                                    {{Auth::user()->name}}<br>
                                </div>

                                <div class="margBot10 ellipsis">
                                    <div class="blue smaller upper">Contact Email</div> {{Auth::user()->email}}<br>
                                </div>
                            </div>
                            <div class="buttons qg-full margBot20">
                                <a class="btn btn-white btn-sm" href="https://www.muscleandstrength.com/store/customer/account/edit/">Change Account Info</a>
                            </div>
                        </div>       
                    </div>
                    <div class="card">
                        <div class="contactInfo inner-wrap">
                            <div class="margBot10 card-header"><h3 class="bottomBorder">Shipping Address</h3></div>
                            <div class="margBot5 row qg-full">
                                @if($userinfo)
                                <div class="address">
                                <b>{{ $userinfo->fname }}</b><br>
                                {{ $userinfo->address }}<br>
                                {{ $userinfo->city }}<br>
                                {{ $userinfo->state }}<br>
                                {{ $userinfo->zip }}<br>
                                {{ $userinfo->email }}
                                </div>
                                @endif
                                
                            </div>
                            <div class="buttons qg-full margBot20">
                                <a class="btn btn-white btn-sm" href="{{url('account/address')}}">Add/Edit Contact Info</a>
                            </div>
                        </div>        
                    </div>
                </div>
                <!-- <div class="addressBook">
                    <h3 class="bottomBorder margBot15">Address Book</h3>

                    <div class="address-list">
                        <div class="wrap-grid">
                            <h6 class="complete">
                                Primary Billing&nbsp;&nbsp;

                                <a class="ashake floatRight" href="https://www.muscleandstrength.com/store/customer/address/edit/id/365408/"><svg width="13" height="13">
                                        <use xlink:href="#icon-edit"></use>
                                        <image width="13" height="13" src="/store/skin/frontend/mnsv4/default/images/fallback/edit.png"></image>
                                    </svg></a>
                            </h6>
                            <div class="address">
                                <b>towhed rahman</b><br>
                                sonobilas<br>
                                Dhaka banglades<br>
                                Noakhali,  3801<br>
                                Bangladesh<br>
                                T: 09847345
                            </div>
                        </div>
                        <div class="wrap-grid">
                            <h6 class="complete">
                                Primary Shipping&nbsp;&nbsp;
                                <a class="ashake floatRight" href="https://www.muscleandstrength.com/store/customer/address/edit/id/365408/"><svg width="13" height="13">
                                        <use xlink:href="#icon-edit"></use>
                                        <image width="13" height="13" src="/store/skin/frontend/mnsv4/default/images/fallback/edit.png"></image>
                                    </svg></a>
                            </h6>
                            <div class="address">
                                <b>towhed rahman</b><br>
                                sonobilas<br>
                                Dhaka banglades<br>



                                Noakhali,  3801<br>
                                Bangladesh<br>
                                T: 09847345
                            </div>
                        </div>
                        <div class="buttons">
                            <a class="btn btn-white btn-sm" href="https://www.muscleandstrength.com/store/customer/address/">Manage All Addresses</a>
                        </div>
                    </div>

                </div> -->
                <!--
            <div class="reviews">
            <div class="title-buttons">
                <h3>My Recent Reviews</h3>
                <a href="https://www.muscleandstrength.com/store/review/customer/">View All Reviews</a>
            </div>
                        <ol id="my_recent_reviews">
                    <li>
                        <span class="number">1</span>
                        <h4 class="product-name"><a href="https://www.muscleandstrength.com/store/review/customer/view/id/48742/">Creactor</a></h4>
                                    <p>Rating:</p>
                        <div class="rating-box">
                            <div class="rating" style="width:100%;"></div>
                        </div>
                                </li>
                </ol>
                <script type="text/javascript">decorateList('my_recent_reviews');</script>
                </div>
            -->
                <!--
            <div class="reviews">
            <div class="title-buttons">
                <h3>My Recent Reviews</h3>
                <a href="https://www.muscleandstrength.com/store/review/customer/">View All Reviews</a>
            </div>
                        <ol id="my_recent_reviews">
                    <li>
                        <span class="number">1</span>
                        <h4 class="product-name"><a href="https://www.muscleandstrength.com/store/review/customer/view/id/48742/">Creactor</a></h4>
                                    <p>Rating:</p>
                        <div class="rating-box">
                            <div class="rating" style="width:100%;"></div>
                        </div>
                                </li>
                </ol>
                <script type="text/javascript">decorateList('my_recent_reviews');</script>
                </div>
            -->
            </div>
        </div>
    </div>
@endsection