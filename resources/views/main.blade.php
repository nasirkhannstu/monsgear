<!DOCTYPE html>
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class=" iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class=" ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class=" ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class=" ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html dir="ltr" lang="en-US" class=" ie9 oldie"> <![endif]-->
<!--[if (gte IE 11)|(gt IEMobile 7)]><!--><html dir="ltr" lang="en-US" ><!--<![endif]-->

    <head>
        @include ('partials._head')
    </head>
    <body class="html front not-logged-in one-sidebar sidebar-second page-node"  itemscope itemtype="http://schema.org/WebPage">
        <div id="mns-page" class="mm-page">
            <div style="display:none;">
                @include('partials._displayNone') 
            </div>
            <div id="page">
                <div class="screen"></div>
                @include('partials._scroll')

                <a class="page-top" href="#">
                    <span>Top </span>
                    <svg style="width:2em; height:2em;"><use xlink:href="#icon-pagetop"/><image style="width:2em; height:2em;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" menu-data-src="https://cdn.muscleandstrength.com/images/fallback/pagetop.png"/></svg>
                </a>

                @include('partials._header')
                @include('partials._messages')
                @yield('content')
                @include('partials._others')
            </div>
            <div class="footer">
                @include('partials._footer')
            </div>     
            
        </div>
    </body>
    @include('partials._javascript')

</html>