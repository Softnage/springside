@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Extra Curricular Activities | " . content('app.name'),
		'description' => 'Our pupils engage in extracurricular activities which help to unearth their hidden talents and skills'
		]) !!}

	<link href="https://unpkg.com/pattern.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('css/extra_curricula.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Extra Curricular Activities</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Our School Setup</li>
					<li>Extra Curricular Activities</li>
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
								<h2 class="font-2 m-b10 title-head">Fun-Filled Learning</h2>
							</div>
							<p class="m-b10">
								{{ content('app.name') }} is keen on various activities that
								compliment formal teaching and learning. Activities such as
								excursions, sports, quizzes, dance and swimming lessons are
								given the needed attention.
							</p>
							<p class="m-b10">
								Studies have shown that extra-curricular activities reduce the
								likelihood of dropping out of school, likelihood of commiting
								a criminal offense and leads to higher educational retainment and
								success in school work, not to mention the greatest advantage of
								decreasing anti-social behaviours.
							</p>

							<p>
								{{ content('app.name') }} organizes educational excursions, medical
								screening at least once a term and swimming lessons twice a term.
							</p>
						</div>

						<div class="col-12 col-lg-4" style="margin-top:20px;">
							<div class="clr-1 bg-2 pattern-diagonal-lines-sm">
								<img src="{{ asset('images/extra-curricular.jpg') }}" alt="Extra Curricula Activities | {{ content('app.name') }}" style="width:100%; transform:translate(10px, -10px);" />
							</div>
						</div>

					</div>
				</div>
				<!-- Your Faq End -->
			</div>

		</div>
	</div>

@endsection
