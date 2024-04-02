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
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                	<!-- Blog Classic -->
                	<div class="blog-classic">

						<!-- News Block Three -->
                        <div class="row">
                            @foreach ($blogs as $blog)
                            <div class="col-lg-4">
                                <div class="news-block-three">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="" /></a>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-meta">
                                                {{-- <li><span class="icon flaticon-folder"></span> GYM</li>
                                                <li><span class="icon flaticon-user-1"></span> By Jone Ankar</li>
                                                <li><span class="icon flaticon-comment-1"></span> 02</li> --}}
                                                <li><span class="icon flaticon-calendar-1"></span> {{ $blog->created_at->format('d M Y') }}</li>
                                            </ul>
                                            <h3><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                            <div class="text">{{ Str::limit(strip_tags($blog->description), 80, '...') }}</div>
                                            <a class="read-more" href="{{ route('our.blog.details', $blog->slug) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

						<!-- Post Share Options -->
						{{-- <div class="pagination-outer text-center">
							<div class="styled-pagination text-center">
								<ul class="clearfix">
									<li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span> Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li class="active"><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li class="next"><a href="#">Next <span class="fa fa-angle-double-right"></span></a></li>
								</ul>
							</div>
						</div> --}}

                    </div>
                </div>

                <!--Sidebar Side-->
                {{-- <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">

						<!-- Search -->
						<div class="sidebar-widget search-box">
							<form method="post" action="https://expert-themes.com/html/gym/contact.html">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Search....." required>
									<button type="submit"><span class="icon fa fa-search"></span></button>
								</div>
							</form>
						</div>

						<!-- Categories Widget -->
						<div class="sidebar-widget categories-widget">
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
						</div>

						<!-- Categories Widget -->
						<div class="sidebar-widget popular-posts">
							<div class="sidebar-title">
								<h4>Recent Post</h4>
							</div>
							<div class="widget-content">
								<article class="post">
									<div class="post-inner">
										<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/post-thumb-5.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
										<div class="text"><a href="blog-single.html">Meal prep for a full week easy</a></div>
										<div class="post-info">19.9.2019</div>
									</div>
								</article>
								<article class="post">
									<div class="post-inner">
										<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/post-thumb-6.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
										<div class="text"><a href="blog-single.html">Off Season is finnish now what?</a></div>
										<div class="post-info">19.9.2019</div>
									</div>
								</article>
								<article class="post">
									<div class="post-inner">
										<figure class="post-thumb"><img src="{{ asset('frontend') }}/images/resource/post-thumb-7.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
										<div class="text"><a href="blog-single.html">Fitness helps you think & Feel Better.</a></div>
										<div class="post-info">19.9.2019</div>
									</div>
								</article>
							</div>
						</div>

						<!-- Search -->
						<div class="sidebar-widget newsletter-box">
							<div class="sidebar-title">
								<h4>GET NEWSLETTER</h4>
							</div>
							<form method="post" action="https://expert-themes.com/html/gym/contact.html">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Entery Email" required>
									<button type="submit"><span class="icon flaticon-paper-plane-1"></span></button>
								</div>
							</form>
						</div>

						<!-- Popular Posts -->
						<div class="sidebar-widget popular-tags">
							<div class="sidebar-title">
								<h4>TAGS</h4>
							</div>
							<div class="widget-content">
								<a href="#">Fitness</a>
								<a href="#">Health</a>
								<a href="#">Lifestyle</a>
								<a href="#">Nutrition</a>
								<a href="#">Sport</a>
								<a href="#">Science</a>
								<a href="#">Training</a>
								<a href="#">Program</a>
							</div>
						</div>

						<!-- Instagram Widget -->
						<div class="sidebar-widget instagram-widget">
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
						</div>

					</aside>
				</div> --}}

			</div>
		</div>
	</div>

@endsection
