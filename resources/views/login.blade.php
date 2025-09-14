@extends('layouts.app')

@section('content')

    <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/about/breadcrumb.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Login</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i>Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- login area -->
        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <h3>Login</h3>
                            <p>login with your visapos account</p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Your Password">
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="forgot-password.html" class="forgot-pass">Forgot Password?</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn">Login <i class="fa-solid fa-sign-in"></i></button>
                            </div>
                        </form>

                        <div class="login-footer">
                            <p>Don't have an account? <a href="register.html">Register.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- login area end -->

@endsection
