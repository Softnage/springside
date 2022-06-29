@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Primary | " . content('app.name')
		]) !!}

	{{-- <link href="https://unpkg.com/pattern.css" rel="stylesheet" /> --}}
	<link rel="stylesheet" href="{{ asset('css/creche.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Primary</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Academics</li>
					<li>Primary</li>
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
								<h2 class="font-2 m-b10 title-head">Interactive Learning</h2>
							</div>
							<p class="m-b10">
								We inculcate in pupils ways to adjust to change, cope with
								uncertainty as an opportunity to excel. Teaching and learning
								activities in primary are supervised by classroom teachers with
								proven track record and experience. The staff through awareness
								of each child's needs aim to create an atmosphere which
								encourages self-discipline and control. Through their humanity,
								it is nurtured and inculcated in pupils.
							</p>



							<div>
								<table class="table table-bordered text-center">
									<tbody>
										<tr>
											<td>English</td>
											<td>Mathematics</td>
										</tr>
										<tr>
											<td>Religious and Moral Education</td>
											<td>Citizenship</td>
										</tr>
										<tr>
											<td>French</td>
											<td>Physical Education</td>
										</tr>
										<tr>
											<td>Creative Arts</td>
											<td>Asante Twi</td>
										</tr>
										<tr>
											<td>Natural Science</td>
											<td>Information, Communication and Technology</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<div class="col-lg-4 col-md-12">
							<img src="{{ asset('images/primary1.jpg') }}" alt="Primary - {{ content('app.name') }}" style="margin-bottom:20px;" />
							@include('includes.contact-form')
						</div>

					</div>
				</div>
				<!-- Your Faq End -->
			</div>

		</div>
	</div>

@endsection
