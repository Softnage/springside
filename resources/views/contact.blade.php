@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Contact Us | " . content('app.name'),
		'description' => "Contact us on ". content('app.primary_phone') ." or send us an e-mail on " . content('app.contact_email')
		]) !!}

	{{-- <link href="https://unpkg.com/pattern.css" rel="stylesheet" /> --}}
	<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
@endsection

@section('page_content')
	<div class="page-content bg-white">
		<!-- inner page banner -->
		<div class="page-banner ovbl-dark" style="background-image:url();">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Contact Us</h1>
				</div>
			</div>
		</div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->

		<!-- inner page banner -->
		<div class="page-banner contact-page section-sp2">
			<div class="container">
				@include('includes.contact-section')
			</div>
		</div>
		<!-- inner page banner END -->
	</div>

@endsection
