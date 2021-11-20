@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "About Us | " . content('app.name')
		]) !!}

	<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url(assets/ssa_images_copy/IMG_6115.JPG);">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">About Us</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
		<div class="content-block">
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						 <div class="col-lg-6 m-b30">
							<h2 class="title-head ">Welcome To {{ content('app.name') }}</h2>
							<h4>{{ content('app.motto') }}</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
						 </div>
						 <div class="col-lg-6">
							 <div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
									<div class="feature-container">
										<div class="feature-md text-white m-b20">
											<a href="#" class="icon-cell"><img src="assets/images/icon/icon1.png" alt=""/></a>
										</div>
										<div class="icon-content">
											<h5 class="ttr-tilte">Our Philosophy</h5>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
									<div class="feature-container">
										<div class="feature-md text-white m-b20">
											<a href="#" class="icon-cell"><img src="assets/images/icon/icon2.png" alt=""/></a>
										</div>
										<div class="icon-content">
											<h5 class="ttr-tilte">Kingster's Principle</h5>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
									<div class="feature-container">
										<div class="feature-md text-white m-b20">
											<a href="#" class="icon-cell"><img src="assets/images/icon/icon3.png" alt=""/></a>
										</div>
										<div class="icon-content">
											<h5 class="ttr-tilte">Key Of Success</h5>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
									<div class="feature-container">
										<div class="feature-md text-white m-b20">
											<a href="#" class="icon-cell"><img src="assets/images/icon/icon4.png" alt=""/></a>
										</div>
										<div class="icon-content">
											<h5 class="ttr-tilte">Our Philosophy</h5>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<div class="section-area bg-gray section-sp1 our-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-5 col-md-12 heading-bx">
							<h2 class="m-b10">Our Story</h2>
							<h5 class="fw4">It is a long established fact that a reade.</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							{{-- <a href="#" class="btn">Read More</a> --}}
						</div>
						<div class="col-lg-7 col-md-12 heading-bx p-lr">
							<div class="video-bx">
								<img src="assets/ssa_images_copy/IMG_6917.JPG" alt=""/>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section-area content-inner section-sp1">
				<div class="container">
					<div class="section-content">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">80</span><span>%</span>
									</div>
									<span class="counter-text">Average BECE Score</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-black">
										<span class="counter">5000</span><span>+</span>
									</div>
									<span class="counter-text">Proud Alumni</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-black">
										<span class="counter">1500</span><span>+</span>
									</div>
									<span class="counter-text">Exceptional Students</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">1000</span><span>+</span>
									</div>
									<span class="counter-text">Happy Parents</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(assets/ssa_images_copy/IMG_6917.JPG);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="join-content-bx text-white">
								<h2>Join Spring Side Academy</h2>
								<h4><span class="">Since 1965</span></h4>
								<p>
									{{ content('app.name') }} has offered an individualised education in
									Ghana for over 6 years. With a strict, disciplinary curriculum
									and teachers who are experts in child development, our students
									are challenged to achieve personal growth and success. Within a
									supportive community, our ambitious and personalised approach
									enables each student to discover and achieve their full potential,
									going on to the world’s best colleges and universities with a
									love of learning and excitement for the future.
								</p>
								<a href="{{ route('admission_procedure') }}" class="btn button-md">Join Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section-area section-sp2">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head text-uppercase">what parents <span>say</span></h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
						</div>
					</div>
					<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						<div class="item">
							<div class="testimonial-bx">
								<div class="testimonial-thumb">
									<img src="assets/images/testimonials/pic1.jpg" alt="">
								</div>
								<div class="testimonial-info">
									<h5 class="name">Peter Packer</h5>
									<p>-Art Director</p>
								</div>
								<div class="testimonial-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-bx">
								<div class="testimonial-thumb">
									<img src="assets/images/testimonials/pic2.jpg" alt="">
								</div>
								<div class="testimonial-info">
									<h5 class="name">Peter Packer</h5>
									<p>-Art Director</p>
								</div>
								<div class="testimonial-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

@endsection
