<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('partials._ahead')
    </head>
    <body>
        <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('partials._asidebar')
            </div>
            <div class="col-md-9">
                @include('partials._anav')

                @yield('content')
                
                @include('partials._afooter')
            </div> 
        </div>
        </div>
        @include('partials._ajavascript')
    </body>
</html>