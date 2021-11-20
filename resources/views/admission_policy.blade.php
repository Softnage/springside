@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Admission Policy | " . content('app.name')
		]) !!}

	<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url(assets/ssa_images_copy/IMG_6115.JPG);">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Admission Policy</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Admissions</li>
					<li>Admission Policy</li>
				</ul>
			</div>
		</div>
		<div class="content-block">

			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="heading-bx left">
								<h2 class="m-b10 title-head"><span>Getting Your Ward</span><br/>Admitted</h2>
							</div>
							<p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
						</div>
						<div class="col-lg-4 col-md-12">
							@include('includes.contact_banner')
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>

@endsection
