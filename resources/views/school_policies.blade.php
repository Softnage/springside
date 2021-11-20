@extends('layouts.web')

@section('page_head')
	{!! seo([
		'title' => "School Policies | " . content('app.name')
		]) !!}

	<link href="https://unpkg.com/pattern.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('css/school-policies.css') }}" />
@endsection

@section('page_content')
	<div class="page-content">
		<div class="page-banner ovbl-dark" style="background-image:url(assets/ssa_images_copy/IMG_6115.JPG);">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">School Policies</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('about') }}">About Us</a></li>
					<li>School Policies</li>
				</ul>
			</div>
		</div>
		<div class="content-block">

			<div class="intro section-sp1">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="tabs">
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-1">
									<label class="tab-label" for="2021-2022-term-1">Health</label>
									<div class="tab-content">
										<p>
											Amet qui cernantur e de appellat hic admodum, ab minim summis ad occaecat,
											excepteur amet quo admodum firmissimum, quae arbitror distinguantur quo commodo
											minim aliquip litteris, mandaremus anim do nostrud domesticarum sed dolor non
											offendit. Ingeniis id aliquip si ubi vidisse a possumus, laboris in anim do
											labore ab singulis quo eram de do aut export malis magna, multos qui te sunt
											cupidatat nam in quo fore senserit de quibusdam ut quibusdam. Noster nescius se
											minim fugiat.
										</p>
									</div>
								</div>
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-2">
									<label class="tab-label" for="2021-2022-term-2">Academics</label>
									<div class="tab-content">
										<p>
											Doctrina concursionibus do iudicem ex aute an ad malis aliquip sed
											iis culpa appellat mentitum eu quorum senserit et cohaerescant a ea appellat
											coniunctione, amet aliquip ab probant, dolore est litteris ubi eiusmod ex
											magna.
										</p>
									</div>
								</div>
								<div class="tab">
									<input type="checkbox" id="2021-2022-term-3">
									<label class="tab-label" for="2021-2022-term-3">Student Conduct</label>
									<div class="tab-content">
										<p>
											Cernantur quis tempor nam fugiat. Dolore senserit se aliquip, enim si
											appellat, ad excepteur instituendarum, tamen eruditionem senserit malis probant,
											ingeniis eu ipsum, in tempor nisi id incurreret, expetendis reprehenderit do
											eiusmod de id te legam fugiat nulla. Commodo illustriora nam probant id et quis
											noster tamen incididunt. Quo fore quo ipsum, a ut praesentibus, ad dolor qui
											aliqua, eiusmod culpa cupidatat excepteur a est ea cillum incididunt, quo multos
											dolor fugiat possumus, constias veniam cernantur proident o sed tempor laboris.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 d-none d-md-block">
							<div class="pattern-diagonal-lines-sm clr-2">
							<img src="{{ asset('images/policies.jpg') }}" style="width: 100%; transform:translate(30px, -30px);" />
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

@endsection
