@extends('main')
@section('title', '| Regeister')
@section('stylsheets')

    {!! Html::style('css/register.css') !!}
    {!! Html::style('css/register1.css') !!}
    {!! Html::style('css/register2.css') !!}
@endsection
@section('content')
    <div id="main-wrap">

    <div class="main-content">

    <h1 class="bottomBorder register-heading">Create an Account</h1>


    <div class="register-info">
        <div class="inner-wrap">
            <div class="info-header">Muscle &amp; Strength<br>Rewards</div>
            <ul class="info-list">
                <li>
                    <div class="icon">
                        <svg style="width:4.5em; height:4.5em; margin:.9em;">
                            <use xlink:href="#icon-referral-program-gray"/>
                            <image style="width:4.5em; height:4.5em; margin:.9em;"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/referral-program-gray.png"/>
                        </svg>
                    </div>
                    <div class="text">Earn points for shopping at M&amp;S, reviewing products and referring your friends!
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg style="width:4.5em; height:4.5em; margin:.9em;">
                            <use xlink:href="#icon-store-cart-gray"/>
                            <image style="width:4.5em; height:4.5em; margin:.9em;"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/store-cart-gray.png"/>
                        </svg>
                    </div>
                    <div class="text">Spend points on order discounts and exclusive gear!</div>
                </li>
                <li>
                    <div class="icon">
                        <svg style="width:4.5em; height:4.5em; margin:.9em;">
                            <use xlink:href="#icon-create-account-gray"/>
                            <image style="width:4.5em; height:4.5em; margin:.9em;"
                                   src="https://cdn.muscleandstrength.com/store/skin/frontend/mnsv4/default/images/fallback/create-account-gray.png"/>
                        </svg>
                    </div>
                    <div class="text">Get 10 points for creating an account!</div>
                </li>
            </ul>

        </div>
    </div>
    <form class="register-form" action="" method="post" id="form-validate">
        <input type="hidden" name="success_url" value="" />
        <input type="hidden" name="error_url" value="" />
        <input type="hidden" name="form_key" value="oIQlvyZ9iHcFnU7l" />

        <div class="row">

            <div class="register-name row customer-name">
                <div class="input-box name-firstname col-full">
                    <label for="firstname">
                        First Name            <span class="required">*</span>
                    </label>

                    <input type="text" id="firstname"
                           name="firstname"
                           value=""
                           title="First Name"
                           class="input-text required-entry"  />
                </div>

                <div class="input-box name-lastname col-full">
                    <label for="lastname">
                        Last Name            <span class="required">*</span>
                    </label>

                    <input type="text" id="lastname"
                           name="lastname"
                           value=""
                           title="Last Name"
                           class="input-text required-entry"  />
                </div>
            </div>    </div>
        <div class="section-break">&nbsp;</div>
        <div class="row">
            <div class="input-box col-full">
                <label for="email_address">
                    Email Address                <span class="required">*</span>
                </label>
                <input type="text" name="email" id="email_address"
                       value=""
                       title="Email Address" class="input-text validate-email required-entry"/>
            </div>
        </div>
        <div class="section-break">&nbsp;</div>


        <div class="row">
            <div class="input-box col-full">
                <label for="password">
                    Password                <span class="required">*</span>
                </label>
                <input type="password" name="password" id="password" title="Password"
                       class="input-text required-entry validate-password"/>
            </div>
            <div class="input-box col-full">
                <label for="confirmation">
                    Confirm Password                <span class="required">*</span>
                </label>
                <input type="password" name="confirmation" title="Confirm Password"
                       id="confirmation" class="input-text required-entry validate-cpassword"/>
            </div>
        </div>
        <div class="section-break">&nbsp;</div>
        <div class="fieldset rewards_referral_information">
            <div class="row col-full">
                <div class="field">
                    <label for="rewards_referral">
                        Referral Code            </label>
                    <div class="input-box">
                        <input type="text" name="rewards_referral" id="rewards_referral" class="input-text" value="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section-break">&nbsp;</div>
        <!--<h3 class="legend">Login Information</h3>-->


        <div class="newsletter smallerFont row col-full" style="line-height:2em;">
            <input type="checkbox" checked name="is_subscribed" title="Sign Up for Newsletter"
                   value="1"
                   id="is_subscribed"               class="floatLeft checkbox"/>
            <label
                    for="is_subscribed">Send me exclusive M&S deals, free sample offers and coupons!</label>
        </div>

        <div class="section-break">&nbsp;</div>

        <div class="g-recaptcha" data-sitekey="6LeQkw0TAAAAAPBf1NQOcbsB-oevpSueQd1TlrZn"></div>

        <div class="section-break">&nbsp;</div>

        <div class="col-full row">
            <span class="required smaller">* Required Fields</span>
        </div>
        <div class="section-break">&nbsp;</div>
        <div class="button-wrap">
            <button id="register-button-submit" type="submit" class="btn btn-green btn-lg btn-auto">Create Account</button>
        </div>
    </form>
    <script type="text/javascript">
        //<![CDATA[
        var dataForm = new VarienForm('form-validate', true);
        jQuery('.register-form').on('submit', function() {
            if (jQuery('[name=g-recaptcha-response]').val() == '') {
                jQuery('.g-recaptcha').append('<div class="validation-advice captcha-advice" id="advice-required-entry-confirmation">This is a required field.</div>');
                return false;
            } else {
                jQuery('.captcha-advice').remove();
                ga('send', 'event', 'button', 'submit', 'Create Account');
            }
        });
        //]]>
    </script>
    </div>
    </div>

@endsection




