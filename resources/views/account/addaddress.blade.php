@extends('main')
@section('title', '| Moonster-Gear')
@section('stylsheets')
    {!! Html::style('css/account.css') !!}
@endsection
@section('content')
<div id="main-wrap">
    <div class="breadcrumb">
        @include('partials._messages')
    </div>

    <!--[if (gte IE 9)|(gt IEMobile 7)]><!-->
    <!--<![endif]-->

    <div class="aside">
        <div class="account-nav">
            <span class="title">Account Navigation<span class="inline-caret">›</span></span>
            <div class="nav-wrap">
                <a class="dashboard" href="{{url('myaccount')}}">
                    <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                        <use xlink:href="#icon-account"></use>
                        <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/account.png"></image>
                    </svg>
                    Your Home</a>

                <a class="orders" href="{{url('account/showorder')}}">
                    <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                        <use xlink:href="#icon-history"></use>
                        <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/history.png"></image>
                    </svg>
                    Order History</a>

                <a class="referral" href="">
                    <svg style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;">
                        <use xlink:href="#icon-referral-program"></use>
                        <image style="width:1.5em; height:1.5em; margin-bottom: -0.4em; margin-right: .5em;" src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/referral-program.png"></image>
                    </svg>
                    Manage Account</a>
            </div>
        </div>			</div>
    <div style="top: 157.25px;" class="aside-shadow"></div>

    <div class="main-content">
        <h1>Add/Edit Address</h1>

        {!! Form::open(array('route' => 'account.saveaddress','data-parsley-validate'=>'', 'class' => 'fstyle-one')) !!}
            <div class="row">

                <div class="row customer-name">

                    <div class="input-box name-firstname col-left">

                        <label for="firstname">
                            First Name            <span class="required">*</span>
                        </label>

                        <span class="required-tag">*</span>

                        @if($userinfo)
                        {{Form::text('fname',$userinfo->fname,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                        @else
                        {{Form::text('fname',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255','placeholder' =>'First Name'))}}
                        @endif

                    </div>


                    <div class="input-box name-lastname col-right">

                        <label for="lastname">
                            Last Name            <span class="required">*</span>
                        </label>

                        <span class="required-tag">*</span>
                        @if(isset($userinfo))
                        {{Form::text('lname',$userinfo->lname,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                        @else
                        {{Form::text('lname',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255','placeholder' =>'Last Name'))}}
                        @endif
                    </div>

                </div>
            </div>
            <div class="section-break">&nbsp;</div>

            <div class="col-full">
                @if(isset($userinfo))
                {{Form::text('company',$userinfo->company,array('class' => 'input-text','maxlength'=>'255'))}}
                @else
                {{Form::text('company',null,array('class' => 'input-text','maxlength'=>'255','placeholder' =>'Company'))}}
                @endif
            </div>
            <div class="section-break">&nbsp;</div>

            <div class="col-full">
                <span class="required-tag">*</span>
                @if(isset($userinfo))
                {{Form::text('address',$userinfo->address,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                @else
                {{Form::text('address',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255','placeholder' =>'Address'))}}
                @endif
            </div>
            <div class="section-break">&nbsp;</div>
            <div class="row">
                <div class="input-box col-left">
                    <span class="required-tag">*</span>
                    @if(isset($userinfo))
                    {{Form::text('city',$userinfo->city,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                    @else
                    {{Form::text('city',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255','placeholder' =>'City'))}}
                    @endif
                </div>
                <div class="input-box col-right">
                    @if(isset($userinfo))
                    {{Form::text('state',$userinfo->state,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                    @else
                    {{Form::text('state',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255','placeholder' =>'State'))}}
                    @endif
                </div>
            </div>
            <div class="section-break">&nbsp;</div>
            <div class="row">
                <div class="input-box col-left">
                    <span class="required-tag">*</span>
                    @if(isset($userinfo))
                    {{Form::text('zip',$userinfo->zip,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                    @else
                    {{Form::text('zip',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255','placeholder' =>'Zip Code'))}}
                    @endif
                </div>
                <div class="input-box col-right">
                    <span class="required-tag">*</span>
                    @if(isset($userinfo))
                    {{Form::text('email',$userinfo->email,array('class' => 'input-text', 'required'=>'','maxlength'=>'255'))}}
                    @else
                    {{Form::text('email',null,array('class' => 'input-text', 'required'=>'','maxlength'=>'255','placeholder' =>'E-mail'))}}
                    @endif
                </div>
            </div>
            <div class="section-break">&nbsp;</div>
            <div class="row">
                <div class="input-box col-left">
                    @if(isset($userinfo))
                    {{Form::text('board',$userinfo->board,array('class' => 'input-text','maxlength'=>'255'))}}
                    @else
                    {{Form::text('board',null,array('class' => 'input-text','maxlength'=>'255','placeholder' =>'Board Id'))}}
                    @endif
                </div>
                <div class="input-box col-right">
                    @if(isset($userinfo))
                    {{Form::text('info',$userinfo->info,array('class' => 'input-text','maxlength'=>'255'))}}
                    @else
                    {{Form::text('info',null,array('class' => 'input-text','maxlength'=>'255','placeholder' =>'Additional Information'))}}
                    @endif
                </div>
            </div>
            <!-- <div class="section-break">&nbsp;</div>
            <div class="row">
                <p><svg style="margin-bottom:-2px" width="15" height="15"><use xlink:href="#icon-check-mark"></use><image width="15" height="15" src="/store/skin/frontend/mnsv4/default/images/fallback/check-mark.png"></image></svg> <span class="gray">Default Shipping Address</span></p>
            </div>
            <div class="section-break">&nbsp;</div>
            <div class="col-full">
                <span class="required smaller">* Required Fields</span>
            </div> -->
            <div class="section-break">&nbsp;</div>
            {{Form::submit('Order Now',array('class' => 'btn btn-blue btn-auto'))}}

        {!! Form::close() !!}
        </div>

</div>
@endsection