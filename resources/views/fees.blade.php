@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "Fees | " . content('app.name'),
		'description' => ' Fees paid are non-refundable and should be made through any of these means; a Valid cheque, Bank Deposit, or through Mobile Money.'
		]) !!}
	<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url();">
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
						<p>
							Fee payment should be made through any of these options:
							<ul>
								<li style="font-size:14px;">
									The issue of a valid check payable to SPRING SIDE ACADEMY
								</li>
								<li style="font-size:14px;">
									By making a deposit into any of the following accounts

									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Account Type</th>
												<th>Account Name</th>
												<th>Account Number</th>
												<th>Bank/Network</th>
												<th>Paid in by/Reference</th>
											</tr>
										</thead>
										<tbody>
											@foreach (content('app.accounts') as $account)
											<tr>
													<td>{{ $account['type'] }}</td>
													<td>{{ $account['name'] }}</td>
													<td>{{ $account['number'] }}</td>
													<td>{{ $account['bank_network'] }}</td>
													<td>{{ $account['paid_in_by'] }}</td>
											</tr>
										@endforeach
										</tbody>
									</table>
								</li>
							</ul>
						</p>
						<p>
							Fees must be fully paid by the end of the 7th week on the school's calendar
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
