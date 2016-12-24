@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')

@endsection
@section('content')
<div id="main-wrap">   
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
<script type="text/javascript">

var icpForm6636 = document.getElementById('icpsignup6636');

function verifyRequired6636() {
  if (icpForm6636["fields_fname"].value == "") {
    icpForm6636["fields_fname"].focus();
    alert("The First Name field is required.");
    return false;
  }
  if (icpForm6636["fields_email"].value == "") {
    icpForm6636["fields_email"].focus();
    alert("The Email field is required.");
    return false;
  }
  jQuery.get('/token.php', function(txt) {
    jQuery('#icpsignup6636').append('<input type="hidden" id="6636_ts" name="ts" value="'+txt+'" />');
    jQuery('#icpsignup6636').attr('action', 'https://news.muscleandstrength.com/subscriptions/subscribe');
    icpForm6636.submit();
  });

  return false;
}
</script>
    

<div id="block-block-17" class="block block-block">

    
  <div class="content">
    <div class="radWrapper" style="position: relative; width: 302px; height: 370px; max-width: 100%;">
<!-- MNS_Site_Sidebar_Top -->
<div id="div-gpt-ad-1423352102131-0" style="width: 302px; height: 370px; transform-origin: 0px 0px 0px; position: absolute; transform: scale(0.999);" data-google-query-id="CKCQ1Ja8hdECFVwtjgodDXQA2A">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423352102131-0'); });
googletag.cmd.push(function() { jQuery('#div-gpt-ad-1423352102131-0').rad({ allowBiggerSizing: 'true'}); });
</script><div id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0" title="3rd party ad content" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" width="302" height="370" frameborder="0"></iframe></div><iframe id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__hidden__" title="" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__hidden__" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom; visibility: hidden; display: none;" width="0" height="0" frameborder="0"></iframe>
</div>
</div>  </div>
</div>
<div id="block-mnsblock-mnssidebar-content" class="block block-mnsblock">

    
  <div class="content">
    <div class="h3">Must Read Articles</div>
      <ul class="popular-list">
      @foreach ($blogs as $key => $blog)
      @if($key <= 4)
        <li>
          <a href="{{ url('b/'.$blog->slug)}}" title="{{ $blog->title }}">
            <img src="{{ asset('uploads/blogimg/'. $blog->image) }}" alt="{{ $blog->title }}">
            <span>{{ $blog->title }}</span>
          </a>
        </li>
      @endif
      @endforeach
      </ul>
  </div>
</div>
<div id="block-block-9" class="block block-block">

    
  <div class="content">
    <div class="radWrapper" style="position: relative; width: 302px; height: 370px; max-width: 100%;">
<!-- MNS_Site_Sidebar_Bottom -->
<div id="div-gpt-ad-1421356883797-0" style="width: 302px; height: 370px; transform-origin: 0px 0px 0px; position: absolute; transform: scale(0.999);" data-google-query-id="CNaI3Ja8hdECFR4vjgodfWAA0w">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1421356883797-0'); });
googletag.cmd.push(function() { jQuery('#div-gpt-ad-1421356883797-0').rad({ allowBiggerSizing: 'true' }); });
</script><div id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0" title="3rd party ad content" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" width="302" height="370" frameborder="0"></iframe></div><iframe id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__hidden__" title="" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__hidden__" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom; visibility: hidden; display: none;" width="0" height="0" frameborder="0"></iframe>
</div>
</div>
  </div>
</div>
  </div>
            
        
            </div>
    <div class="aside-shadow" style="top: 162.367px;"> </div>
    <div class="main-content">
        <div class="tabs clearfix"></div>
        <div class="contentMain">
           <h1>New at Muscle &amp; Strength</h1>
            <div class="content-grid-2up">
              <div class="view view-new-content view-id-new_content view-display-id-newest50 view-dom-id-ffcc6d6a45382d880ee0c9e9a7d7b936">
                <div class="view-content">
                @foreach ($blogs as $key => $blog)
                  <div class="item">
                    <div class="inner-wrap">
                      <a href="{{ url('b/'.$blog->slug)}}" alt="{{ $blog->title }}" title="{{ $blog->title }}">
                      <div class="nodeImgWrap">
                        <div class="nodeImg ">
                          <img src="{{ asset('uploads/blogimg/'. $blog->image) }}" alt="{{ $blog->title }}" width="400" height="250">        </div>
                      </div>
                      <div class="nodeData">
                        <div class="nodeTitle">
                          {{ $blog->title }}
                        </div>
                      </div>
                    </a>
                       <!-- <div class="stats-wrap">
                        <div class="stats">
                          0 Shares        </div>
                        <div class="stats-left">
                          0 Comments        </div>
                        </div> --> 
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