<div class="scroll">
    <div class="logo">
                <a href="/">
                    <svg style="width:4em; height:2em; max-width:100%;">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-logo"></use>
                        <image style="width:4em; height:2em; max-width:100%;" src="https://cdn.muscleandstrength.com/images/logo.png"></image>
                    </svg>
                </a>
            </div>

            <ul class="scroll-menu">
                <li>
                    <a  href="/">Home
                    </a>
                </li>
                <li>
                    <a  href="/blog">Blog
                    </a>
                </li>
                <li>
                    <a  href="/about">About
                    </a>
                </li>
                <li>
                    <a href="/contact">Contact Us
                    </a>
                </li>

            </ul>

            <div class="scroll-search">
                <form action="" method="GET" class="google-form" id="google-cse-searchbox-form">

                    <input id="appendedInputButton" type="text" name="terms" placeholder="Search Monster Gear..." autocomplete="on">


                    <button class="search-button" type="submit">
                        <svg style="width:1em; height:1em;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-search_bold"></use>
                            <image style="width:1em; height:1em;" src="{{asset('uploads/icon/search_bold.png')}}"></image>
                        </svg>
                    </button>


                </form>
            </div>

            <div class="scroll-store-action-wrap">
                <div class="store-action help has-dropdown">
                    <a class="dtap" href="/store/help">
                        <svg style="width:2em; height:2em; max-width:100%;margin-bottom: -.2em;margin-top: .2em;" >
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-customer-support"></use>
                            <image style="width:2em; height:2em; max-width:100%;margin-bottom: -.2em;margin-top: .2em;"   src="{{asset('uploads/icon/customer-support.png')}}"></image>
                        </svg>
                    </a>

                    <div class="store-dropdown">
                        <ul class="nested-menu">

                            <li class="last"><span class="text open-chat"><svg style="width:1.3em; height:1.3em; margin-left:-.3em; margin-bottom: -0.25em; margin-right: 0.1em;">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-insta-comments-blue"></use>
                                <image style="width:1.3em; height:1.3em; margin-left:-.3em; margin-bottom: -0.25em; margin-right: 0.1em;" src="{{asset('uploads/icon/insta-comments-blue.png')}}"></image>
                            </svg> Live Chat</span></li>
                        </ul>
                        <div class="gray margTop10 acenter border-wrap"><svg style="width:1.3em; height:1.3em; margin-left:-.3em; margin-bottom: -0.25em; margin-right: 0.1em;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-support"></use>
                            <image style="width:1.3em; height:1.3em; margin-left:-.3em; margin-bottom: -0.25em;" src="{{asset('uploads/icon/support.png')}}"></image>
                        </svg> <span class="number-font">1-phone-number-9910</span></div>
                    </div>

                </div>


                <div class="store-action cart">
                    <a href="{{ route('product.shoppingCart') }}">

                        <div class="counter">
                            {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}
                        </div>

                        <svg style="width:2em; height:2em; max-width:100%;" >
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-store-cart"></use>
                            <image style="width:2em; height:2em; max-width:100%;"   src="{{asset('uploads/icon/store-cart.png')}}"></image>
                        </svg>
                    </a>
                </div>
                <div class="store-action account has-dropdown">


                    <svg class="default-user-image" style="width:2em; height:2em; max-width:100%; margin-top: .3em;margin-bottom: -.15em;" >
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-user-login"></use>
                        <image style="width:2em; height:2em; max-width:100%; margin-top: .3em;margin-bottom: -.15em;"   src="{{asset('uploads/icon/user-login.png')}}"></image>
                    </svg>

                    <img class="authenticated-user-image" src="">

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

                        <div class="user-login">
                            <form class="pre-validate" action="{{ url('/login') }}" method="post" id="user-login" >
                                {{ csrf_field() }}
                                <div class="invalid-message message red"></div>
                                <div class="form-item form-type-textfield form-item-name">
                                    <input type="email" placeholder="email" name="email" value="{{ old('email') }}" class="input-text" />
                                </div>

                                <div class="form-item form-type-password form-item-pass">
                                    <input type="password" placeholder="password" name="password" class="input-text" required/>
                                </div>

                                <input type="hidden" value="" name="current_url" />

                                <div class="form-actions form-wrapper">
                                    <button type="submit" class="btn btn-flat-submit form-submit aloading basic-load load-blue"
                                            name="send" id="edit-submit"><span class="init">Login</span><span
                                            class="loading"><span class="svg-wrap"><svg style="width:.8em; height:.8em;">
                                        <use xlink:href="#icon-update-white"/>
                                        <image style="width:.8em; height:.8em;"
                                               src="{{asset('uploads/icon/update-white.png')}}"/>
                                    </svg></span> Loading...</span></button>
                                    <a rel="nofollow" class="btn btn-flat-gray btn-lg form-button" href="/register">Register</a>
                                </div>

                            </form>

                            <a class="forgot-text" rel="nofollow" href="/password/reset">Forgot Password?</a>

                        </div>
                        @endif

                    </div>
                </div>
            </div>

        </div>