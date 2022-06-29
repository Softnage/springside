@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Teaching and Learning | " . content('app.name')
		]) !!}

	<link href="https://unpkg.com/pattern.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('css/teaching.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Teaching and Learning</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Our School Setup</li>
					<li>Teaching and Learning</li>
				</ul>
			</div>
		</div>

		<div class="content-block">
			<!-- Your Faq -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row teaching-intro">
						<div class="col-12 col-lg-8">
							<div class="heading-bx left">
								<h2 class="font-2 m-b10 title-head">
									Learning Through Integrated Units of Inquiry
								</h2>
							</div>
							<p class="m-b10">
								We believe that students achievements and successes should be
								recognised and celebrated. By marking the achievements of our
								students, we hope to instill a sense of confidence and pride that
								will follow them through their educational adventure, whilst
								inspiring those around them.
							</p>

							<p>
								Class teachers endeavour to write report on each child on how he/she
								fared for the particular term. Grading for subjects comprises 50%
								of scores for class test organized during the term and 50% scores
								also for end of term examinations.
							</p>

						</div>
						<div class="col-12 col-lg-4 teaching-intro-right">
							<div class="pattern-dots-sm clr-1">
								<div class="quote-by card card-body">
									<p>
										Teaching and learning is a process that includes many variables. These variables interact as learners work toward their goals and incorporate new knowledge, behaviours, and skills that add to their range of learning experiences.
										<br />
										<br />
										<i>
											Teaching kids to count is fine, but teaching them what counts is best.
											<br />
											<span class="text-right">~ Bob Talbert</span>
										</i>
									</p>
								</div>
							</div>
							<div class="pattern-dots-sm clr-1">
								<img src="{{ asset('images/teaching-and-learning.jpg') }}" class="card" alt="Teaching and Learning | {{ content('app.name') }}" style="width:100%; margin-top:20px; transform:translate(-10px,10px);" />
							</div>
						</div>


						<div class="col-12" style="margin-top:50px;">
							@include('includes.contact-form')
						</div>

					</div>
				</div>
				<!-- Your Faq End -->
			</div>

		</div>
	</div>

@endsection
