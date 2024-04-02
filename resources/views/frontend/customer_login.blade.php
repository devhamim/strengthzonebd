@extends('frontend.layout.app')
@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Login / Register</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{ url('/') }}">home</a></li>
						<li>Login / Register</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">

                    <div class="sec-title">
                        <h2>Login Now</h2>
						<div class="separate"></div>
                    </div>

                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="post" action="{{ route('customer.login') }}">
                        @csrf
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="email" value="" placeholder="Emai Address*">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password" value="" placeholder="Enter Password">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="submit" class="theme-btn btn-style-three"><span class="txt">Login Now</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">

                    <div class="sec-title">
                        <h2>Register Here</h2>
						<div class="separate"></div>
                    </div>

                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form method="post" action="{{ route('customer.register') }}">
                            @csrf
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Emai Address*" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password" value="" placeholder="Enter Password" required>
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="submit" class="theme-btn btn-style-three"><span class="txt">Register here</span></button>
                                </div>
                                <div class="form-group submit-text pull-right">
                                	* You must be a free registered to submit content.
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--End Register Section-->
@endsection
