@extends('main')
@section('title', '| Search')
@section('stylsheets')
	{!! Html::style('css/cart/app.css') !!}	
@endsection
@section('content')
<div id="main-wrap">
  	<div class="aside">
	    <div class="region region-sidebar-second">
	        <div class="form aside-widget">
	            <img alt="Build Muscle, Lose Fat &amp; Stay Motivated!" src="https://cdn.muscleandstrength.com/sites/all/themes/mnsnew/images/signupbanner.jpg">
	            <div class="wrap">
	                <p>Keep Yourself Updated!!! Subscribe Now.</p>

                    <div class="qg-half">
                        <button class="btn-icon-muscle btn btn-blue half" type="submit">
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
    <div class="aside-shadow" style="top: 169.5px;"> </div>
    <div class="main-content">
        <div class="tabs clearfix"></div>
        <div class="contentMain">
            <div class="region region-content">
    			<div id="block-system-main" class="block block-system">
					<div class="content">
    					<div>
    					<div class="content">
							<h1 class="no-header">Search Results for "@{{query}}" @{{ message }}</h1>
					        <div class="in-page-search">

							    <input class="searchTerm span5" type="text" placeholder="What are you looking for" v-model="query">
							    <button class="search-button" type="button" @click="search()" v-if="!loading">
							    	<svg width="25" height="25">
							        <use xlink:href="#icon-search_bold"></use>
							        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/search_bold.png"></image>
							        </svg>
							    </button>
							    <button class="search-button" type="button" disabled="disabled" v-if="loading">
							    	<svg width="25" height="25">
							        <use xlink:href="#icon-search_bold"></use>
							        <image width="25" height="25" src="https://cdn.muscleandstrength.com/images/fallback/search_bold.png"></image>
							        </svg>
							    </button>

					        </div>
        <div id="cse-search-results">
        <div class="gsc-control-cse gsc-control-cse-en">
        <div class="gsc-control-wrapper-cse" dir="ltr" style="visibility: visible;">
        <div class="gsc-results-wrapper-nooverlay gsc-results-wrapper-visible">
        	<div class="gsc-tabsAreaInvisible"><span class="gs-spacer"> </span></div>
        	<div class="gsc-refinementsAreaInvisible"></div>
	        <div class="gsc-above-wrapper-area">
		        <table class="gsc-above-wrapper-area-container" cellspacing="0" cellpadding="0">
		        <tbody>
		        <tr>
			        <td class="gsc-result-info-container">
			        	<div class="gsc-result-info" v-if="error">
			        		@{{ error }}
			        	</div>
			        	<div class="gsc-result-info" id="resInfo-0">About 4,420 results (0.41 seconds)</div>
			        </td>
		        </tr>
		        </tbody>
		        </table>
	        </div>
        	<div class="gsc-adBlockNoHeight" style="height: 0px;"></div>
        	<div class="gsc-wrapper">
        	<div class="gsc-resultsbox-visible">
        	<div class="gsc-resultsRoot gsc-tabData gsc-tabdActive">
		        <div class="gsc-results gsc-webResult" style="display: block;">

			        <div class="gsc-webResult gsc-result" v-for="product in products">
				        <div class="gs-webResult gs-result">
					        <div class="gsc-thumbnail-inside">
					        	<div class="gs-title">
					        		<a class="gs-title" href="">
					        			@{{ product.title }}
					        		</a>
					        	</div>
					        </div>
					        <div class="gsc-url-top">
					        	<div class="gs-bidi-start-align gs-visibleUrl gs-visibleUrl-short">
					        		@{{ product.name }}
					        	</div>
					        	<div class="gs-bidi-start-align gs-visibleUrl gs-visibleUrl-long" style="word-break:break-all;">@{{ product.name }}</b>
					        	</div>
					        </div>
					        <table class="gsc-table-result">
					        	<tbody>
					        		<tr>
					        			<td class="gsc-table-cell-thumbnail gsc-thumbnail">
					        				<div class="gs-image-box gs-web-image-box gs-web-image-box-portrait">
					        					<a class="gs-image" href="">
					        						<img class="gs-image" :src="'uploads/product/' + product.image" alt="@{{ product.name }}">
					        					</a>
					        				</div>
					        			</td>
					        			<td onclick="" class="gsc-table-cell-snippet-close">
					        				<div class="gs-title gsc-table-cell-thumbnail gsc-thumbnail-left">
					        					<a class="gs-title" href="">
					        						@{{ product.name }}
					        					</a>
					        				</div>
						        			<div>
						        				<span></span>
						        			</div>
						        			<div class="gs-bidi-start-align gs-snippet">
							        			@{{ product.shortdes }}
											</div>
											<!-- <div class="gsc-url-bottom">
												<div class="gs-bidi-start-align gs-visibleUrl gs-visibleUrl-short" dir="ltr">
													www.muscleandstrength.com
												</div>
												<div class="gs-bidi-start-align gs-visibleUrl gs-visibleUrl-long" dir="ltr" style="word-break:break-all;">
													https://www.muscleandstrength.com/store/brands/<b>prosupps</b>
												</div>
											</div>
											<div class="gs-richsnippet-box" style="display: none;"></div>
											<div class="gs-per-result-labels" url="h"></div> -->
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- <div class="gs-watermark">
							<a href="" class="gs-watermark" target="_blank">clipped from Google - 1/2017</a>
						</div> -->
					</div>
				</div>
		</div></div></div></div></div></div></div>
    </div>
</div>
  </div>
</div>
  </div>
            </div><!-- End contentMain -->
        

            </div>
   
</div>
@endsection
@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
	{!! Html::script('js/apps.js') !!}
@endsection