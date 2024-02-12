@extends('frontend.layouts.master')
@section('title', 'Login')
@section('content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href='{{route('home')}}' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Pages <span></span> My Account
        </div>
    </div>
</div>
<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                <div class="row">
                    <div class="col-lg-6 pr-30 d-none d-lg-block">
                        <img class="border-radius-15" src="{{asset('assets/frontend')}}/imgs/page/login-1.png" alt="" />
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="login_wrap widget-taber-content background-white">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h1 class="mb-5">Login</h1>
                                    <p class="mb-30">Don't have an account? <a href="{{route('register')}}">Create here</a></p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" required autofocus autocomplete="username" placeholder="Email *" />
                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Your password *" />
                                    </div>

                                    <div class="login_footer form-group mb-50">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" id="remember_me" type="checkbox" name="remember"/>
                                                <label class="form-check-label" for="remember_me"><span>Remember me</span></label>
                                            </div>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-heading btn-block hover-up">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
