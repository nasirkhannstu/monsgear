@extends('main')
@section('title', '| Contact')
@section('content')
    <div class="col-md-12 col-xs-12">
        
    </div>
    <div id="main-wrap">
        <div class="aside">
            <div class="region region-sidebar-second">
    <div class="form aside-widget">

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
            @include('partials._messages')
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
                                                        Contact Monster Gear</h4>
                                                    <p>Monster Gear has a fully trained, friendly, and enthusiastic store support team that can help you with any question you have about your order. We practice what we preach, and all our support team workout and take supplements, so we can help answer any questions you might have about our products.</p>



                                                       </p>
                                                    <p><strong>Support Hours:</strong></p>
                                                    <p class="rteindent1">Monday-Friday: 8am to 6pm EST<br>

                                                    <h3 class="hstyle-three">
                                                        Monster Gear Mailing Address</h3>
                                                    <p>Need to send us something? Here's where to find us:</p>
                                                    <p class="rteindent1">Monster Gear<br>
                                                        Calle 53 Este, Marbella
                                                         <br>
                                                        Planta 1-Área comercial, Panama City, Panama<br>
                                                        USA</p>
                                                    <h3 class="hstyle-three">
                                                        Contact Monster Gear Via Email</h3>
                                                    <p>We answer emails 5 days a week. Our customer service team is very fast, most weekday inquiries are answered in around an hour! Some questions may be more complicated and take time to resolve. Please use the form below to contact us by email.</p>
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
                                                            <div class="description">Enter your Monster Gear order number if you have one.</div>
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