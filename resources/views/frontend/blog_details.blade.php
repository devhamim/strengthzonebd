@extends('frontend.layout.app')

@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Latest News</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{ url('/') }}">home</a></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->


	<!--Sidebar Page Container-->
    <div class="sidebar-page-container style-two">
    	<div class="auto-container">
        	<div class="row clearfix">

				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<!-- Blog Single -->
                	<div class="blog-single">
						<div class="inner-box">
							<div class="image">
								<img src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									{{-- <li><span class="icon flaticon-folder"></span> {{ $blogs->first()->category}}</li> --}}
                                    @if ($blogs->first()->added_by != null)
                                        <li><span class="icon flaticon-user-1"></span> {{ $blogs->first()->rel_to_user->name }}</li>
                                    @endif
									<li><span class="icon flaticon-comment-1"></span> {{ $blog_comment_count }}</li>
									<li><span class="icon flaticon-calendar-1"></span>{{ $blogs->first()->created_at->format('d-M-Y') }}</li>
								</ul>
								<h3>{{ $blogs->first()->title }}</h3>
								<p>{!! $blogs->first()->description !!}</p>

								<!-- Post Share Options-->
								<div class="post-share-options">
									<div class="post-share-inner clearfix">
										{{-- <div class="pull-left tags"><span>Post Tags: </span><a href="#">Fit,</a> <a href="#">gym, </a><a href="#">fitness,</a> <a href="#">Cardio</a></div> --}}
										<ul class="social-box pull-right">
											<span class="flaticon-share-1"></span>
											<li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
											<li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li class="twitter"><a href="#"><span class="fa fa-google"></span></a></li>
											<li class="linkedin"><a href="#"><span class="fa fa-whatsapp"></span></a></li>
										</ul>
									</div>
								</div>

								<!-- Comments Area -->
								<div class="comments-area">
									<div class="group-title">
										<h4>{{ $blog_comment_count }} Comments</h4>
									</div>

                                    @foreach ($blog_comment as $comment)
                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb">
                                                    <img src="{{ asset('frontend') }}/images/resource/author-6.jpg" alt="">
                                                </div>
                                                <div class="comment-info clearfix"><strong>{{ $comment->name }} </strong><div class="comment-time">{{$comment->created_at->format('d M Y')}}</div></div>
                                                <div class="text">{{$comment->message}}</div>
                                            </div>
                                        </div>
                                    @endforeach
								</div>

								<!-- Comments Form -->
								<div class="comments-form">
									<div class="group-title">
										<h4>Leave Reply</h4>
									</div>

									<!-- Default Form -->
									<div class="default-form style-two">

										<!-- Default Form -->
										<form method="post" action="{{ route('blog.comment') }}" id="contact.html">
                                            @csrf
											<div class="row clearfix">

												<div class="col-lg-6 col-md-6 col-sm-12 form-group">
													<input type="text" name="name" placeholder="Name" required>
												</div>

												<div class="col-lg-6 col-md-6 col-sm-12 form-group">
													<input type="email" name="email" placeholder="Email" required>
												</div>

												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<textarea name="message" placeholder="Your Comments"></textarea>
												</div>
                                                <input name="blogs_id" class="form-control" type="hidden" value="{{ $blogs->first()->id }}" />
												<div class="form-group clearfix col-lg-12 col-md-12 col-sm-12">
													<div class="btn-three-outer"><button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Sand Now</span></button></div>
												</div>

											</div>
										</form>

										<!--End Default Form -->
									</div>


								</div>

							</div>
						</div>
                    </div>
                </div>
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">

						<!-- Categories Widget -->
						{{-- <div class="sidebar-widget categories-widget">
							<div class="sidebar-title">
								<h4>Categories</h4>
							</div>
							<div class="widget-content">
								<ul class="blog-cat">
									<li><a href="#">FITNESS <span>( 24 )</span></a></li>
									<li><a href="#">HEALTH  <span>( 03 )</span></a></li>
									<li><a href="#">LIFESTYLE <span>( 01 )</span></a></li>
									<li><a href="#">NUTRITION <span>( 02 )</span></a></li>
									<li><a href="#">SPORT SCIENCE <span>( 10 )</span></a></li>
									<li><a href="#">TRAINING PROGRAM <span>( 02 )</span></a></li>
								</ul>
							</div>
						</div> --}}

						<!-- Categories Widget -->
						<div class="sidebar-widget popular-posts">
							<div class="sidebar-title">
								<h4>Recent Post</h4>
							</div>
							<div class="widget-content">
                                @foreach ($latest_blogs->take(6) as $latest)
                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><img src="{{ asset('uploads/blog') }}/{{ $latest->image }}" alt="">
                                                <a href="{{ route('our.blog.details', $latest->slug) }}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                            <div class="text"><a href="{{ route('our.blog.details', $latest->slug) }}">{{ $latest->title }}</a></div>
                                            <div class="post-info">{{ $latest->created_at->format('d M Y') }}</div>
                                        </div>
                                    </article>
                                @endforeach
							</div>
						</div>

						<!-- Search -->
						{{-- <div class="sidebar-widget newsletter-box">
							<div class="sidebar-title">
								<h4>GET NEWSLETTER</h4>
							</div>
							<form method="post" action="https://expert-themes.com/html/gym/contact.html">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Entery Email" required>
									<button type="submit"><span class="icon flaticon-paper-plane-1"></span></button>
								</div>
							</form>
						</div> --}}

						<!-- Popular Posts -->

						<!-- Instagram Widget -->
						{{-- <div class="sidebar-widget instagram-widget">
							<div class="sidebar-title">
								<h4>Instagram</h4>
							</div>
							<div class="widget-content">
								<div class="clearfix">
									<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/instagram-1.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/instagram-2.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/instagram-3.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/instagram-4.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/instagram-5.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/instagram-6.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								</div>
							</div>
						</div> --}}

					</aside>
				</div>

			</div>
		</div>
	</div>

	<!-- Subscribe Section -->
	<section class="subscribe-section">
		<div class="auto-container">
			<div class="inner-container margin-bottom">
				<div class="pattern-layer" style="background-image:url({{ asset('frontend') }}/images/background/7.jpg)"></div>
				<div class="section-image" style="background-image:url({{ asset('frontend') }}/images/resource/newslatter.png)"></div>
				<div class="row clearfix">

					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h3>Don’t miss any updates <br> Get subscribed!</h3>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">

							<div class="newsletter-form">
								<form method="post" action="https://expert-themes.com/html/gym/contact.html">
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Add your email ......" required="">
										<button type="submit" class="theme-btn submit-btn"><span class="txt">Subscribe</span></button>
									</div>
								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Subscribe Section -->

@endsection
