@extends('layouts.app')

@section('content')

    <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/about/breadcrumb.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Forgot Password</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="active">Forgot Password</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- forgot password -->
        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <h3>Forgot Password</h3>
                            <p>Reset Your Account Password</p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn">Send Reset
                                    Link <i class="fa-solid fa-key"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- forgot password end -->

@endsection
