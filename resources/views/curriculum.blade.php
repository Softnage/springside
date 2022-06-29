@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Curriculum | " . content('app.name'),
		'description' => 'Our school runs the most effective curriculum which broadens the minds of our pupils and brings out the best in them.'
		]) !!}

	<link href="https://unpkg.com/pattern.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('css/extra_curricula.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Curriculum</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Our School Setup</li>
					<li>Curriculum</li>
				</ul>
			</div>
		</div>

		<div class="content-block">
			<!-- Your Faq -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8" style="margin-top:20px;">
							<div class="heading-bx left">
								<h2 class="font-2 m-b10 title-head">Our Teaching Outline</h2>
							</div>
							<p class="m-b10">
								Spring Side Academy having been duly certified as a GRADE A school by the Ghana Education Service follows the curricula approved by the same. Lessons and academic contents taught at Spring Side Academy employs both formal and informal assessments as students are expected to undertake home assignments as well as evaluation methods available in school hours.
							</p>
							<p>
								We inculcate in pupils ways to adjust to change, cope with uncertainty as an opportunity to excel. Teaching and learning activities from creche to primary 3 are supervised by classroom teachers with proven track record and experience. The staff through awareness of each child's needs aim to create an atmosphere which encourages self-discipline and control. Through their humanity, it is nurtured and inculcated in pupils.
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
											<td>English/Reading</td>
											<td>Language and Literacy</td>
										</tr>
										<tr>
											<td>Mathematics</td>
											<td>Religious and Moral Education</td>
										</tr>


										<tr>
											<td>Environmental Studies</td>
											<td>French</td>
										</tr>
										<tr>
											<td>Physical Education</td>
											<td>Natural Science</td>
										</tr>
										<tr>
											<td>Asante Twi</td>
											<td>Creative Arts</td>
										</tr>
										<tr>
											<td>Information, Communication and Technology</td>
											<td>Citizenship</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<div class="col-12 col-lg-4" style="margin-top:20px;">
							<div class="clr-1 bg-2 pattern-diagonal-lines-sm">
								<img src="{{ asset('images/curriculum.jpg') }}" alt="Extra Curricula Activities | {{ content('app.name') }}" style="width:100%; transform:translate(10px, -10px);" />
							</div>
						</div>


						<div class="col-12" style="margin-top:40px;">
							@include('includes.contact-form')
						</div>

					</div>
				</div>
				<!-- Your Faq End -->
			</div>

		</div>
	</div>

@endsection
