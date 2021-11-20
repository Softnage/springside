@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Fees | " . content('app.name')
		]) !!}
	<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url(assets/ssa_images_copy/IMG_6115.JPG);">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Fees</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Admissions</li>
					<li>Fees</li>
				</ul>
			</div>
		</div>
		<div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
					<div class="col-12 col-lg-8">
						<h2 class="font-2 title-head ">Fee Payment Policy</h2>
						<ol>
							<li>Fees paid are non-refundable</li>
							<li>Nulla nisi noster tempor eram aute veniam quis dolore.</li>
							<li>Labore veniam tempor fore aute summis nulla illum</li>
						</ol>
						<p>
							Minim tempor irure anim quis summis aute labore irure eram malis summis aute
							anim elit eram velit ipsum quae elit.
						</p>
						<table class="table">
							<thead>
								<tr>
									<th>Account Name</th>
									<th>Bank</th>
									<th>Branch</th>
									<th>Paid in by</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ content('app.bank.account_name') }}</td>
									<td>{{ content('app.bank.name') }}</td>
									<td>{{ content('app.bank.branch') }}</td>
									<td>{{ content('app.bank.paid_in_by') }}</td>
								</tr>
							</tbody>
						</table>
						<p>
							<small>
								<strong>Note:</strong> All fees are to be paid in full by the
								middle of the term.
							</small>
						</p>
					</div>
					<div class="col-12 col-lg-4">
						@include('includes.contact_banner')
					</div>
				</div>
				</div>
			</div>


		</div>

	</div>

@endsection
