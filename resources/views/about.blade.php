@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "About Us | " . content('app.name'),
		'description' => 'Spring Side Academy is a school within the Kumasi catchment area, specifically at Atasemanso. Our thriving school community includes Nursery and Primary classes.'
		]) !!}

		<link rel="stylesheet" href="{{ asset('css/about.css') }}">

	@endsection

	@section('page_content')
		<div class="page-content">
			<div class="page-banner ovbl-dark" style="background-image:url();">
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
								<p>
									{{ content('app.name') }} is a school within the Kumasi catchment area,
									specifically at Atasomanso. Our thriving school community
									includes Nursery and Primary classes.
									<br>
									Our grounds provide great opportunities for outdoor learning, as
									well as play, sport and family events. Our vision is to foster
									educational excellence as all pupils prepare to become
									successful citizens.  We challenge children to achieve their
									best through an ethos of positive praise, high expectations and
									providing the right level of support. Our committed staff team
									have developed an exciting and engaging curriculum that is based
									on the interests of our children.
									<br>
									Every child is of equal importance and unique.  Pupils and
									members of our community are valued for what they are rather
									than what they can do and are given every opportunity for
									educational development to the highest level possible.  We are
									all equal in the sight of God.

								</p>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
										<div class="feature-container">
											<div class="feature-md text-white m-b20">
												<a href="#" class="icon-cell"><img src="assets/images/icon/icon1.png" alt=""/></a>
											</div>
											<div class="icon-content">
												<h5 class="ttr-tilte">Our Standards</h5>
												<p>
													A high standard of professional excellence is displayed by school personnel.
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
										<div class="feature-container">
											<div class="feature-md text-white m-b20">
												<a href="#" class="icon-cell"><img src="assets/images/icon/icon2.png" alt=""/></a>
											</div>
											<div class="icon-content">
												<h5 class="ttr-tilte">Our Principles</h5>
												<p>
													Respect for human diversity is vital to accomplish our mission.
												</p>
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
												<p>Access to emerging technology allows pupils and staff to interact and compete globally.</p>
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
												<p>High expectations provide opportunities for each pupil to achieve maximum potential.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{-- <div class="section-area bg-gray section-sp1 our-story">
					<div class="container">
						<div class="row align-items-center d-flex">
							<div class="col-lg-5 col-md-12 heading-bx">
								<h2 class="m-b10">Our Story</h2>
								<p>



								</p>
							</div>
							<div class="col-lg-7 col-md-12 heading-bx p-lr">
								<div class="video-bx">
									<img src="assets/images/our-story.jpg" alt=""/>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

				{{-- <div class="section-area section-sp2">
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
				</div> --}}

			</div>

		</div>

	@endsection
