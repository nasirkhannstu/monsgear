@extends('main')
@section('title', '| All Blogs')
@section('stylsheets')

@endsection
@section('content')
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
                      <a href="{{ url('blog/'.$blog->slug)}}" alt="{{ $blog->title }}" title="{{ $blog->title }}">
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