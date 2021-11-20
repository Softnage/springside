@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Creche | " . content('app.name')
		]) !!}

	{{-- <link href="https://unpkg.com/pattern.css" rel="stylesheet" /> --}}
	<link rel="stylesheet" href="{{ asset('css/creche.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url(assets/ssa_images_copy/IMG_6115.JPG);">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Creche</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Academics</li>
					<li>Creche</li>
				</ul>
			</div>
		</div>

		<div class="content-block">
			<!-- Your Faq -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="heading-bx left">
								<h2 class="font-2 m-b10 title-head">Lorem Ipsums The Dolor</h2>
							</div>
							<p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>

							<img src="https://picsum.photos/600/350" alt="Creche | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />

							<p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>

							<div>
								<table class="table table-bordered text-center">
									<tbody>
										<tr>
											<td>Colouring</td>
											<td>Erasing</td>
										</tr>
										<tr>
											<td>Colouring</td>
											<td>Erasing</td>
										</tr>
										<tr>
											<td>Colouring</td>
											<td>Erasing</td>
										</tr>
										<tr>
											<td>Colouring</td>
											<td>Erasing</td>
										</tr>
										<tr>
											<td>Colouring</td>
											<td>Erasing</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<div class="col-lg-4 col-md-12">
							@include('includes.contact-form')

							<div class="heading-bx left" style="margin-top:40px;">
								<h2 class="title-head"><span>Also In This</span> Section</h2>
							</div>

							<div class="card" style="margin-bottom:15px;">
								<a href="{{ route('academics.lower_primary') }}">
									<img class="card-img-top" src="{{ asset('images/academics/lower-primary-600-350.jpg') }}" alt="" />
								</a>
								<div class="card-body">
									<h5>
										<a href="{{ route('academics.lower_primary') }}">
											Lower Primary
										</a>
									</h5>
									<p style="font-size:14px; margin:0;">
										Fugiat sunt quid illum amet nisi fore quid minim elit minim illum minim sunt
										esse noster legam tamen anim nulla
									</p>
								</div>
							</div>

							<div class="card" style="margin-bottom:15px;">
								<img class="card-img-top" src="{{ asset('images/academics/upper-primary-600-350.jpg') }}" alt="" />
								<div class="card-body">
									<h5>Upper Primary</h5>
									<p style="font-size:14px; margin:0;">
										Fugiat sunt quid illum amet nisi fore quid minim elit minim illum minim sunt
										esse noster legam tamen anim nulla
									</p>
								</div>
							</div>

						</div>

					</div>
				</div>
				<!-- Your Faq End -->
			</div>

		</div>
	</div>

@endsection
