@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Admission Procedure | " . content('app.name'),
		'description' => "Processes each student must go through before being granted admission at ".content('app.name')
		]) !!}

	<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Admission Procedure</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Admissions</li>
					<li>Admission Procedure</li>
				</ul>
			</div>
		</div>
		<div class="content-block">

			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="heading-bx left">
								<h2 class="m-b10 title-head"><span>How To</span> Apply</h2>
							</div>
							<p class="m-b10">
								To get your child admitted at {{ content('app.name') }}, you must
								follow the simple steps below to ensure they are granted admission.
							</p>
							<p>
								<i>
								Note that without completing each step listed below, your child will be
								at a disadvantage when being considered for admission.
							</i>
							</p>

								<p style="font-size:14px;">
									1. Pick an admission form at GHS20.00 from the school's front desk.
								</p>
								<p style="font-size:14px;">
									2. A date will be set for writing an entrance exam. Your ward is
									expected to get not less than 50% of the total marks allocated
									for the entrance exam.
								</p>
								<p style="font-size:14px;">
									3. If your ward is offered admission, you will be presented with
									an admission list based on your child's age/class.
								</p>
								<p style="font-size:14px;">
									4. The admission process is not yet completed until all admission
									fees are paid in full.
								</p>

							{{-- <div class="ttr-accordion m-b30 faq-bx" id="accordion1">
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse" href="#faq1" class="collapsed" data-parent="#faq1">
												Why won't my payment go through?
											</a>
										</h6>
									</div>
									<div id="faq1" class="acod-body collapse">
										<div class="acod-content">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse" href="#faq2" class="collapsed" data-parent="#faq2">
												How do I get a refund?
											</a>
										</h6>
									</div>
									<div id="faq2" class="acod-body collapse">
										<div class="acod-content">Graphic design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse"  href="#faq3" class="collapsed"  data-parent="#faq3">
												How do I redeem a coupon?
											</a>
										</h6>
									</div>
									<div id="faq3" class="acod-body collapse">
										<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse"  href="#faq4" class="collapsed"  data-parent="#faq4">
												Why aren't my courses showing in my account?
											</a>
										</h6>
									</div>
									<div id="faq4" class="acod-body collapse">
										<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
								<div class="panel">
									<div class="acod-head">
										<h6 class="acod-title">
											<a data-toggle="collapse"  href="#faq5" class="collapsed"  data-parent="#faq5">
												Changing account name
											</a>
										</h6>
									</div>
									<div id="faq5" class="acod-body collapse">
										<div class="acod-content">Developement aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
									</div>
								</div>
							</div> --}}
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
