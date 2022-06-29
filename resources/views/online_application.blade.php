@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Online Application | " . content('app.name'),
		'description' => "Apply for admissions online now"
		]) !!}

		<link rel="stylesheet" href="{{ asset('css/about.css') }}">
	@endsection

	@section('page_content')
		<div class="page-content">
			<div class="page-banner" style="background-image:url({{asset('images/online-application.jpg')}});">
				<div class="container">
					<div class="page-banner-entry">
						{{-- <h1 class="text-white">Online Application</h1> --}}
					</div>
				</div>
			</div>
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="{{ route('home') }}">Home</a></li>
						<li>Admissions</li>
						<li>Online Application</li>
					</ul>
				</div>
			</div>
			<div class="content-block">

				<div class="section-area section-sp1">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-12">

								<div>

									<form method="post" action="{{ route('online_application.submit') }}">
										@if (session('successMessage'))
											<div class="alert alert-success fade show" role="alert">{{ session('successMessage') }}</div>
										@endif
										@if ($errors->any())
											<div class="alert alert-danger">
												<ul>
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											</div>
										@endif
										@csrf

										<div class="heading-bx left">
											<h2 class="m-b10 title-head"><span>Parent</span> Details</h2>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label>Your Name</label>
													<input type="text" class="form-control" name="guardian_name" />
												</div>
											</div>
											{{-- <div class="col-12 col-md-6">
												<div class="form-group">
													<label>Email address</label>
													<input type="email" class="form-control" name="guardian_email" />
												</div>
											</div> --}}
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Phone number</label>
													<input type="text" class="form-control" name="guardian_phone" />
												</div>
											</div>
										</div>

										<div class="heading-bx left">
											<h2 class="m-b10 title-head"><span>Ward</span> Details</h2>
										</div>

										<div class="row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Name</label>
													<input type="text" class="form-control" name="ward_name" />
												</div>
											</div>
											{{-- <div class="col-12 col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" name="ward_first_name" />
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label>Other Names</label>
													<input type="text" class="form-control" name="ward_other_names" />
												</div>
											</div> --}}
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Age</label>
													<input type="number" class="form-control" name="ward_age" />
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Class (Desired)</label>
													<input type="text" class="form-control" name="ward_class" />
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary btn-sm">Submit</button>
									</form>
								</div>

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
