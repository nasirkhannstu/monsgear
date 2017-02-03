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
                                    <a href="{{ url('blog/'.$blog->slug)}}" title="{{ $blog->title }}">
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

                                    <h1 class="no-header">About Us</h1>
                                </div><!-- End Node Header -->

                                <article class="nodeBody">

                                    <div class="content clearfix">
                                        <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><h4 class="hstyle-three">
                                                        About Monster Gear</h4>
                                                    <p>Products are anabolic steroids and all related hormones, peptides, sarms, ancillary products. Reliability is guaranteed quality is the highest and best in the industry, if you pay by bit coin we ship the same day if you pay by Western Union Money Gram we ship within three days.</p>
                                                    <p>Our lab. Are headed up by Berkeley PhD, We use strict quality controls to guarantee the best product on the market.</p>


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