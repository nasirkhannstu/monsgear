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
                <span class="title">Account Navigation<span class="inline-caret">›</span></span>
                <div class="nav-wrap">
                    <a class="dashboard" href="/store/customer/account/">
                        <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                            <use xlink:href="#icon-account"></use>
                            <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/account.png"></image>
                        </svg>
                        Dashboard Home</a>

                    <a class="orders" href="/store/sales/order/history/">
                        <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                            <use xlink:href="#icon-history"></use>
                            <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/history.png"></image>
                        </svg>
                        Order History</a>


                    <a class="points" href="/store/rewards/customer/">
                        <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                            <use xlink:href="#icon-mns-coin"></use>
                            <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/mns-coin.png"></image>
                        </svg>
                        Points &amp; Rewards</a>

                    <a class="referral" href="/store/rewardsref/customer/">
                        <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                            <use xlink:href="#icon-referral-program"></use>
                            <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/referral-program.png"></image>
                        </svg>
                        Referral Program</a>

                    <a class="cards" href="/store/usaepay/manage/">
                        <svg style="width:1.5em; height:1.5em; margin-bottom: -0.3em; margin-right: .5em;">
                            <use xlink:href="#icon-saved-cards"></use>
                            <image style="width:1.5em; height:1.5em; margin-bottom: -0.3em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/saved-cards.png"></image>
                        </svg>
                        Saved Credit Cards</a>

                    <a class="address" href="/store/customer/address/">
                        <svg style="width:1.5em; height:1.5em; margin-bottom: -0.3em; margin-right: .5em;">
                            <use xlink:href="#icon-address-book"></use>
                            <image style="width:1.5em; height:1.5em; margin-bottom: -0.3em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/address-book.png"></image>
                        </svg>
                        Address Book</a>

                    <a class="update" href="/store/customer/account/edit/">
                        <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                            <use xlink:href="#icon-cog"></use>
                            <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/cog.png"></image>
                        </svg>
                        Update Profile</a>

                    <a class="subscriptions" href="/store/customer/subscriptions/">
                        <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                            <use xlink:href="#icon-email"></use>
                            <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/email.png"></image>
                        </svg>
                        Manage Subscriptions</a>
                </div>
            </div>			</div>
        <div style="top: 157.25px;" class="aside-shadow"></div>

        <div class="main-content">

            <h1>Account Dashboard</h1>


            <div class="dashboard clearfix">
                <div class="simple-card-wrap">
                    <div class="card">
                        <div class="box-account box-info dashboard-points-summary inner-wrap">

                            <div class="margBot10 card-header">
                                <h3 class="bottomBorder">Reward Points</h3>
                            </div>



                            <div class="dashboard-points-wrap">
                                <div class="currency-image-wrap">
                                    <img src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/reward-program/RC_Coin-stack-coin-on-top.png" alt="currency">
                                </div>
                                <div class="points">
                                    <span class="point-wrap">10</span>
                                </div>
                                <a class="btn btn-white btn-sm points-button" href="https://www.muscleandstrength.com/store/rewards/customer/">
                                    View Rewards                    </a>

                            </div>
                        </div>        </div>
                    <div class="card">
                        <div class="contactInfo inner-wrap">
                            <div class="margBot10 card-header"><h3 class="bottomBorder">Profile Info</h3></div>
                            <div class="margBot5 row qg-full">
                                <div class="margBot10">
                                    <div class="blue smaller upper">Contact Name</div> towhed rahman<br>
                                </div>

                                <div class="margBot10 ellipsis">
                                    <div class="blue smaller upper">Contact Email</div> towhedurrone93@gmail.com<br>
                                </div>
                            </div>
                            <div class="buttons qg-full margBot20">
                                <a class="btn btn-white btn-sm" href="https://www.muscleandstrength.com/store/customer/account/edit/">Edit Contact Info</a> <a class="btn btn-white btn-sm" href="https://www.muscleandstrength.com/store/customer/account/edit/changepass/1/">Change Password</a>
                            </div>
                        </div>        </div>
                </div>
                <div class="addressBook">
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

                </div>
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