@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
    {!! Html::style('css/appSingle.css') !!}
    {!! Html::style('css/appSingle1.css') !!}
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

        <h1>Address Book</h1>



        <div class="margBot15 aleft">
            <a onclick="window.location='https://www.muscleandstrength.com/store/customer/address/new/'; return false;" href="#"><button class="btn btn-blue">Add New Address</button></a>
        </div>


        <div class="dashboard-wrap">
            <h3 class="bottomBorder margBot15">Default Addresses</h3>

            <div class="addressDefault address-list row">

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
                        sonobilas<br>            Dhaka banglades<br>
                        Noakhali,
                        ,
                        3801<br>
                        Bangladesh<br>
                        T: 09847345        </div>
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
                        sonobilas<br>            Dhaka banglades<br>
                        Noakhali,
                        ,
                        3801<br>
                        Bangladesh<br>
                        T: 09847345        </div>
                </div>



            </div>

        </div>


        <div class="dashboard-wrap margTop20">


            <h3 class="bottomBorder margBot15">Additional Address Entries</h3>

            <div class="addressAdditional address-list">



                <div class="wrap-grid">
                    <div class="address">
                        You have no additional address entries in your address book.                </div>
                </div>


            </div>
        </div>

        <script type="text/javascript">
            //<![CDATA[
            function deleteAddress(addressId) {
                if(confirm('Are you sure you want to delete this address?')) {
                    window.location='https://www.muscleandstrength.com/store/customer/address/delete/form_key/7JrqoSeeZ3kFcBhw/id/'+addressId;
                }
                return false;
            }
            //]]>
        </script>			</div>

</div>
@endsection