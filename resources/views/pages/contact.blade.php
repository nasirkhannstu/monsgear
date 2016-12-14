@extends('main')
@section('title', '| Contact')
@section('content')
    <div class="col-md-12 col-xs-12">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <strong>Success </strong>{{ Session::get('success') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                <strong>Error </strong>
                <ul>
                    @foreach ($errors->all as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div id="main-wrap">
        <div class="breadcrumb"><a href="/">Home</a> » Contact Us</div>
        <div class="aside">
            <div class="region region-sidebar-second">
                <div class="form aside-widget">
                    <img alt="Build Muscle, Lose Fat &amp; Stay Motivated!" src="https://cdn.muscleandstrength.com/sites/all/themes/mnsnew/images/signupbanner.jpg">
                    <div class="wrap">
                        <p>M&amp;S weekly email newsletter sends you workouts, articles and motivation based on your goal.</p>

                        <form method="post" action="https://news.muscleandstrength.com/newsletter/error.html" name="icpsignup" id="icpsignup6636" accept-charset="UTF-8" onsubmit="return verifyRequired6636();">
                            <input name="redirect" value="https://news.muscleandstrength.com/newsletter/thankyou.html" type="hidden">
                            <input name="errorredirect" value="https://news.muscleandstrength.com/newsletter/error.html" type="hidden">
                            <div class="qg-full">
                                <input name="fields_fname" placeholder="first name" type="text">
                            </div>
                            <div class="qg-full">
                                <input name="fields_email" placeholder="email" type="text">
                            </div>
                            <div class="qg-half">
                                <select class="half" name="fields_goal">
                                    <option value="Build Muscle">Build Muscle</option>
                                    <option value="Lose Fat">Lose Fat</option>
                                    <option value="Increase Strength">Increase Strength</option>
                                    <option value="Body Transformation">Body Transformation</option>
                                    <option value="Improve Sport">Improve Sport</option>
                                    <option value="Endurance">Endurance</option>
                                    <option value="Healthy Lifestyle">Healthy Lifestyle</option>
                                    <option value="Contest Prep">Contest Prep</option>
                                    <option value="Other">Other</option>
                                </select>
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



                <div id="block-block-17" class="block block-block">


                    <div class="content">
                        <div style="position: relative; width: 302px; height: 370px; max-width: 100%;" class="radWrapper">
                            <!-- MNS_Site_Sidebar_Top -->
                            <div data-google-query-id="CMyqjovc7dACFcgQaAodPC0FuQ" id="div-gpt-ad-1423352102131-0" style="width: 302px; height: 370px; transform-origin: 0px 0px 0px; position: absolute; transform: scale(0.999);">

                                <div style="border: 0pt none;" id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__container__"><iframe srcdoc="" style="border: 0px none; vertical-align: bottom;" marginheight="0" marginwidth="0" scrolling="no" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0" title="3rd party ad content" id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0" frameborder="0" height="370" width="302"></iframe></div><iframe srcdoc="" style="border: 0px none; vertical-align: bottom; visibility: hidden; display: none;" marginheight="0" marginwidth="0" scrolling="no" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__hidden__" title="" id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__hidden__" frameborder="0" height="0" width="0"></iframe></div>
                        </div>  </div>
                </div>
                <div id="block-mnsblock-mnssidebar-content" class="block block-mnsblock">


                    <div class="content">
                        <div class="h3">Must Read Articles</div>

                        <ul class="popular-list">
                            <li>
                                <a href="/expert-guides/muscle-building" title="Complete Muscle Building Guide: Learn How To Build Muscle">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_145/public/max-gym-450_0.jpg?itok=T0iWGKBF" alt="">
                                    <span>Complete Muscle Building Guide: Learn How To Build Muscle</span>
                                </a>
                            </li>
                            <li>
                                <a href="/articles/50-unwritten-gym-rules" title="50 Unwritten Gym Rules Every Bro Should Know!">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_145/public/bro.jpg?itok=-8FbDjoR" alt="">
                                    <span>50 Unwritten Gym Rules Every Bro Should Know!</span>
                                </a>
                            </li>
                            <li>
                                <a href="/expert-guides/pre-workout" title="How To Maximize Results With Pre-Workout Supplements">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_145/public/prewo.jpg?itok=y23I7Ap3" alt="">
                                    <span>How To Maximize Results With Pre-Workout Supplements</span>
                                </a>
                            </li>
                            <li>
                                <a href="/articles/movie-muscle-38-greatest-male-hollywood-physiques" title="The 38 Greatest Male Hollywood Physiques Of All Time">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_145/public/movie.jpg?itok=VYH32QEW" alt="">
                                    <span>The 38 Greatest Male Hollywood Physiques Of All Time</span>
                                </a>
                            </li>
                            <li>
                                <a href="/expert-guides/whey-protein" title="The Essential Guide To Whey Protein Supplements">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_145/public/suppreviews.jpg?itok=tY2p4GE7" alt="">
                                    <span>The Essential Guide To Whey Protein Supplements</span>
                                </a>
                            </li>
                        </ul></div>
                </div>
                <div id="block-block-9" class="block block-block">


                    <div class="content">
                        <div style="position: relative; width: 302px; height: 370px; max-width: 100%;" class="radWrapper">
                            <!-- MNS_Site_Sidebar_Bottom -->
                            <div data-google-query-id="CJqqkYvc7dACFc-kaAodfBIKHA" id="div-gpt-ad-1421356883797-0" style="width: 302px; height: 370px; transform-origin: 0px 0px 0px; position: absolute; transform: scale(0.999);">

                                <div style="border: 0pt none;" id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__container__"><iframe srcdoc="" style="border: 0px none; vertical-align: bottom;" marginheight="0" marginwidth="0" scrolling="no" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0" title="3rd party ad content" id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0" frameborder="0" height="370" width="302"></iframe></div><iframe srcdoc="" style="border: 0px none; vertical-align: bottom; visibility: hidden; display: none;" marginheight="0" marginwidth="0" scrolling="no" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__hidden__" title="" id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__hidden__" frameborder="0" height="0" width="0"></iframe></div>
                        </div>
                    </div>
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
                                            <div class="border-wrap">
                                                <form class="webform-client-form"  action="{{url('contact')}}" method="POST"  >
                                                    {{ csrf_field() }}
                                                    <div><div class="form-item webform-component webform-component-textfield" id="webform-component-name">

                                                            <label for="edit-submitted-name">Name <span class="form-required" title="This field is required.">*</span></label>
                                                            <input id="edit-submitted-name" name="name" value="" size="60" maxlength="128" class="form-text required" type="text">
                                                        </div>
                                                        <div class="form-item webform-component webform-component-email" id="webform-component-email">
                                                            <label for="edit-submitted-email">Email <span class="form-required" title="This field is required.">*</span></label>
                                                            <input class="email form-text form-email required" id="edit-submitted-email" name="email" size="60" type="email">
                                                        </div>

                                                        <div class="form-item webform-component webform-component-textfield" id="webform-component-order-number">
                                                            <label for="edit-submitted-order-number">Order Number </label>
                                                            <input id="edit-submitted-order-number" name="order_number" value="" size="60" maxlength="128" class="form-text" type="text">
                                                            <div class="description">Enter your M&amp;S order number if you have one.</div>
                                                        </div>
                                                        <div class="form-item webform-component webform-component-textfield" id="webform-component-subject">
                                                            <label for="edit-submitted-subject">Subject <span class="form-required" title="This field is required.">*</span></label>
                                                            <input id="edit-submitted-subject" name="subject" value="" size="60" maxlength="128" class="form-text required" type="text">
                                                        </div>
                                                        <div class="form-item webform-component webform-component-textarea" id="webform-component-message">
                                                            <label for="edit-submitted-message">Message <span class="form-required" title="This field is required.">*</span></label>
                                                            <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea id="edit-submitted-message" name="message" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div></div>
                                                        </div>

                                                        <div class="form-actions form-wrapper" id="edit-actions"><input id="edit-submit" name="op" value="Submit" class="form-submit" type="submit"></div></div></form>		    	</div>
                                        </div>
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