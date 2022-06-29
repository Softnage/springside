@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Admission Policy | " . content('app.name')
		]) !!}

	<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
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
							<p class="m-b10">
								Pupils will be expected to undergo medical examination by a medical practitioner approved by the school prior to admission. Pupils will be expected to write entrance examination in English and Mathematics before being considered into upper classes. Currently the school runs from creche to primary.
							</p>
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
