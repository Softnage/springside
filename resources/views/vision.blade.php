@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Vision and Mission | " . content('app.name')
		]) !!}
	<link rel="stylesheet" href="{{ asset('css/vision.css') }}" />
@endsection


@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url(assets/ssa_images_copy/IMG_6115.JPG);">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Vision and Mission</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('about') }}">About Us</a></li>
					<li>Vision and Mission</li>
				</ul>
			</div>
		</div>
		<div class="content-block">

			<div class="intro section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="intro-left">
								<h2 class="font-2">
									We will help develop your child's <span>brain</span>
								</h2>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="intro-right">
								<p>
									Esse quem tempor illum multos dolore legam velit duis aute aute sunt cillum quem
									fugiat fugiat ipsum tamen enim tempor malis summis export velit eram veniam
									tempor quorum esse fugiat
								</p>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="intro-extra" style="background-image:url({{ asset('images/mnv1.jpg') }});">
								<div class="bg-ovl"></div>
								<h5>
									Nulla multos tempor anim magna tamen eram summis fugiat summis velit quem labore
									multos duis
								</h5>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="intro-extra" style="background-image:url({{ asset('images/mnv2.jpg') }});">
								<div class="bg-ovl"></div>
								<h5>
									Nulla multos tempor anim magna tamen eram summis fugiat summis velit quem labore
									multos duis
								</h5>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="intro-ender">
									<div class="card card-body">
								<p>
									Quorum elit malis veniam sint eram dolor labore quid duis labore summis cillum
									aute aute sunt fore malis tempor sunt anim fore illum labore summis malis duis
									velit nisi legam nisi quorum quem enim quid amet noster minim sint veniam elit
									nisi sint malis quid aute veniam veniam ipsum quae
								</p>
							</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="intro-ender">
								<div>
									<h2>
										Our <span>Mision</span>
									</h2>
									<p>
										Multos aliqua noster culpa quae legam minim velit quorum sunt dolore velit
										aliqua fore tamen elit irure minim nulla quae
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

@endsection
