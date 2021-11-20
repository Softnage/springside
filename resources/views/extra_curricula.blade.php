@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Extra Curricular Activities | " . content('app.name')
		]) !!}

	<link href="https://unpkg.com/pattern.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('css/extra_curricula.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url(assets/ssa_images_copy/IMG_6115.JPG);">
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
					<li>Our School System</li>
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
						<div class="col-12 col-lg-4" style="margin-top:20px;">
							<div class="clr-1 bg-2 pattern-diagonal-lines-sm">
								<img src="{{ asset('images/extra-curricular.jpg') }}" alt="Extra Curricula Activities | {{ content('app.name') }}" style="width:100%; transform:translate(10px, -10px);" />
							</div>
						</div>

						<div class="col-12">
							<div class="heading-bx left" style="margin-top:40px;">
								<h2 class="title-head">Another Title Here</h2>
							</div>

							<p>
								Summis aute legam amet irure culpa minim sint velit tamen fore quis dolor aute
								quem amet duis dolor cillum labore multos quis amet minim aliqua dolore illum
								quorum duis nisi
							</p>

							<div class="row">
								<div class="col-12 col-md-8">
									<div class="row">
										<div class="col-12 col-md-3">
											<img src="https://picsum.photos/200/250" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
										</div>
										<div class="col-12 col-md-3">
											<img src="https://picsum.photos/200/250" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
										</div>
										<div class="col-12 col-md-3">
											<img src="https://picsum.photos/200/250" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
										</div>
										<div class="col-12 col-md-3">
											<img src="https://picsum.photos/200/250" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
										</div>
										<div class="col-12 col-md-3">
											<img src="https://picsum.photos/200/250" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
										</div>
										<div class="col-12 col-md-3">
											<img src="https://picsum.photos/200/250" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
										</div>
										<div class="col-12 col-md-3">
											<img src="https://picsum.photos/200/250" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
										</div>
										<div class="col-12 col-md-3">
											<img src="https://picsum.photos/200/250" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<img src="https://picsum.photos/400/500" alt="Extra Curricular Activities | {{ content('app.name') }}" style="width:100%; margin:20px 0;" />
								</div>
							</div>


							<p class="m-b10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
						</div>

						<div class="col-12">
							@include('includes.contact-form')

							<div class="heading-bx left" style="margin-top:40px;">
								<h2 class="title-head"><span>Also In This</span> Section</h2>
							</div>

							<div class="row">
								<div class="col-12 col-md-3">
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
								</div>
								<div class="col-12 col-md-3">
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

					</div>
				</div>
				<!-- Your Faq End -->
			</div>

		</div>
	</div>

@endsection
