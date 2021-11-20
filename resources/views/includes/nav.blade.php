<header class="header rs-nav @if (Request::is(route('home'))) header-transparent @endif">
	<div class="top-bar">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="topbar-left">
					<ul>
						<li>
							<a href="{{ route('admission_procedure') }}"><i class="fas fa-question-circle"></i>How to Apply</a>
						</li>
						<li>
							<a href="mailto:{{ content('app.contact_email') }}"><i class="fas fa-envelope-o"></i>{{ content('app.contact_email') }}</a>
						</li>
					</ul>
				</div>
				<div class="topbar-right">
					<ul>
						{{-- <li>
							<select class="header-lang-bx">
								<option data-icon="flag flag-uk">English UK</option>
								<option data-icon="flag flag-us">English US</option>
							</select>
						</li> --}}
						<li><a href="tel:{{ content('app.primary_phone') }}">Admission Enquiries: {{ content('app.primary_phone') }}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="sticky-header navbar-expand-lg">
		<div class="menu-bar clearfix">
			<div class="container clearfix">
				<!-- Header Logo ==== -->
				<div class="menu-logo">
					<a href="{{ route('home') }}">
						<img src="{{ asset('images/logo.png') }}" alt="{{ content('app.name') }}" />
					</a>
				</div>
				<!-- Mobile Nav Button ==== -->
				<button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<!-- Author Nav ==== -->
				<div class="secondary-menu">
					<div class="secondary-inner">
						<ul>
							<li>
								<a href="{{ content('app.social.twitter.address') }}" target="_blank"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="{{ content('app.social.instagram.address') }}" target="_blank"><i class="fab fa-instagram"></i></a>
							</li>
							<li>
								<a href="{{ content('app.social.facebook.address') }}" target="_blank"><i class="fab fa-facebook"></i></a>
							</li>
							<li>
								<a href="{{ content('app.social.linkedin.address') }}" target="_blank"><i class="fab fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>

				<!-- Navigation Menu ==== -->
				<div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
					<div class="menu-logo">
						<a href="{{ route('home') }}">
							<img src="{{ asset('images/logo.png') }}" alt="{{ content('app.name') }}" />
						</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="@if(Request::is('home')) active @endif">
							<a href="{{ route('home') }}">Home</a>
						</li>
						<li class="add-mega-menu @if(in_array(Request::fullUrl(), [
							route('about'),
							route('vision'),
							route('school_policies'),
							])) active @endif">
							<a href="javascript:;">About Us <i class="fas fa-chevron-down"></i></a>
							<ul class="sub-menu add-menu">
								<li class="add-menu-left">
									<h5 class="menu-adv-title">{{ content('app.name') }}</h5>
									<ul>
										<li>
											<a href="{{ route('about') }}">Our School</a>
										</li>
										<li>
											<a href="{{ route('vision') }}">Our Vision</a>
										</li>
										<li>
											<a href="{{ route('school_policies') }}">School Policies</a>
										</li>
									</ul>
								</li>
								<li class="add-menu-right">
									<img src="{{ asset('images/nav/about.jpg') }}" alt=""/>
								</li>
							</ul>
						</li>
						<li class="add-mega-menu @if(in_array(Request::fullUrl(), [
							route('fees'),
							route('admission_procedure'),
							route('admission_policy'),
							])) active @endif">
							<a href="javascript:;">Admissions <i class="fas fa-chevron-down"></i></a>
							<ul class="sub-menu add-menu">
								<li class="add-menu-left">
									<h5 class="menu-adv-title">How To Apply</h5>
									<ul>
										<li><a href="{{ route('fees') }}">Fees</a></li>
										<li><a href="{{ route('admission_procedure') }}">Admission Procedure</a></li>
										<li><a href="{{ route('admission_policy') }}">Admission Policies</a></li>
										{{-- <li><a href="profile.html">Instructor Profile</a></li>
										<li><a href="event.html">Upcoming Event</a></li>
										<li><a href="membership.html">Membership</a></li> --}}
									</ul>
								</li>
								<li class="add-menu-right">
									<img src="{{ asset('images/nav/admissions.jpg') }}" alt=""/>
								</li>
							</ul>
						</li>
						<li class="add-mega-menu @if(in_array(Request::fullUrl(), [
							route('academics.creche'),
							route('academics.lower_primary'),
							route('academics.upper_primary'),
							route('academics.jhs'),
							])) active @endif">
							<a href="javascript:;">Academics <i class="fas fa-chevron-down"></i></a>
							<ul class="sub-menu add-menu">
								<li class="add-menu-left">
									<h5 class="menu-adv-title">Stages of Learning</h5>
									<ul>
										<li><a href="{{ route('academics.creche') }}">Creche</a></li>
										<li><a href="{{ route('academics.lower_primary') }}">Lower Primary</a></li>
										<li><a href="{{ route('academics.upper_primary') }}">Upper Primary</a></li>
										<li><a href="{{ route('academics.jhs') }}">J.H.S</a></li>
									</ul>
								</li>
								<li class="add-menu-right">
									<img src="{{ asset('images/nav/academics.jpg') }}" alt=""/>
								</li>
							</ul>
						</li>
						<li class="@if(in_array(Request::fullUrl(), [
							route('setup.teaching'),
							route('setup.extra_curricula'),
							route('setup.curriculum'),
							route('setup.calendar')
							])) active @endif">
							<a href="javascript:;">Our School Setup <i class="fas fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{ route('setup.calendar') }}">Term Dates</a></li>
								<li><a href="{{ route('setup.curriculum') }}">Curriculum</a></li>
								<li><a href="{{ route('setup.teaching') }}">Teaching and Learning</a></li>
								<li><a href="{{ route('setup.extra_curricula') }}">Extra Curricula Activities</a></li>
							</ul>
						</li>
						<li class="@if (Request::is('contact')) active @endif">
							<a href="{{ route('contact') }}">Contact</a>
						</li>
					</ul>
					<div class="nav-social-link">
						<a href="{{ content('app.social.twitter.address') }}" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="{{ content('app.social.instagram.address') }}" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="{{ content('app.social.facebook.address') }}" target="_blank"><i class="fab fa-facebook"></i></a>
						<a href="{{ content('app.social.linkedin.address') }}" target="_blank"><i class="fab fa-linkedin"></i></a>
					</div>
				</div>
				<!-- Navigation Menu END ==== -->
			</div>
		</div>
	</div>
</header>
