
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
						At {{content('app.name')}} we have a deep and genuine commitment to
						provide a basic education that is unsurpassed anywhere on the
						continent. We seek to train independent learners in the pursuit of
						excellence in order to live
						fulfilling lives whilst creating a better world for others.
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
				<img src="{{ asset('images/header-img.png') }}" alt="">
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
								<span class="clr-1">Spring Side Academy</span>
							</h2>
							<p>
								Spring Side Academy is a school within the Kumasi catchment area, specifically at Atasomanso. Our thriving school community includes Nursery and Primary classes.
<br>
								Our grounds provide great opportunities for outdoor learning, as well as play, sport and family events. Our vision is to foster educational excellence as all pupils prepare to become successful citizens.  We challenge children to achieve their best through...
							</p>
							<a href="#" class="btn btn-sm">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-area section-sp1 our-other-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-5 col-md-12 heading-bx" data-aos='fade-right'>
							<h2 class="m-b10 font-2">A Loving Community</h2>
							{{-- <h5 class="fw4">It is a long established fact that a reade.</h5> --}}
							<p>
								Every child is of equal importance and unique. Pupils and
								members of our community are valued for what they are rather
								than what they can do and are given every opportunity for
								educational development to the highest level possible. We are
								all equal in the sight of God.
								If you would like to visit our school please contact the school
								office.
							</p>
							{{-- <a href="#" class="btn btn-sm">Read More</a> --}}
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
							<h2 class="m-b10 font-2">An Exciting Play-based Learning Environment</h2>
							{{-- <h5 class="fw4">It is a long established fact that a reade.</h5> --}}
							<p>
								At {{ content('app.name') }}, we are keen on creating an
								exciting play-based learning environment for our kids. We believe
								that children learn best when they are doing what they enjoy,
								and since every child loves to play, we learn through games and
								exciting challenges.
							</p>
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
									Get to know more about {{ content('app.name') }}, watch our
									overview video to get a more visual experience about our
									activities and standards.
								</p>
								<a class='btn btn-sm' href="{{ route('about') }}">Learn More <i class="fas fa-paper-plane"></i></a>
							</div>
						</div>
					</div>
					<div class="video-sec-bottom">
						<div class="video-sec-bottom-hol img-thumbnail">
							<iframe
    src="https://www.youtube.com/embed/Pnv1luYE3lU"
    allowfullscreen
    allowtransparency
    allow="autoplay"
  ></iframe>
							{{-- <iframe src="https://www.youtube.com/embed/Pnv1luYE3lU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
							{{-- <video id="player" playsinline controls data-poster="/path/to/poster.jpg"> --}}
							{{-- <video controls>
								<source src="https://www.youtube.com/embed/Pnv1luYE3lU" type="video/mp4" />
							</video> --}}
						</div>
					</div>
				</div>
			</div>



			{{-- Academics --}}
			{{-- <div class="section-area section-sp2 popular-courses-bx">
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
										<h5><a href="#">Pre-School</a></h5>
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
										<h5><a href="#">Primary</a></h5>
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
			</div> --}}
			{{-- Academics END --}}

			{{-- Extra Curricula --}}
			<div class="section-area section-sp2 home-extra-curricula">
				<div class="home-extra-curricula-left">
					<div class="extra-carousel owl-carousel">

						<div class="item card ec-activity">
							<img class="card-img-top" src="{{ asset('images/slide-sec-1.jpg') }}" alt="" />
							<div class="card-body">
								<h5>An Educational System You Can Trust</h5>
								<p>
									We provide high quality childhood educational and family
									focused programs that inspire children, strenghthen families, and embrace communities
								</p>
							</div>
						</div>

						<div class="item card ec-activity">
							<img class="card-img-top" src="{{ asset('images/slide-sec-2.jpg') }}" alt="" />
							<div class="card-body">
								<h5>An Engaging Playground</h5>
								<p>
									We provide environment where your child will be actively
									involved in many new learning experiences & enrichment
									opportunities.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="home-extra-curricula-right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0093941035057!2d-1.6253296857144353!3d6.6457539951945845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb913bfadaeb6b%3A0xfa401b75304550f6!2sSpring%20Side%20Academy!5e0!3m2!1sen!2sgh!4v1637167617199!5m2!1sen!2sgh" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					{{-- <div class="row">
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
					</div> --}}
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
								Educating the <span>Hand</span>, <span>Heart</span> and <span>Mind</span>.
								<p>
									The function of education is to teach one to think intensively
									and to think critically. The most dangerous criminal may be the man gifted with reason,
									but with no morals.
									<br>
									Intelligence plus character; that is
									the goal of true education. This is the focus of education
									here at {{ content('app.name') }}.
								</p>
								{{-- <p>
									Tamen sunt irure cillum summis amet elit fore illum esse irure labore multos
									export eram quid aute velit cillum veniam labore malis labore enim veniam eram
									enim irure aute multos
								</p> --}}
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
