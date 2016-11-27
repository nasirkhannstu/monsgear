@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
    {!! Html::style('css/cart/app.css') !!} 
@endsection
@section('content')
<div id="main-wrap">
    <div class="header-content">
                <div class="row">
                    <div class="home-carousel clearfix">
                        <div class="view view-homepage-carousel view-id-homepage_carousel view-display-id-homepage view-dom-id-4cf6911da9c04c67064319236195ad0d">
                            <div class="view-content">
                                <div class="views-row views-row-1 views-row-odd views-row-first">
                                    <div class="nodeListWrapper">
                                        <a href="/workouts/tailgates-and-touchdowns-workout" class="nodeImg ">
                                            <img src="{{ asset('uploads/product/1479325009.png') }}" width="800" height="500" alt="" />         
                                        </a>
                                    </div>
                                </div>
                                <div class="views-row views-row-2 views-row-even">
                                    <div class="nodeListWrapper">
                                        <a href="/workouts/300-rep-calf-workout" class="nodeImg ">
                                            <img src="{{ asset('uploads/product/1479325214.png') }}" width="800" height="500" alt="" />           
                                        </a>
                                    </div>
                                </div>
                                <div class="views-row views-row-3 views-row-odd">
                                    <div class="nodeListWrapper">
                                        <a href="/articles/2-ab-exercises-you-havent-done-before" class="nodeImg ">
                                            <img src="{{ asset('uploads/product/1479325384.png') }}" width="800" height="500" alt="" />         
                                        </a>
                                    </div>
                                </div>
                                <div class="views-row views-row-4 views-row-even views-row-last">
                                    <div class="nodeListWrapper">
                                        <a href="/workouts/build-better-grip-strength" class="nodeImg ">
                                            <img src="{{ asset('uploads/product/1479325214.png') }}" width="800" height="500" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End homeSlider -->
                    <div class="ad-space">
                        <p><a href="/workout-routines"><img alt="Free Workouts" src="https://cdn.muscleandstrength.com/sites/default/files/images/findafreeworkout.jpg" /></a></p>
                        <div class="social">

                            <ul class="follow">
                                <li><a rel="nofollow" href="http://www.facebook.com/muscleandstrength">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-facebook-brand"/>
                                        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/facebook-brand.png"/>
                                    </svg>
                                </a></li>
                                <li><a rel="nofollow" href="http://www.twitter.com/Muscle_Strength">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-twitter-brand"/>
                                        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/twitter-brand.png"/>
                                    </svg>
                                </a></li>
                                <li><a rel="nofollow" href="http://www.youtube.com/muscleandstrength">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-youtube-brand"/>
                                        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/youtube-brand.png"/>
                                    </svg>
                                </a></li>
                                <li><a rel="nofollow" href="http://instagram.com/muscleandstrength">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-instagram-brand"/>
                                        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/instagram-brand.png"/>
                                    </svg>
                                </a></li>
                                <li><a href="https://plus.google.com/+muscleandstrength" rel="publisher">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-google-brand"/>
                                        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/google-brand.png"/>
                                    </svg>
                                </a></li>
                                <li><a rel="nofollow" href="http://pinterest.com/musclestrength/">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-pinterest-brand"/>
                                        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/pinterest-brand.png"/>
                                    </svg>
                                </a></li>
                                <li><a rel="nofollow" href="http://musclestrength.tumblr.com/">
                                    <svg width="25" height="25">
                                        <use xlink:href="#icon-tumblr-brand"/>
                                        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/tumblr-brand.png"/>
                                    </svg>
                                </a>
                                </li>
                            </ul>
                            <span>Join over 1.4 Million M&amp;S fans!</span>
                        </div>
                    </div>
                </div>
            </div>
    <div class="main-content wide-format">
        <div class="tabs">
        </div> <!-- /#tabs -->
        <div class="todays-deals clearfix">
            <h2 class="hstyle-two">Supplement Deals <a href="/store/promos.html" class="inner-link">View all 600+ deals</a></h2>
            <div class="product-grid-4up">
            
            @foreach ($products as $key => $product)
                <li class="item id-{{ $key + 1 }}">

                    <div class="inner-wrap">

                        <div class="grid-product-header">
                            <h4 class="product-name">
                                <a href="{{ url('p/'.$product->slug)}}">{{ $product->name}}</a>
                            </h4>
                            <!-- <div class="promoLabel">
                                <span class="label success">
                                    Buy 1 Get 1 FREE!            
                                </span>
                            </div> -->
                        </div>

                        <div class="product-image">
                            <a href="{{ url('p/'.$product->slug)}}" title="{{ $product->name}}">
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
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success" role="button">Add To Cart</a>
                            </div>
                            
                        </div>
                    </div>
                </li>
                @endforeach
            </div>          
        </div>
        <div class="new clearfix">
            <h2 class="hstyle-two">New At Muscle &amp; Strength <a href="/new" class="inner-link">View all new</a></h2>
            <div class="content-grid-3up">
                <div class="view view-newest-content-by-type view-id-newest_content_by_type view-display-id-posted_in view-dom-id-3739d303609e7db5c7e0ee32613b6362">

                    <div class="view-content">

                        <div class="item">
                            <div class="inner-wrap">
                                <a href="/workouts/fast-mass-program" alt="Fast Mass Program: The 4 Day Superset Split Workout" title="Fast Mass Program: The 4 Day Superset Split Workout">
                                    <div class="nodeImgWrap">
                                        <div class="nodeImg ">
                                            <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/fast-mass-thumb.jpg?itok=rSjM5otH" width="400" height="250" alt="Fast Mass Program: The 4 Day Superset Split Workout" /></div>
                                    </div>
                                    <div class="nodeData">
                                        <div class="nodeTitle">
                                            Fast Mass Program: The 4 Day Superset Split Workout        </div>
                                    </div>
                                </a>
                                <div class="stats-wrap">

                                    <div class="posted-in">Posted in: Workout Routines</div>    </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="inner-wrap">
                                <a href="/recipes/gameday-buffalo-chicken-sliders" alt="Gameday Buffalo Chicken Sliders Recipe" title="Gameday Buffalo Chicken Sliders Recipe">
                                    <div class="nodeImgWrap">
                                        <div class="nodeImg ">
                                            <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/recipe/buffalo-chicken-sliders-feature.jpg?itok=7RoJI2j5" width="400" height="250" alt="Gameday Buffalo Chicken Sliders Recipe" />      </div>
                                    </div>
                                    <div class="nodeData">
                                        <div class="nodeTitle">
                                            Gameday Buffalo Chicken Sliders Recipe        </div>
                                    </div>
                                </a>
                                <div class="stats-wrap">

                                    <div class="posted-in">Posted in: Recipes</div>    </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="inner-wrap">
                                <a href="/articles/how-to-calculate-perfect-macros" alt="How to Calculate the Perfect Macros for Your Fitness Goals" title="How to Calculate the Perfect Macros for Your Fitness Goals">
                                    <div class="nodeImgWrap">
                                        <div class="nodeImg ">
                                            <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/article/macros-thumb.jpg?itok=CxrjvdXI" width="400" height="250" alt="How to Calculate the Perfect Macros for Your Fitness Goals" /></div>
                                    </div>
                                    <div class="nodeData">
                                        <div class="nodeTitle">
                                            How to Calculate the Perfect Macros for Your Fitness Goals        </div>
                                    </div>
                                </a>
                                <div class="stats-wrap">

                                    <div class="posted-in">Posted in: Articles</div>    </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="inner-wrap">
                                <a href="/articles/6-training-tips-team-sports" alt="6 Strength &amp; Athleticism Training Tips for Athletes" title="6 Strength &amp; Athleticism Training Tips for Athletes">
                                    <div class="nodeImgWrap">
                                        <div class="nodeImg ">
                                            <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/article/team-sport-training-thumb.jpg?itok=W7iMLj8j" width="400" height="250" alt="6 Strength &amp; Athleticism Training Tips for Team Sports Athletes" /></div>
                                    </div>
                                    <div class="nodeData">
                                        <div class="nodeTitle">
                                            6 Strength &amp; Athleticism Training Tips for Athletes        </div>
                                    </div>
                                </a>
                                <div class="stats-wrap">

                                    <div class="posted-in">Posted in: Articles</div>    </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="inner-wrap">
                                <a href="/workouts/juan-morel-leg-day" alt="300lb Bodybuilder Juan Morel’s Mixed Volume Leg Workout" title="300lb Bodybuilder Juan Morel’s Mixed Volume Leg Workout">
                                    <div class="nodeImgWrap">
                                        <div class="nodeImg ">
                                            <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/leg-day-thumb.jpg?itok=iEyaA7ZL" width="400" height="250" alt="300lb Bodybuilder Juan Morel’s Mixed Volume Leg Workout" /></div>
                                    </div>
                                    <div class="nodeData">
                                        <div class="nodeTitle">
                                            300lb Bodybuilder Juan Morel’s Mixed Volume Leg Workout        </div>
                                    </div>
                                </a>
                                <div class="stats-wrap">

                                    <div class="posted-in">Posted in: Workout Routines</div>    </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="inner-wrap">
                                <a href="/workouts/full-body-blast-off-workout" alt="Explosive Gains! The Full Body Blast Off Workout" title="Explosive Gains! The Full Body Blast Off Workout">
                                    <div class="nodeImgWrap">
                                        <div class="nodeImg ">
                                            <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/full-body-blast-off-thumb.jpg?itok=8gOfOxvV" width="400" height="250" alt="Full Body Blast Off Workout - The Best Full Body Routine" /></div>
                                    </div>
                                    <div class="nodeData">
                                        <div class="nodeTitle">
                                            Explosive Gains! The Full Body Blast Off Workout        </div>
                                    </div>
                                </a>
                                <div class="stats-wrap">

                                    <div class="posted-in">Posted in: Workout Routines</div>    </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>

        <div class="article-group clearfix">
            <h2 class="hstyle-two">This Week's Top Workouts <a href="/workout-routines" class="inner-link">View all workout routines</a></h2>

            <div class="content-grid-3up">
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/workouts/10-week-mass-building-program.html" alt="10 Week Mass Building Program" title="10 Week Mass Building Program">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/mass400.jpg?itok=wmGNog0d" width="400" height="250" alt="10 Week Mass Building Program For Hardgainers" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    10 Week Mass Building Program        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                8.6K Shares        </div>
                            <div class="stats-left">
                                2.5K Comments        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/workouts/jason-blaha-ice-cream-fitness-5x5-novice-workout" alt="Jason Blaha&#039;s Ice Cream Fitness 5x5 Novice Program" title="Jason Blaha&#039;s Ice Cream Fitness 5x5 Novice Program">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/ice-cream-fitness-450.jpg?itok=hxteVFRQ" width="400" height="250" alt="Jason Blaha&#039;s Ice Cream Fitness 5x5 Novice Program" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    Jason Blaha&#039;s Ice Cream Fitness 5x5 Novice Program        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                1.7K Shares        </div>
                            <div class="stats-left">
                                1.1K Comments        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/workouts/phul-workout" alt="Power Hypertrophy Upper Lower (P.H.U.L.) Workout" title="Power Hypertrophy Upper Lower (P.H.U.L.) Workout">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/power-hypertrophy-upper-lower-phul.jpg?itok=0AdZdGPC" width="400" height="250" alt="Power Hypertrophy Upper Lower (P.H.U.L.) Workout" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    Power Hypertrophy Upper Lower (P.H.U.L.) Workout        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                2.7K Shares        </div>
                            <div class="stats-left">
                                391 Comments        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/workouts/6-day-powerbuilding-split-meal-plan" alt="6 Day Push, Pull, Legs Powerbuilding Split &amp; Meal Plan" title="6 Day Push, Pull, Legs Powerbuilding Split &amp; Meal Plan">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/power4.jpg?itok=fWe-Bkjn" width="400" height="250" alt="6 Day Push, Pull, Legs Powerbuilding Split" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    6 Day Push, Pull, Legs Powerbuilding Split &amp; Meal Plan        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                1.3K Shares        </div>
                            <div class="stats-left">
                                38 Comments        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/workouts/4-day-maximum-mass-workout" alt="4 Day Maximum Mass Workout" title="4 Day Maximum Mass Workout">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/maximum-mass-workout.jpg?itok=hNV9JFIB" width="400" height="250" alt="Start the New Year Right: Awaken the New You" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    4 Day Maximum Mass Workout        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                2.1K Shares        </div>
                            <div class="stats-left">
                                546 Comments        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/workouts/dumbbell-only-home-or-gym-fullbody-workout.html" alt="Dumbbell Only Home Or Gym Full Body Workout" title="Dumbbell Only Home Or Gym Full Body Workout">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/workout/dumb400.jpg?itok=48HxgYpa" width="400" height="250" alt="" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    Dumbbell Only Home Or Gym Full Body Workout        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                6.8K Shares        </div>
                            <div class="stats-left">
                                1.7K Comments        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-group clearfix padBot15">
            <h2 class="hstyle-two">This Week's Most Read Articles <a href="/articles" class="inner-link">View all articles</a></h2>

            <div class="content-grid-3up">
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/articles/35-tips-double-muscle-building-gains" alt="35 Tips To Help You Double Your Muscle Building Gains" title="35 Tips To Help You Double Your Muscle Building Gains">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/article/gains_0.jpg?itok=fN_yU0Bt" width="400" height="250" alt="35 Tips To Help You Double Your Muscle Building Gains" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    35 Tips To Help You Double Your Muscle Building Gains        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                1.5K Shares        </div>
                            <div class="stats-left">
                                5 Comments        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/articles/fall-bulk-domination" alt="Build Muscle Not Fat: 7 Tactics For Bulking Season" title="Build Muscle Not Fat: 7 Tactics For Bulking Season">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/article/fall-bulk-domination-thumb.jpg?itok=kX7JShsm" width="400" height="250" alt="Build Muscle Not Fat: 7 Tactics For Bulking Season" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    Build Muscle Not Fat: 7 Tactics For Bulking Season        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                279 Shares        </div>
                            <div class="stats-left">
                                1 Comment        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/articles/body-types-ectomorph-mesomorph-endomorph.html" alt="Your Body Type - Ectomorph, Mesomorph or Endomorph?" title="Your Body Type - Ectomorph, Mesomorph or Endomorph?">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/article/body450.jpg?itok=-gzqqQX-" width="400" height="250" alt="Your Body Type: Ectomorph, Mesomorph or Endomorph?" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    Your Body Type - Ectomorph, Mesomorph or Endomorph?        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                6.6K Shares        </div>
                            <div class="stats-left">
                                388 Comments        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/articles/forget-steroids-5-fullbody-workouts-for-serious-gains.html" alt="Forget Steroids: 5 Full Body Workouts For Serious Gains" title="Forget Steroids: 5 Full Body Workouts For Serious Gains">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/article/steroids400.jpg?itok=kWvpjejO" width="400" height="250" alt="5 Effective Fullbody Workouts For Serious Mass" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    Forget Steroids: 5 Full Body Workouts For Serious Gains        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                4.2K Shares        </div>
                            <div class="stats-left">
                                536 Comments        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/articles/barbell-bench-is-overrated" alt="Barbell Bench is Overrated: 9 Dumbbell Press Variations You Need to Try" title="Barbell Bench is Overrated: 9 Dumbbell Press Variations You Need to Try">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/article/thinking_bench_press.jpg?itok=5fGLrOWk" width="400" height="250" alt="Barbell Bench is Overrated: 9 Dumbbell Variations You Need to Try" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    Barbell Bench is Overrated: 9 Dumbbell Press Variations You Need to Try        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                48 Shares        </div>
                            <div class="stats-left">
                                1 Comment        </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class="inner-wrap">
                        <a href="/articles/the-ultimate-muscle-building-split-reference-guide.html" alt="The Ultimate Muscle Building Split Reference Guide" title="The Ultimate Muscle Building Split Reference Guide">
                            <div class="nodeImgWrap">
                                <div class="nodeImg ">
                                    <img src="https://cdn.muscleandstrength.com/sites/default/files/styles/400x250/public/field/image/article/ultimate-muscle-building.jpg?itok=C_CfiL4v" width="400" height="250" alt="The Ultimate Muscle Building Split Reference Guide" />        </div>
                            </div>
                            <div class="nodeData">
                                <div class="nodeTitle">
                                    The Ultimate Muscle Building Split Reference Guide        </div>
                            </div>
                        </a>
                        <div class="stats-wrap">
                            <div class="stats">
                                332 Shares        </div>
                            <div class="stats-left">
                                132 Comments        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection