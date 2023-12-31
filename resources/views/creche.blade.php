@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Pre-School | " . content('app.name')
		]) !!}

	{{-- <link href="https://unpkg.com/pattern.css" rel="stylesheet" /> --}}
	<link rel="stylesheet" href="{{ asset('css/creche.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Pre-School</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Academics</li>
					<li>Pre-School</li>
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
								<h2 class="font-2 m-b10 title-head">Nurturing Infant Minds</h2>
							</div>
							<p class="m-b10">
								Our pre-school setup accomodates children between the ages of 3 to 5.
								Based on your child's level of rigor, he or she may be placed within
								our early years nursery or kindergarten. If your child needs diaper
								changes and support for toilet training, they are placed within our nursery.
								However, if your child shows a significant level of independence and
								readiness for more rigor, they are placed within our kindergarten.
							</p>
							<p>
								Our trained teachers offer special care to pupils regardless of level.
								Subject being taught at the pre-school level include the following:
							</p>

							<div>
								<table class="table table-bordered text-center">
									<tbody>
										<tr>
											<td>Scribbling</td>
											<td>Phonics</td>
										</tr>
										<tr>
											<td>Numeracy</td>
											<td>Discovery</td>
										</tr>
										<tr>
											<td>Art and Creativity</td>
											<td>Colouring</td>
										</tr>
										<tr>
											<td>Language and Literacy</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<div class="col-lg-4 col-md-12">
							<img src="{{ asset('images/creche.jpg') }}" alt="Pre-School | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
							@include('includes.contact-form')
						</div>
					</div>
				</div>
				<!-- Your Faq End -->
			</div>

		</div>
	</div>

@endsection
