@extends('main')
@section('title', '| About')
@section('content')
    <div id="main-wrap">

        <div class="aside">
            <div class="region region-sidebar-second">
    <div class="form aside-widget">
    <img alt="Build Muscle, Lose Fat &amp; Stay Motivated!" src="https://cdn.muscleandstrength.com/sites/all/themes/mnsnew/images/signupbanner.jpg">
    <div class="wrap">
        <p>Keep Yourself Updated!!! Subscribe Now.</p>

        <form method="post" action="" name="icpsignup" id="icpsignup6636" accept-charset="UTF-8">
            <input name="redirect" value="" type="hidden">
            <input name="errorredirect" value="" type="hidden">
            <div class="qg-full">
                <input name="fields_fname" placeholder="first name" type="text">
            </div>
            <div class="qg-full">
                <input name="fields_email" placeholder="email" type="text">
            </div>
            <div class="qg-half">
                <button class="btn-icon-muscle btn btn-blue half" type="submit" onclick="ga('send', 'event', { eventCategory: 'email', eventAction: 'signup', eventLabel: 'sidebar'});">
                    <span class="text">Sign up</span>
                    <div class="muscle-icon">
                        <svg>
                            <use class="muscle-down" xlink:href="#icon-muscle-icon"></use>
                            <use class="muscle-up" xlink:href="#icon-muscle-icon-2"></use>
                            <image width="45" height="45" class="muscle-down" src="https://cdn.muscleandstrength.com/images/fallback/muscle-icon.png"></image>
                            <image width="45" height="45" class="muscle-up" src="https://cdn.muscleandstrength.com/images/fallback/muscle-icon-2.png"></image>
                        </svg>
                    </div>
                </button>
            </div>
        </form> 
    </div>
</div>
<div id="block-mnsblock-mnssidebar-content" class="block block-mnsblock">

    
  <div class="content">
    <div class="h3">Must Read Articles</div>

<ul class="popular-list">
    @foreach ($sideblogs as $key => $blog)
    <li>
      <a href="{{ url('b/'.$blog->slug)}}" title="{{ $blog->title }}">
        <img src="{{ asset('uploads/blogimg/'. $blog->image) }}" alt="{{ $blog->title }}">
        <span>{{ $blog->title }}</span>
      </a>
    </li>
    @endforeach
  </ul></div>
</div>

  </div>
          </div>
        <div style="top: 117.25px;" class="aside-shadow"> </div>
        <div class="main-content">


            <div class="tabs clearfix">
            </div> <!-- /#tabs -->

            <div class="contentMain">
                <div class="region region-content">
                    <div id="block-system-main" class="block block-system">


                        <div class="content">
                            <div id="node-4733" class="node node-webform node-promoted clearfix">

                                <div class="nodeHeaderImage">
                                </div>

                                <div class="nodeHeader">

                                    <h1 class="no-header">Contact Us</h1>
                                </div><!-- End Node Header -->

                                <article class="nodeBody">

                                    <div class="content clearfix">
                                        <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><h4 class="hstyle-three">
                                                        Contact M&amp;S By Phone</h4>
                                                    <p>Muscle &amp; Strength has a fully trained, friendly, and enthusiastic store support team that can help you with any question you have about your order. We practice what we preach, and all our support team workout and take supplements, so we can help answer any questions you might have about our products.</p>
                                                    <p>We can also take orders by phone, so call us if you want to speak to someone about placing an order!</p>
                                                    <p><strong>Customer Service Numbers</strong>:</p>
                                                    <p class="rteindent1">Toll free: 1-800-537-9910<br>
                                                        International: +1 803-695-0558<br>
                                                        Fax: +1 803 227 0147</p>
                                                    <p><strong>Support Hours:</strong></p>
                                                    <p class="rteindent1">Monday-Friday: 8am to 11pm EST<br>
                                                        Saturday &amp; Sunday: 9am to 5pm EST</p>
                                                    <h3 class="hstyle-three">
                                                        M&amp;S Mailing Address</h3>
                                                    <p>Need to send us something? Here's where to find us:</p>
                                                    <p class="rteindent1">Muscle &amp; Strength<br>
                                                        1180 First Street South<br>
                                                        Columbia, SC, 29209<br>
                                                        USA</p>
                                                    <h3 class="hstyle-three">
                                                        Contact M&amp;S Via Email</h3>
                                                    <p>We answer emails 7 days a week. Our customer service team is very fast, most weekday inquiries are answered in around an hour! Some questions may be more complicated and take time to resolve. Please use the form below to contact us by email.</p>
                                                </div></div></div>		    <div class="qg-twothird">

                                    </div><!-- End content -->

                                </article><!-- End Node Body -->

                                <div class="nodeFooter">



                                </div><!-- End Node Footer -->



                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End contentMain -->


        </div>

    </div>
@endsection