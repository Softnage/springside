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
			<div class="page-banner ovbl-dark" style="background-image:url();">
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
						<li>Our School Setup</li>
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
									2021 Academic Year, Third Term
								</strong>
								<i></i>

								<div class="calendion-content">
									<div class="" style="margin: 20px 0;">
										<table class="table table-bordered" style="width:100%;">
											<tbody>
												<tr>
													<td>COMMENCEMENT OF TERM 3 – 2021 ACADEMIC YEAR</td>
													<td>7th Sept, 2021</td>
												</tr>
												<tr>
													<td>Revision</td>
													<td>7th- Sept  –  10th Sept 2021</td>
												</tr>
												<tr>
													<td>HOLIDAY (Kwame Nkrumah Memorial day)</td>
													<td>21st Sept, 2021</td>
												</tr>
												<tr>
													<td>Weighing</td>
													<td>23rd Sept, 2021</td>
												</tr>
												<tr>
													<td>Mental Arithmetic (Abacus) Quiz (Galaxy)</td>
													<td>Sunday 29th August</td>
												</tr>
												<tr>
													<td>Mental Arithmetic (Abacus) Quiz (1, 2, 3)</td>
													<td>7th Oct, 2021</td>
												</tr>
												<tr>
													<td>Half Term Assessment</td>
													<td>18th – 22nd Oct, 2021</td>
												</tr>
												<tr>
													<td>Weighing</td>
													<td>21st Oct, 2021</td>
												</tr>
												<tr>
													<td>P.T.D (Daisy, Olive &Clover )</td>
													<td>29TH Oct, 2021</td>
												</tr>
												<tr>
													<td>P.T.D (Cherry & Galax)</td>
													<td>5th Nov, 2021</td>
												</tr>
												<tr>
													<td>P.T.D (1, 2 & 3)</td>
													<td>12TH Nov, 2021</td>
												</tr>
												<tr>
													<td>P. T. A Meeting</td>
													<td>19th Nov, 2021</td>
												</tr>
												<tr>
													<td>Revision Week</td>
													<td>22nd - 25th Nov, 2021</td>
												</tr>
												<tr>
													<td>Weighing</td>
													<td>25th Nov, 2021</td>
												</tr>
												<tr>
													<td>Mental Arithmetic (Abacus) Examination</td>
													<td>25th Nov, 2021</td>
												</tr>
												<tr>
													<td>Club Display</td>
													<td>26th Nov, 2021</td>
												</tr>
												<tr>
													<td>Examination</td>
													<td>29th Nov - 6th Dec</td>
												</tr>
												<tr>
													<td>HOLIDAY (Farmers Day)</td>
													<td>3rd Dec, 2021</td>
												</tr>
												<tr>
													<td>Vacation</td>
													<td>10th Dec, 2021</td>
												</tr>
											</tbody>
										</table>

										<table class="table table-bordered" style="width:100%;">
											<tr>
												<td>MENTAL ARITHMETIC (ABACUS)</td>
												<td>Every Thursday</td>
											</tr>
											<tr>
												<td>CLUB ACTIVITIES</td>
												<td>Every Friday</td>
											</tr>
										</table>
									</div>
								</div>
							</label>
						</div>

						<div class="calendion">
							<label class="container">
								<input type="checkbox" name="" value="" />
								<strong class="calendion-label clr-3">
									2021 Academic Year, Second Term
								</strong>
								<i></i>

								<div class="calendion-content">
									<div class="" style="margin: 20px 0;">
										<table class="table table-bordered" style="width:100%;">
											<tr>
												<th>ACTIVITY</th>
												<th>DATE</th>
											</tr>
											<tr>
												<td>DEDICATION AND STAFF TRAINING</td>
												<td>27<sup>th</sup>-30<sup>th</sup>May,2021</td>
												<tr>
													<td>COMMENCEMENT OF TERM 2-2021 ACADEMIC CALENDAR</td>
													<td>4<sup>th</sup>May,2021</td>
												</tr>
												<td>EID AL(FITR)</td>
												<td>13<sup>th</sup>May,2021</td>
												<tr>
													<td>WEIGHING</td>
													<td>27<SUP>th</SUP>May,2021</td>
												</tr>
												<tr>
													<td>SPELLING BEE(1,2,&3</td>
													<td>28<sup>th</sup>May,2021</td>
												</tr>
												<tr>
													<td>SPELLING BEE(CHERRY,GALAX)</td>
													<td>4<sup>th</sup>June,2021<td>
													</tr>
													<tr>
														<td>HALF TERM ASSESSMENT</td>
														<td>14<sup>th</sup>-18<sup>th</sup>June,2021</td>
													</tr>
													<tr>
														<td>WEIGHING</td>
														<td>24<sup>th</sup>June,2021</td>
													</tr>
													<tr>
														<td>P.T.D(DAISY,OLIVE,GLOVER</td>
														<td>2<sup>nd</sup>June,2021</td>
													</tr>
													<tr>
														<td>P.T.D(CHERRY,GALAX)</td>
														<td>9<sup>th</sup>July,2021</td>
													</tr>
													<tr>
														<td>P.T.D(STAGE1,2,&3)</td>
														<td>16<sup>th</sup>July,2021</td>
													</tr>
													<tr>
														<td>HOLIDAY(EID UL-ADHA)</td>
														<td>20<sup>th</sup>July,2021</td>
													</tr>
													<tr>
														<td>GENERAL SCHOOL REVISION</td>
														<td>19<sup>th</sup>-23<sup>rd</sup>July,2021X</td>
													</tr>
													<tr>
														<td>WEIGHING</td>
														<td>22<sup>nd</sup>July,2021</td>
													</tr>
													<tr>
														<td>END OF TERM ASSESSMENT</td>
														<td>26<sup>th</sup>-30<sup>th</sup>July,2021</td>
													</tr>
													<tr>
														<td>HOLIDAY (FOUNDER’S DAY)</td>
														<td>4<sup>th</sup>AUGUST</td>
													</tr>
													<tr>
														<td>VACATION</td>
														<td>6<sup>th</sup>AUGUST</td>
													</tr>
												</table>

												<table class="table table-bordered">
													<tr>
														<td>ABACUS MENTAL ARITHMETRIC
															SYSTEMS(UCMAS)</td>
															<td>EVERY THURSDAY</td>
														</tr>
														<tr>
															<td>CLUB ACTIVITIES</td>
															<td>EVERY FRIDAY</td>
														</tr>
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
