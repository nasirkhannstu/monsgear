@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
    <!-- {!! Html::style('css/cart/app.css') !!}  -->
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
<div id="div-gpt-ad-1423352102131-0" style="width: 302px; height: 370px; transform-origin: 0px 0px 0px; position: absolute; transform: scale(0.999);" data-google-query-id="CJSkv8SHzNACFVIWjwod9uEPqA">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423352102131-0'); });
googletag.cmd.push(function() { jQuery('#div-gpt-ad-1423352102131-0').rad({ allowBiggerSizing: 'true'}); });
</script><div id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0" title="3rd party ad content" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" width="302" height="370" frameborder="0"></iframe></div><iframe id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__hidden__" title="" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Top_0__hidden__" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom; visibility: hidden; display: none;" srcdoc="" width="0" height="0" frameborder="0"></iframe>
</div>
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
    <div class="radWrapper" style="position: relative; width: 302px; height: 370px; max-width: 100%;">
<!-- MNS_Site_Sidebar_Bottom -->
<div id="div-gpt-ad-1421356883797-0" style="width: 302px; height: 370px; transform-origin: 0px 0px 0px; position: absolute; transform: scale(0.999);" data-google-query-id="CKGc4cSHzNACFYsTjwodkZANnw">
<script type="text/javascript">
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1421356883797-0'); });
googletag.cmd.push(function() { jQuery('#div-gpt-ad-1421356883797-0').rad({ allowBiggerSizing: 'true' }); });
</script><div id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0" title="3rd party ad content" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" width="302" height="370" frameborder="0"></iframe></div><iframe id="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__hidden__" title="" name="google_ads_iframe_/9172182/MNS_Site_Sidebar_Bottom_0__hidden__" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom; visibility: hidden; display: none;" srcdoc="" width="0" height="0" frameborder="0"></iframe>
</div>
</div>
  </div>
</div>
  </div>
          </div>
    <div class="aside-shadow" style="top: 169.083px;"> </div>
    <div class="main-content">
                    <div id="messages"><div class="section clearfix">
                    <div class="messages status">
<h2 class="element-invisible">Status message</h2>
Your comment has been queued for review by site administrators and will be published after approval.
</div>
                </div></div> <!-- /.section, /#messages -->
        
        
                    <div class="tabs clearfix">
                            </div> <!-- /#tabs -->
        
                    <div class="contentMain">
                  <div class="region region-content">
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    
<div id="node-48424" class="node node-article clearfix">

  <div class="nodeHeader">

    <h1>{{ $blog->title }}</h1>
    
	<div class="socialButtons">
		<div class="addthis_sharing_toolbox"></div>
	</div>
	
			<div class="feature-image">
		    <div class="field field-name-field-feature-image field-type-image field-label-hidden">
          <div class="field-items">
            <div class="field-item even">
              <img src="{{ asset('uploads/blogimg/'. $blog->image) }}" alt="" width="800" height="500">
            </div>
          </div>
        </div>
      </div>
	
        <div class="nodeSummary">
      <div class="field field-name-field-summary field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even">Does rep tempo have an effect on your gains? If so, which is better, fast tempo or slow tempo? Read this article to find out everything about rep tempo!</div></div></div>    </div>
      </div><!-- End Node Header -->

  <article class="nodeBody" itemscope="" itemtype="http://schema.org/Article">
    <meta itemprop="name" content="Should You Use Fast or Slow Rep Tempo for Maximal Gains?">
    <meta itemprop="headline" content="Should You Use Fast or Slow Rep Tempo for Maximal Gains?">
    <meta itemprop="description" content="Does rep tempo have an effect on your gains? If so, which is better, fast tempo or slow tempo? Read this article to find out everything about rep tempo!">
    <meta itemprop="image" content="https://cdn.muscleandstrength.com/sites/default/files/field/image/article/rep-tempo-thumb.jpg">
    <meta itemprop="author" content="Fredrik Tonstad Vårvik">
    <meta itemprop="datePublished" content="Nov 2016">
    <div class="content clearfix" itemprop="articleBody">
      
      <div class="field field-name-body field-type-text-with-summary field-label-hidden">
        <div class="field-items">
          <div class="field-item even">
              {!! $blog->body!!}
            <br>
            <br>
            <br>
            <br>
            <p>Let’s say you attend the gym on a regular basis.</p>
            <p>You have <a href="/articles/principle-progressive-overload-guide">progressive overload</a>, volume, frequency, intensity, exercise selection/order, and rest-intervals in check.</p>
            <h2 class="hstyle-three">
            	The 3 Factors for Muscle Growth</h2>
            <p>First, I would like to say <a href="/workouts/maul-workout">mechanical tension</a>, metabolic stress, and muscle damageare are what most evidence states as the factors <a href="/expert-guides/muscle-building">resulting in muscle growth</a><sup>1</sup>.</p>

            <div class="ref">
            <h6>
            		references</h6>
              <ol>
                <li>
                			Schoenfeld BJ. The mechanisms of muscle hypertrophy and their application to resistance training. J Strength Cond Res Natl Strength Cond Assoc. 2010 Oct;24(10):2857–72.</li>
                <li>
                			Schoenfeld BJ, Ratamess NA, Peterson MD, Contreras B, Tiryaki-Sonmez G, Alvar BA. Effects of different volume-equated resistance training loading strategies on muscular adaptations in well-trained men. J Strength Cond Res Natl Strength Cond Assoc. 2014 Apr 7.</li>
                <li>
                			Schoenfeld BJ, Wilson JM, Lowery RP, Krieger JW. Muscular adaptations in low- versus high-load resistance training: A meta-analysis. Eur J Sport Sci. 2014;0(0):1–10.</li>
              </ol>
            </div>
          </div>
        </div>
        </div>
      </div><!-- End content -->

  </article><!-- End Node Body -->

  <div class="nodeFooter">

    <div class="stats-wrap">
    <div class="share-wrap">
        <div class="inner-wrap">
            <div class="share-count"><span class="count">0</span><span class="text">Shares</span></div>
            <div class="addthis_sharing_toolbox"></div>
        </div>
    </div>
    <div class="star-wrap">
        <div class="inner-wrap">
            <div class="count-container one">
                <span class="star-count">5</span>
                <span class="star-label">STARS</span>
            </div>
            <div class="count-container two">
                <span class="star-count">1</span>
                <span class="star-label">VOTES</span>
            </div>
            <div class="text-container">
                <span class="star-text">RATE THIS</span>
                <div class="field field-name-field-rating field-type-fivestar field-label-hidden"><div class="field-items"><div class="field-item even"><form class="fivestar-widget" action="/articles/rep-tempo-for-maximal-gains" method="post" id="fivestar-custom-widget" accept-charset="UTF-8"><div><input name="fivestar_entity" value="48424" type="hidden">
<div class="clearfix fivestar-average-stars fivestar-form-item fivestar-mnsbasic fivestar-processed"><div class="form-item form-type-fivestar form-item-vote">
 <div class="form-item form-type-select form-item-vote">
 <select id="edit-vote--2" name="vote" class="form-select ajax-processed" style="display: none;"><option value="-">Select rating</option><option value="20">Give it 1/5</option><option value="40">Give it 2/5</option><option value="60">Give it 3/5</option><option value="80">Give it 4/5</option><option value="100" selected="selected">Give it 5/5</option></select><div class="fivestar-widget clearfix fivestar-widget-5"><div class="star star-1 odd star-first on"><a href="#20" title="Give it 1/5" rel="nofollow">Give it 1/5</a></div><div class="star star-2 even on"><a href="#40" title="Give it 2/5" rel="nofollow">Give it 2/5</a></div><div class="star star-3 odd on"><a href="#60" title="Give it 3/5" rel="nofollow">Give it 3/5</a></div><div class="star star-4 even on"><a href="#80" title="Give it 4/5" rel="nofollow">Give it 4/5</a></div><div class="star star-5 odd star-last on"><a href="#100" title="Give it 5/5" rel="nofollow">Give it 5/5</a></div></div>
</div>

</div>
</div><input class="fivestar-submit form-submit" id="edit-fivestar-submit" name="op" value="Rate" type="submit"><input name="form_build_id" value="form-q7c31vqbTLO56fTjZN4r3wRVYpjkeVhAiP4879AaMfc" type="hidden">
<input name="form_id" value="fivestar_custom_widget" type="hidden">
</div></form></div></div></div>            </div>
        </div>   
    </div>
</div>
    <div class="relatedContent clearfix">
<div class="related-content">
    <h4 class="heading">Recommended for you</h4>

    <div class="view-content">
            <div class="views-row">
            <div class="nodeListWrapper">

                <div class="nodeImgWrap">
                    <div class="nodeImg ">
                        <a href="/articles/are-you-using-these-in-your-workouts-you-should-be.html"><img typeof="foaf:Image" src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_230/public/field/image/article/using-these-exercises.jpg?itok=xiAPTmTt" alt="Are You Using These in Your Workouts? If Not, You Should Be!"></a>
                    </div>
                </div>

                <div class="nodeData">
                    <div class="nodeTitle">
                        <h4 class="title"><a href="/articles/are-you-using-these-in-your-workouts-you-should-be.html">Unique Exercises &amp; Training Approaches</a></h4>
                    </div>
                </div>
            </div>
        </div>
                <div class="views-row">
            <div class="nodeListWrapper">

                <div class="nodeImgWrap">
                    <div class="nodeImg ">
                        <a href="/articles/micro-progressions-non-stop-growth"><img typeof="foaf:Image" src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_230/public/field/image/article/micropro-thumb.jpg?itok=ojN-L1b5" alt="Never Stop Making Gains! Use Micro-Progressions For Non-Stop Growth"></a>
                    </div>
                </div>

                <div class="nodeData">
                    <div class="nodeTitle">
                        <h4 class="title"><a href="/articles/micro-progressions-non-stop-growth">Never Stop Making Gains Using Micro-Progressions!</a></h4>
                    </div>
                </div>
            </div>
        </div>
                <div class="views-row">
            <div class="nodeListWrapper">

                <div class="nodeImgWrap">
                    <div class="nodeImg ">
                        <a href="/articles/bad-technique-stealing-gains"><img typeof="foaf:Image" src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_230/public/field/image/article/bad-technique-feature.jpg?itok=x2ft3N0d" alt="Is Bad Form Stealing Your Gains? Here's How to Prevent it"></a>
                    </div>
                </div>

                <div class="nodeData">
                    <div class="nodeTitle">
                        <h4 class="title"><a href="/articles/bad-technique-stealing-gains">Is Bad Form Stealing Your Gains? How to Prevent it</a></h4>
                    </div>
                </div>
            </div>
        </div>
                <div class="views-row">
            <div class="nodeListWrapper">

                <div class="nodeImgWrap">
                    <div class="nodeImg ">
                        <a href="/articles/8-exercises-no-one-talks-about"><img typeof="foaf:Image" src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_230/public/field/image/article/8-exercises-thumb.jpg?itok=65Hee0a_" alt="Top 8 Exercises You're Not Doing (And You Should!)"></a>
                    </div>
                </div>

                <div class="nodeData">
                    <div class="nodeTitle">
                        <h4 class="title"><a href="/articles/8-exercises-no-one-talks-about">Top 8 Exercises You're Not Doing (And You Should!)</a></h4>
                    </div>
                </div>
            </div>
        </div>
                <div class="views-row">
            <div class="nodeListWrapper">

                <div class="nodeImgWrap">
                    <div class="nodeImg ">
                        <a href="/articles/get-huge-fast-the-2-year-plan-for-extreme-mass.html"><img typeof="foaf:Image" src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_230/public/field/image/article/get-huge.jpg?itok=rU_aGOJH" alt="Get Huge Fast! The 2 Year Plan For Extreme Mass"></a>
                    </div>
                </div>

                <div class="nodeData">
                    <div class="nodeTitle">
                        <h4 class="title"><a href="/articles/get-huge-fast-the-2-year-plan-for-extreme-mass.html">Ultimate Guide To Packing On Muscle!</a></h4>
                    </div>
                </div>
            </div>
        </div>
                <div class="views-row">
            <div class="nodeListWrapper">

                <div class="nodeImgWrap">
                    <div class="nodeImg ">
                        <a href="/articles/3-reasons-to-include-kettlebells"><img typeof="foaf:Image" src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_230/public/field/image/article/3-reasons-to-include-kettlebells-featured.jpg?itok=aIrLfUgi" alt="3 Reasons Why You Should Include Kettlebells In Your Workout"></a>
                    </div>
                </div>

                <div class="nodeData">
                    <div class="nodeTitle">
                        <h4 class="title"><a href="/articles/3-reasons-to-include-kettlebells">3 Reasons Why You Should Train With Kettlebells</a></h4>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

</div></div>

    	<div class="aboutAuthor">
	    <h5>About The Author</h5>
	    <div class="author-inner">
	    		<div class="author-image"><img src="https://cdn.muscleandstrength.com/sites/default/files/styles/thumbnail_author/public/field/image/author/profile_pic_high_res.jpg?itok=qCF1csf8"></div>
					<div class="name"><a href="/authors/fredrik-tonstad-varvik">Fredrik Tonstad Vårvik</a></div>
					<div class="summary"><div class="field field-name-field-summary field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even">Fredrik Tonstad Vårvik is a MSc student in exercise physiology. He is an online coach, writer, &amp; researcher with focus in the areas of resistance training &amp; nutrition.</div></div></div></div>
					<div class="link"><a href="/authors/fredrik-tonstad-varvik">View all by Fredrik Tonstad Vårvik »</a></div>
			</div>
	</div>
	

  </div><!-- End Node Footer -->

  <div id="comments" class="comment-wrapper">
	
	<div class="commentHeader">
	
	<h3 class="blueStripe">0 Comments<span class="show-hide"><a class="inner-link" hide="+ Post Comment" hclass="" sclass="" key="new-comment-form">- Post Comment</a></span></h3>
		
	</div>
	

			<a name="comment-form"></a>
		<div class="comment-form-new clearfix">
		<div class="new-comment-form" style="">

		<form class="comment-form user-info-from-cookie user-info-from-cookie-processed" action="/comment/reply/48424" method="post" id="comment-form" accept-charset="UTF-8"><div><div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">Your name <span class="form-required" title="This field is required.">*</span></label>
 <input id="edit-name" name="name" value="" size="30" maxlength="60" class="form-text required" type="text">
</div>
<div class="form-item form-type-textfield form-item-mail">
  <label for="edit-mail">E-mail <span class="form-required" title="This field is required.">*</span></label>
 <input id="edit-mail" name="mail" value="" size="30" maxlength="64" class="form-text required" type="text">
<div class="description">The content of this field is kept private and will not be shown publicly.</div>
</div>
<div class="field-type-text-long field-name-comment-body field-widget-text-textarea form-wrapper" id="edit-comment-body"><div id="comment-body-add-more-wrapper"><div class="text-format-wrapper"><div class="form-item form-type-textarea form-item-comment-body-und-0-value">
  <label for="edit-comment-body-und-0-value">Comment <span class="form-required" title="This field is required.">*</span></label>
 <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea"><textarea class="text-full form-textarea required" id="edit-comment-body-und-0-value" name="comment_body[und][0][value]" cols="60" rows="5" style="opacity: 1; height: 144px;"></textarea><div class="grippie"></div></div>
</div>
<fieldset class="filter-wrapper form-wrapper" id="edit-comment-body-und-0-format"><div class="fieldset-wrapper"><div class="filter-help form-wrapper" id="edit-comment-body-und-0-format-help"><p><a href="/filter/tips" target="_blank">More information about text formats</a></p></div><div class="filter-guidelines form-wrapper filter-guidelines-processed" id="edit-comment-body-und-0-format-guidelines"><div class="filter-guidelines-item filter-guidelines-plain_text"><h3 style="display: none;">Plain text</h3><ul class="tips"><li>No HTML tags allowed.</li><li>Web page addresses and e-mail addresses turn into links automatically.</li><li>Lines and paragraphs break automatically.</li></ul></div></div></div></fieldset>
</div>
</div></div><input name="form_build_id" value="form-_4ejnT1AQX01cDgJYyvMMxo3RCWh-LyaaDavzlCsfRM" type="hidden">
<input name="form_id" value="comment_node_article_form" type="hidden">
<div class="form-item form-type-checkbox form-item-notify">
 <input id="edit-notify" name="notify" value="1" class="form-checkbox" type="checkbox">  <label class="option" for="edit-notify">Notify me when new comments are posted </label>

</div>
<div id="edit-notify-type" class="form-radios" style="display: none;"><div class="form-item form-type-radio form-item-notify-type">
 <input id="edit-notify-type-1" name="notify_type" value="1" checked="checked" class="form-radio" type="radio">  <label class="option" for="edit-notify-type-1">All comments </label>

</div>
<div class="form-item form-type-radio form-item-notify-type">
 <input id="edit-notify-type-2" name="notify_type" value="2" class="form-radio" type="radio">  <label class="option" for="edit-notify-type-2">Replies to my comment </label>

</div>
</div><div class="form-actions form-wrapper" id="edit-actions"><input id="edit-submit" name="op" value="Save" class="form-submit" type="submit"></div></div></form>		</div>
		</div>
	
		
</div><!-- End mnsCommentWrapper --></div>
  </div>
</div>
  </div>
            </div><!-- End contentMain -->
        

            </div>
   
</div>
@endsection