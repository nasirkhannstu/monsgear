<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>

<script src="/js/app.js"></script>
<div class="website-header">

        <div class="menu-button">
            <a class="hamburger" href="#menu">
                <span class="ingrediant"></span>
                <span class="ingrediant"></span>
                <span class="ingrediant"></span>
                <div class="text">Menu</div>
            </a>
        </div>
        <div class="mobile-search-button has-dropdown">
    <span class="white">
      <svg  style="width:1.5em; height:1.5em;">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-search_bold"></use>
          <image style="width:1.5em; height:1.5em;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/search_bold.png')}}"></image>
      </svg>
    </span>
    <span class="blue">
    <svg style="width:1.5em; height:1.5em;">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-search-bold-blue"></use>
        <image style="width:1.5em; height:1.5em;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/search-bold-blue.png')}}"></image>
    </svg>
  </span>


            <div class="mobile-search">
                <form action="" method="GET" class="google-form" id="google-cse-searchbox-form">

                    <input id="appendedInputButton" type="text" name="terms" placeholder="Search Monster gear..." autocomplete="on">


                    <button class="search-button" type="submit">
                        <svg style="width:1em; height:1em;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-search_bold"></use>
                            <image style="width:1em; height:1em;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/search_bold.png')}}"></image>
                        </svg>
                    </button>

                    <div class="search-toggle">
                        <select name='options'>

                        </select>
                    </div>
                </form>
            </div>

        </div>


        <div class="logo">
            <a href="/" alt="Monster Gear">


                    <image style="width:6em; height:3.5em; max-width:100%;" src="{{asset('uploads/logo.png')}}" ></image>

            </a>
        </div>
        <div class="mobile-logo">
            <a href="/" alt="monster-gear">


                    <image style="width:4.5em; height:2.5em; max-width:100%;" src="{{asset('uploads/logo.png')}}" ></image>

            </a>
        </div>
        <div class="search">
            <form action="" method="GET" class="google-form" id="google-cse-searchbox-form">

                <input id="appendedInputButton" type="text" name="terms" placeholder="Search Monster gear ..." autocomplete="on">


                <button class="search-button" type="submit">
                    <svg style="width:1em; height:1em;">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-search_bold"></use>
                        <image style="width:1em; height:1em;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/search_bold.png')}}"></image>
                    </svg>
                </button>

                <div class="search-toggle">

                </div>
            </form>
        </div>

        <div class="store-action-wrap">
            <div class="store-action help has-dropdown">
                <a class="dtap" href="/store/help">
                    <svg style="width:2em; height:2em; max-width:100%;margin-bottom: -.2em;margin-top: .2em;" >
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-customer-support"></use>
                        <image style="width:2em; height:2em; max-width:100%;margin-bottom: -.2em;margin-top: .2em;"   src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/customer-support.png')}}"></image>
                    </svg>
        <span class="text">Help
          <span class="white">
            <svg style="width:.4em; height:.4em; margin-top:-.6em">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-white"></use>
                <image style="width:.4em; height:.4em; margin-top:-.6em"  src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/caret-white.png')}}"></image>
            </svg>
          </span>
          <span class="blue">
            <svg style="width:.4em; height:.4em; margin-top:-.6em">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-blue"></use>
                <image style="width:.4em; height:.4em; margin-top:-.6em"  src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/caret-blue.png')}}"></image>
            </svg>
          </span>
        </span>
                </a>

                <div class="store-dropdown">

                    <div class="gray margTop10 acenter border-wrap"><svg style="width:1.3em; height:1.3em; margin-left:-.3em; margin-bottom: -0.25em; margin-right: 0.1em;">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-support"></use>
                        <image style="width:1.3em; height:1.3em; margin-left:-.3em; margin-bottom: -0.25em;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" menu-data-src="{{asset('uploads/icon/support.png')}}"></image>
                    </svg> <span class="number-font">+507 205-1600</span></div>
                </div>

            </div>



            <div class="store-action cart">
                <a class="" href="{{ route('product.shoppingCart') }}">

                    <div class="counter">
                        {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}
                    </div>

                    <svg style="  width: 2em; height: 2em; max-width: 100%; margin-top: 0.45em; margin-bottom: -0.45em;margin-left: -0.2em;" >
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-store-cart"></use>
                        <image style="  width: 2em; height: 2em; max-width: 100%; margin-top: 0.45em; margin-bottom: -0.45em;margin-left: -0.2em;"   src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/store-cart.png')}}"></image>
                    </svg>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="store-action account has-dropdown">

                <svg class="default-user-image" style="width:2em; height:2em; max-width:100%; margin-top: .3em;margin-bottom: -.15em;" >
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-user-login"></use>
                    <image style="width:2em; height:2em; max-width:100%; margin-top: .3em;margin-bottom: -.15em;"   src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="{{asset('uploads/icon/user-login.png')}}"></image>
                </svg>

                <img class="authenticated-user-image" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" >

        <span class="text show-auth">
          Account
          <span class="white">
            <svg style="width:.4em; height:.4em; margin-top:-.6em">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-white"></use>
                <image style="width:.4em; height:.4em; margin-top:-.6em"  src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" menu-data-src="{{asset('uploads/icon/caret-white.png')}}"></image>
            </svg>
          </span>
          <span class="blue">
            <svg style="width:.4em; height:.4em; margin-top:-.6em">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-blue"></use>
                <image style="width:.4em; height:.4em; margin-top:-.6em"  src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" menu-data-src="{{asset('uploads/icon/caret-blue.png')}}"></image>
            </svg>
          </span>
        </span>


        <span class="text hide-auth">
          Login
          <span class="white">
            <svg style="width:.4em; height:.4em; margin-top:-.6em">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-white"></use>
                <image style="width:.4em; height:.4em; margin-top:-.6em"  src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" menu-data-src="{{asset('uploads/icon/caret-white.png')}}"></image>
            </svg>
          </span>
          <span class="blue">
            <svg style="width:.4em; height:.4em; margin-top:-.6em">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-blue"></use>
                <image style="width:.4em; height:.4em; margin-top:-.6em"  src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" menu-data-src="{{asset('uploads/icon/caret-blue.png')}}"></image>
            </svg>
          </span>
        </span>

                <div class="store-dropdown">
                    @if(!Auth::guest())
                    <div class="user-account" style="display:block">
                        <div class="welcome">
                            Welcome ,  {{ Auth::user()->name }}
                        </div>

                        <ul class="account-menu">
                            <li><a rel="nofollow" href="{{url('myaccount')}}"><svg style="width:1.3em; height:1.3em; margin-bottom:-.3em; margin-right: 0.1em;"><use xlink:href="#icon-account"/><image style="width:1.3em; height:1.3em; margin-bottom:-.3em; margin-right: 0.1em;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" menu-data-src="{{asset('uploads/icon/account.png')}}"/></svg> My Account</a></li>

                            <li><a rel="nofollow" href="{{url('account/showorder')}}"><svg style="width:1.3em; height:1.3em; margin-bottom:-.3em; margin-right: 0.1em;"><use xlink:href="#icon-history"/><image style="width:1.3em; height:1.3em; margin-bottom:-.3em; margin-right: 0.1em;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" menu-data-src="{{asset('uploads/icon/history.png')}}"/></svg> Order History</a></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><svg style="width:1.3em; height:1.3em; margin-bottom:-.3em; margin-right: 0.1em;"><use xlink:href="#icon-logout"/><image style="width:1.3em; height:1.3em; margin-bottom:-.3em; margin-right: 0.1em;" /></svg>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>

                    </div>
                    @else

                    <div class="user-login"  style="display:block">


                        <form class="pre-validate" action="{{ url('/login') }}" method="post" id="user-login" >
                            {{ csrf_field() }}
                            <div class="invalid-message message red"></div>
                            <div class="form-item form-type-textfield form-item-name">
                                <input type="email" placeholder="email" name="email" value="{{ old('email') }}" class="input-text" required/>
                            </div>

                            <div class="form-item form-type-password form-item-pass">
                                <input type="password" placeholder="password" name="password" class="input-text" />
                            </div>

                            <input type="hidden" value="" name="current_url" />
                            <div class="form-actions form-wrapper">
                                <button type="submit" class="btn btn-flat-submit form-submit aloading basic-load load-blue"
                                        name="send" id="edit-submit"><span class="init">Login</span><span
                                        class="loading"><span class="svg-wrap"><svg style="width:.8em; height:.8em;">
                                    <use xlink:href="#icon-update-white"/>
                                    <image style="width:.8em; height:.8em;"
                                           src="https://cdn.muscleandstrength.com/images/fallback/update-white.png"/>
                                </svg></span> Loading...</span></button>
                                <a rel="nofollow" class="btn btn-flat-gray btn-lg form-button" href="/register">Register</a>
                            </div>

                        </form>

                        <a rel="nofollow" class="forgot-text" href="/password/reset">Forgot Password?</a>

                    </div>
                        @endif


                </div>
            </div>

            {{--Send email--}}

            <div class="store-action help has-dropdown">
                <a class="dtap" href="mailto:info@mymonsterlabs.com">


                        <image style="width:2em; height:2em; max-width:100%;margin-bottom: -.2em;margin-top: .2em;"    src="{{asset('uploads/icon/sendemail.png')}}"></image>

        <span class="text">Send Email
          <span class="white">


                <image style="width:.4em; height:.4em; margin-top:-.6em"   src="{{asset('uploads/icon/sendemail.png')}}"></image>

          </span>
          <span class="blue">


                <image style="width:.4em; height:.4em; margin-top:-.6em"   src="{{asset('uploads/icon/sendemail.png')}}"></image>

          </span>
        </span>
                </a>



            </div>
        </div>
        <div class="navigation">
            <ul class="nav-tree">
                <li>
                    <a class="branch-link" href="/">Home
                    </a>
                </li>

                <li>
                    <a class="branch-link" href="{{url('blog')}}">Blog
                    </a>
                </li>
                <li>
                    <a class="branch-link" href="{{url('about')}}">About
                    </a>
                </li>
                <li>
                    <a class="branch-link" href="{{url('contact')}}">Contact Us
                    </a>
                </li>

            </ul>
        </div>
    </div>