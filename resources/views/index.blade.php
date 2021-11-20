
@extends('layouts.web')

@section('page_head')
	{!! seo() !!}

<link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/layers.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/settings.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/navigation.css') }}" /> --}}
	<!-- REVOLUTION SLIDER END -->
	<link href="https://unpkg.com/pattern.css" rel="stylesheet" />


@endsection

@section('page_content')
	<div class="page-content bg-white">

		<div class="home-hero">
			<div class="home-hero-hol container">
			<div class="home-hero-hol-left">
				<div>
					<h1>
						Welcome To
						<br />
						<span class="clr-1">Spring Side Academy</span>
					</h1>
					<p>
						{{ content('app.name') }} cillum summis esse fore quorum quid tempor magna sunt magna anim dolor amet quae
						illum noster sint tamen fore malis
					</p>
					<div class="home-hero-hol-left-actions">
						<a href="{{ route('admission_procedure') }}" class="btn btn-primary btn-sm">How to apply</a>
						<a href="#overview-video" class="btn btn-sm btn-outline-primary">
							<span class="flash">
								<i class="fas fa-play"></i>
							</span>
							Watch Overview Video
						</a>
					</div>
				</div>

			</div>
			<div class="home-hero-hol-right">
				<img src="https://picsum.photos/300/350" alt="">
			</div>
		</div>
		</div>

		<div class="content-block">


			{{-- Our Story ==== --}}
			<div class="section-area section-sp1 our-story mt-5" style="background-color:#f3fcfd;">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-7 col-md-12 heading-bx p-lr">
							<div class="video-bx">
								<img class='img-thumbnail' src="{{ asset('images/feat-3.jpg') }}" alt="{{ content('app.name') }}" data-aos='fade-right' />
							</div>
						</div>
						<div class="col-lg-5 col-md-12 heading-bx" data-aos='fade-left'>
							<h2 class="m-b10 font-2">
								Welcome to
								<br />
								<span class="text-bg-1">Spring Side Academy</span>
							</h2>
							<h5 class="fw4">It is a long established fact that a reade.</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<a href="#" class="btn btn-sm">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-area section-sp1 our-other-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-5 col-md-12 heading-bx" data-aos='fade-right'>
							<h2 class="m-b10 font-2">World Class Learning facilities</h2>
							<h5 class="fw4">It is a long established fact that a reade.</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<a href="#" class="btn btn-sm">Read More</a>
						</div>
						<div class="col-lg-7 col-md-12 heading-bx p-lr">
							<div class="video-bx">
								<img class='img-thumbnail' src="{{ asset('images/feat-1.jpg') }}" alt="" data-aos='fade-left' />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-area section-sp1 our-story" style="background-color:#f3fcfd;">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-7 col-md-12 heading-bx p-lr">
							<div class="video-bx">
								<img class='img-thumbnail' src="{{ asset('images/feat-2.jpg') }}" alt="" data-aos='fade-right' />
							</div>
						</div>
						<div class="col-lg-5 col-md-12 heading-bx" data-aos='fade-left'>
							<h2 class="m-b10 font-2">Serene Environment</h2>
							<h5 class="fw4">It is a long established fact that a reade.</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<a href="#" class="btn btn-sm">Read More</a>
						</div>
					</div>
				</div>
			</div>
			{{-- Our Story END ==== --}}


			<div class="video-sec">
				<div class="video-sec-hol container">
					<div class="video-sec-top">
						<div class="row">
							<div class="col-12 col-md-6">
								<h3>
									A Brief Overview of {{ content('app.name') }}
								</h3>
							</div>
							<div class="col-12 col-md-6">
								<p>
									Esse enim velit quid tamen amet aute nisi velit quid cillum esse culpa export
									esse sunt quae esse labore malis esse tempor enim quis quid
								</p>
								<a class='btn btn-sm' href="{{ route('about') }}">Learn More <i class="fas fa-paper-plane"></i></a>
							</div>
						</div>
					</div>
					<div class="video-sec-bottom">
						<div class="video-sec-bottom-hol img-thumbnail">
							{{-- <video id="player" playsinline controls data-poster="/path/to/poster.jpg"> --}}
							<video id="overview-video" controls>
								<source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4" />
							</video>
						</div>
					</div>
				</div>
			</div>



			{{-- Popular Courses --}}
			<div class="section-area section-sp2 popular-courses-bx">
				<div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head font-2">Academics</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
						</div>
					</div>
					<div class="row">
						<div class="courses-carousel row owl-btn-1 col-12 p-lr0">
							<div class="col-12 col-md-3">
								<div class="cours-bx">
									<div class="action-box">
										<img src="assets/images/courses/pic1.jpg" alt="">
										<a href="#" class="btn btn-sm">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Creche</a></h5>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-3">
								<div class="cours-bx">
									<div class="action-box">
										<img src="assets/images/courses/pic2.jpg" alt="">
										<a href="#" class="btn btn-sm">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Lower Primary</a></h5>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-3">
								<div class="cours-bx">
									<div class="action-box">
										<img src="assets/images/courses/pic1.jpg" alt="">
										<a href="#" class="btn btn-sm">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Upper Primary</a></h5>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-3">
								<div class="cours-bx">
									<div class="action-box">
										<img src="assets/images/courses/pic2.jpg" alt="">
										<a href="#" class="btn btn-sm">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">JHS</a></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- Popular Courses END --}}

			{{-- Extra Curricula --}}
			<div class="section-area section-sp2 home-extra-curricula">
				<div class="home-extra-curricula-left">
					<div class="extra-carousel owl-carousel">

						<div class="item card ec-activity">
							<img class="card-img-top" src="{{ asset('images/slide-sec-1.jpg') }}" alt="" />
							<div class="card-body">
								<h5>Lorem Ipsum Dolor</h5>
								<p>
									Fugiat sunt quid illum amet nisi fore quid minim elit minim illum minim sunt
									esse noster legam tamen anim nulla
								</p>
							</div>
						</div>

						<div class="item card ec-activity">
							<img class="card-img-top" src="{{ asset('images/slide-sec-2.jpg') }}" alt="" />
							<div class="card-body">
								<h5>Lorem Ipsum Dolor</h5>
								<p>
									Fugiat sunt quid illum amet nisi fore quid minim elit minim illum minim sunt
									esse noster legam tamen anim nulla
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="home-extra-curricula-right">
					<div class="row">
						<div class="col-12" style="margin-bottom:2px;">
							<div class="row">
								<div class="col-12">
									<img src="https://picsum.photos/650/325" alt="" />
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-6" style="padding:2px;">
									<img src="https://picsum.photos/365/313" alt="" />
								</div>
								<div class="col-6" style="padding:2px;">
									<img src="https://picsum.photos/365/313" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- Extra Curricula END --}}

			{{-- Jumbo --}}
			<div class="section-area section-sp2 container">
				<div class="home-jumbo">
					<div class="img-hol pattern-dots-sm">
						<img src="{{ asset('images/journey.jpg') }}" alt="" />
					</div>
					<div class="home-jumbo-left">
					</div>
					<div class="home-jumbo-right">
						<img src="{{ asset('images/office-pin.png') }}" alt="" class="office-pin">
						<div>
							<h3>
								Education is a <span>Journey</span>
								<br />
								not a <span>Race</span></h3>
								<p>
									Fugiat velit aute esse nisi legam illum enim minim esse ipsum aliqua cillum
									minim nisi culpa tamen magna anim fore anim cillum summis legam quorum amet
									quorum aliqua quorum nulla
								</p>
								<p>
									Tamen sunt irure cillum summis amet elit fore illum esse irure labore multos
									export eram quid aute velit cillum veniam labore malis labore enim veniam eram
									enim irure aute multos
								</p>
							</div>
						</div>
					</div>
				</div>
				{{-- Jumbo END --}}

				{{-- Contact --}}
				<div class="container">
					@include('includes.contact-section')
				</div>
				{{-- Contact END --}}

</div>

</div>

<script src="https://cdn.plyr.io/3.6.9/plyr.js"></script>
<script type="text/javascript">
	const overviewVideo = new Plyr('#overview-video');
</script>
@endsection
