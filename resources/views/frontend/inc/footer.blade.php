<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .f-icon {
        font-size: 22px;
        color: #d40000;
    }

    .box4 {
        /*border-right:1px solid #2e2e2e ;*/
    }
</style>
<section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <p style="text-align:center; font-size:18px;"><span class="f-icon"><i
                                    class="las la-truck"></i></span> 24 hour delivery </p>
                    </div>
                    <div class="col-lg-6">
                        <p style="text-align:center; font-size:18px;"><span class="f-icon"><i
                                    class="las la-money-bill"></i></span> Cash on delivery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="text-center text-md-left">
                    <ul class="list-inline mb-2 mt-2">
                        @if (get_setting('payment_method_images') != null)
                            @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                                <li class="list-inline-item">
                                    <span>Pay with: </span> <img src="{{ uploaded_asset($value) }}" height="40"
                                        style="max-height: 30px">
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-9">
                <a href="{{ route('home') }}" class="d-block mt-2">
                    @if (get_setting('footer_logo') != null)
                        <img class="lazyload custom_logo" src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                            data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" alt="{{ env('APP_NAME') }}"
                            height="44">
                    @else
                        <img class="lazyload" src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                            data-src="{{ asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" height="44">
                    @endif
                </a><br>
                @php
                    $support_policy = \App\Models\Page::where('type', 'support_policy_page')->first();
                @endphp


                <div class="row container-fluid">
                    <div>
                        <!--class="text-center"-->
                            @php
                                echo $support_policy->getTranslation('content');
                            @endphp
                    </div>
                </div>
                <!--<p>CropLand.com is an online shop available in Dhaka, Chattogram, Jashore, Khulna, Sylhet, Gazipur, Rajshahi and Narayanganj. We believe time is valuable to our fellow residents, and that they should not have to waste hours in traffic, brave bad weather and wait in line just to buy basic necessities like eggs! This is why CropLand delivers everything you need right at your door-step and at no additional cost.</p>-->
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <h5 style="text-align:center; color:#484747FF;">Customer Service</h5>
                        <hr>
                        <li style="list-style:none;"><a class="text-reset d-block"
                                href="https://portfolio.softcreation.tech/chaldal/contactus">
                                <h4 class="h6 text-center" style="color:#484747FF !important; font-size:14px;">
                                    {{ translate('Contact Us') }}</h4>
                            </a>
                        </li>
                        <li style="list-style:none;"><a class="text-reset d-block" href="{{ route('terms') }}">
                                <h4 class="h6 text-center" style="color:#484747FF !important; font-size:14px;">
                                    {{ translate('FAQ') }}</h4>
                            </a>
                        </li>
                    </div>
                    <div class="col-lg-4">
                        <h5 style="text-align:center; color:#484747FF;">About Us</h5>
                        <hr>
                        <li style="list-style:none;"><a class="text-reset d-block" href="{{ route('privacypolicy') }}">
                                <h4 class="h6 text-center" style="color:#484747FF !important; font-size:14px;">
                                    {{ translate('Privacy Policy') }}</h4>
                            </a>
                        </li>
                        <li style="list-style:none;"><a class="text-reset d-block" href="{{ route('terms') }}">
                                <h4 class="h6 text-center" style="color:#484747FF !important; font-size:14px;">
                                    {{ translate('Terms of Use') }}</h4>
                            </a>
                        </li>
                    </div>
                    <div class="col-lg-4">
                        <h5 style="text-align:center; color:#484747FF;">For Business </h5>
                        <hr>
                        <li style="list-style:none;"><a class="text-reset d-block"
                                href="	https://portfolio.softcreation.tech/chaldal/corporate">
                                <h4 class="h6 text-center" style="color:484747FF !important; font-size:14px;">
                                    {{ translate('Corporate') }}</h4>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="w-300px mw-100 mx-auto mx-md-0 mt-2 ">
                    @if (get_setting('play_store_link') != null)
                        <a href="{{ get_setting('play_store_link') }}" target="_blank"
                            class="d-inline-block mr-3 ml-1">
                            <img src="{{ asset('assets/img/play.png') }}" class="mx-100 h-40px">
                        </a>
                    @endif
                    @if (get_setting('app_store_link') != null)
                        <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">
                            <img src="{{ asset('assets/img/app.png') }}" class="mx-100 h-40px">
                        </a>
                    @endif
                </div>

                <div class="social-icons mt-2">


                    @if (get_setting('show_social_links'))
                        <ul class="list-inline my-3 my-md-0 social text-center">
                            @if (get_setting('facebook_link') != null)
                                <li class="list-inline-item">
                                    <a href="{{ get_setting('facebook_link') }}" target="_blank" class="facebook"><i
                                            class="lab la-facebook-f"></i></a>
                                </li>
                            @endif
                            @if (get_setting('twitter_link') != null)
                                <li class="list-inline-item">
                                    <a href="{{ get_setting('twitter_link') }}" target="_blank" class="twitter"><i
                                            class="lab la-twitter"></i></a>
                                </li>
                            @endif
                            @if (get_setting('instagram_link') != null)
                                <li class="list-inline-item">
                                    <a href="{{ get_setting('instagram_link') }}" target="_blank"
                                        class="instagram"><i class="lab la-instagram"></i></a>
                                </li>
                            @endif
                            @if (get_setting('youtube_link') != null)
                                <li class="list-inline-item">
                                    <a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube"><i
                                            class="lab la-youtube"></i></a>
                                </li>
                            @endif
                            @if (get_setting('linkedin_link') != null)
                                <li class="list-inline-item">
                                    <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin"><i
                                            class="lab la-linkedin-in"></i></a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>


                <div class="calloremail mt-2 float-lg-end text-center">
                    <ul class="list-unstyled text-center">
                        <li class="mb-2">
                            <span><strong
                                    class="d-block float-lg-end text-center">{{ get_setting('contact_phone') }}</strong></span>
                        </li>
                        <li class="mb-2">
                            <a href="mailto:{{ get_setting('contact_email') }}"
                                class="text-reset float-lg-end text-center"><strong>
                                    {{ get_setting('contact_email') }}</strong></a>
                        </li>
                        <li class="mb-2">
                            <span><strong
                                    class="d-block float-lg-end text-center">{{ get_setting('contact_address', null, App::getLocale()) }}</strong></span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="pt-3 pb-7 pb-xl-3 bg-white text-light"></footer>
<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top"
    style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i
                    class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 fw-600') }}">{{ translate('Home') }}</span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i
                    class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 fw-600') }}">{{ translate('Categories') }}</span>
            </a>
        </div>
        @php
            if (auth()->user() != null) {
                $user_id = Auth::user()->id;
                $cart = \App\Models\Cart::where('user_id', $user_id)->get();
            } else {
                $temp_user_id = Session()->get('temp_user_id');
                if ($temp_user_id) {
                    $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
                }
            }
        @endphp
        <div class="col-auto">
            <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3" id="cart_items">
                <span
                    class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                    style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span
                    class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'], 'opacity-100 fw-600') }}">
                    {{ translate('Cart') }}
                    @php
                        $count = isset($cart) && count($cart) ? count($cart) : 0;
                    @endphp
                    (<span class="cart-count">{{ $count }}</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i
                        class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 text-primary') }}"></i>
                    @if (Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                        <span
                            class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"
                            style="right: 7px;top: -2px;"></span>
                    @endif
                </span>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 fw-600') }}">{{ translate('Notifications') }}</span>
            </a>
        </div>
        <div class="col">
            @if (Auth::check())
                @if (isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ asset('assets/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @else
                    <a href="javascript:void(0)"
                        class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb"
                        data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ asset('assets/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @endif
            @else
                <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
                    <span class="d-block mx-auto">
                        <img src="{{ asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        </div>
    </div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif
