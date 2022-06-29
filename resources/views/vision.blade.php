@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Vision and Mission | " . content('app.name'),
		'description' => 'We believe in fostering educational excellence to train all pupils to become successful citizens.'
		]) !!}
	<link rel="stylesheet" href="{{ asset('css/vision.css') }}" />
@endsection


@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
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
									Our vision is to foster educational excellence as all pupils
									prepare to become successful citizens.
								</p>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="intro-extra" style="background-image:url({{ asset('images/mnv1.jpg') }});">
								<div class="bg-ovl"></div>
								{{-- <h5>
									Nulla multos tempor anim magna tamen eram summis fugiat summis velit quem labore
									multos duis
								</h5> --}}
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="intro-extra" style="background-image:url({{ asset('images/mnv2.jpg') }});">
								<div class="bg-ovl"></div>
								{{-- <h5>
									Nulla multos tempor anim magna tamen eram summis fugiat summis velit quem labore
									multos duis
								</h5> --}}
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="intro-ender">
									<div class="card card-body">
								<p>
									Every individual has worth and value. At {{ content('app.name') }},
									we realise each individual's role is vital to the upkeep of society.
									Hence we encourage our pupils to be better versions each day, in
									order to trigger a holistic aggregate change in society.
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
										We seek to provide all pupils with educational opportunities
										that ensure they become responsible, productive and global citizens.
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
