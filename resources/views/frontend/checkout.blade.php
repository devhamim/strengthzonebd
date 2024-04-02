@extends('frontend.layout.app')
@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Checkout</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{ url('/') }}">home</a></li>
						<li>Checkout</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!--Checkout Page-->
    <div class="checkout-page">
        <div class="auto-container">

            <!--Billing Details-->
            <div class="billing-details">
                <div class="shop-form">
                    <form method="post" action="{{ route('checkout') }}">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-12 col-sm-12">

                                <div class="sec-title"><h2>Billing Details</h2></div>
                        		<div class="billing-inner">
                                    <div class="row clearfix">

                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Name <sup>*</sup></div>
                                            <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ Auth::guard('customerlogin')->user()->name }}" placeholder="Name" required>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Email <sup>*</sup></div>
                                            <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ Auth::guard('customerlogin')->user()->email }}" placeholder="Email" required>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Number <sup>*</sup></div>
                                            <input type="number" class="@error('number') is-invalid @enderror" name="number" value="" placeholder="Number" required>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Address </div>
                                            <input type="text" class="" name="address" value="" placeholder="Street Address">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Order Notes</div>
                                            <textarea name="note" placeholder="Note about your order. e.g. special note for delivery"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="sec-title"><h2>Your Order</h2></div>
                                <div class="shop-order-box">
                                	<ul class="order-list">
                                    	<li>Prodcut<span> {{ $courses->title }}</span></li>
                                        <li>Price<span>{{ $courses->price }} Tk</span></li>
                                        <li>Discount<span>{{ $courses->discount }}%</span></li>
                                        <li>Total<span class="dark">{{ $courses->total }} Tk</span></li>
                                    </ul>
                                    <input type="hidden" name="course_id" value="{{ $courses->id }}">

                                    <!--Place Order-->
                                    <div class="place-order">
                                        <!--Payment Options-->
                                        <div class="payment-options">
                                            <ul>
                                            	<li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="bkash" id="payment-2" checked>
                                                        <label for="payment-2"><strong>Bkash</strong>
                                                            @if($setting->first()->number != null)
                                                        	    <span class="small-text">{{ $courses->total }} Tk Send Money This Number: <br>{{ $setting->first()->number }} </span>
                                                            @endif
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <button type="submit" class="theme-btn btn-style-three"><span class="txt">Place Order</span></button>

                                    </div>
                                    <!--End Place Order-->

                                </div>


                            </div>
                        </div>
                    </form>

                </div>

            </div><!--End Billing Details-->
    	</div>
    </div>

@endsection
