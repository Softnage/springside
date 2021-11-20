@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Term Dates | " . content('app.name')
		]) !!}

	<link href="https://unpkg.com/pattern.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('css/calendar.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url(assets/ssa_images_copy/IMG_6115.JPG);">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">Term Dates</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Our School System</li>
					<li>Term Dates</li>
				</ul>
			</div>
		</div>

		<div class="content-block">
			<!-- Your Faq -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="heading-bx left">
						<h2 class="font-2 m-b10 title-head">Term Dates and Events</h2>
					</div>

					<div class="calendion">
						<label class="container">
							<input type="checkbox" name="" value="" />
							<strong class="calendion-label clr-3">
								2021/2022 Academic Year, First Term
							</strong>
							<i></i>

							<div class="calendion-content">
								<div class="" style="margin: 20px 0;">
									<table class="table table-bordered" style="width:100%;">
										<tbody>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</label>
					</div>

					<div class="calendion">
						<label class="container">
							<input type="checkbox" name="" value="" />
							<strong class="calendion-label clr-3">
								2020/2021 Academic Year, Third Term
							</strong>
							<i></i>

							<div class="calendion-content">
								<div class="" style="margin: 20px 0;">
									<table class="table table-bordered" style="width:100%;">
										<tbody>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
											<tr>
												<td>Nulla sunt quem elit export quae minim summis</td>
												<td>Sunday 29th August</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</label>
					</div>

				</div>
				<!-- Your Faq End -->
			</div>

		</div>
	</div>

@endsection
