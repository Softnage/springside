<footer>
	<div class="footer-top">
		<div class="pt-exebar">
			<div class="container">
				<div class="d-flex align-items-stretch">
					<div class="pt-logo mr-auto">
						<a href="{{ route('home') }}">
							<img src="{{ asset('images/logo-white.png') }}" alt="{{ content('app.name') }}" style="height:50px;" />
						</a>
					</div>
					<div class="pt-social-link">
						<ul class="list-inline m-a0">
							<li>
								<a href="{{ content('app.social.twitter.address') }}" target="_blank" class="btn-link"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="{{ content('app.social.instagram.address') }}" target="_blank" class="btn-link"><i class="fab fa-instagram"></i></a>
							</li>
							<li>
								<a href="{{ content('app.social.facebook.address') }}" target="_blank" class="btn-link"><i class="fab fa-facebook"></i></a>
							</li>
							<li>
								<a href="{{ content('app.social.linkedin.address') }}" target="_blank" class="btn-link"><i class="fab fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<div class="pt-btn-join">
						<a href="{{ route('admission_procedure') }}" class="btn btn-sm">How to Apply</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
					<div class="widget">
						<h5 class="footer-title">{{ content('app.name') }}</h5>
						<p class="m-b20" style='font-size:13px;'>
							Our grounds provide great opportunities for outdoor learning, as
							well as play, sport and family events. Our vision is to foster
							educational excellence as all pupils prepare to become successful
							citizens.
						</p>
					</div>
				</div>
				<div class="col-12 col-lg-5 col-md-7 col-sm-12">
					<div class="row">
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Useful Links</h5>
								<ul>
									<li>
										<a href="{{ route('home') }}">Home</a>
									</li>
									<li>
										<a href="{{ route('about') }}">About</a>
									</li>
									<li>
										<a href="{{ route('admission_procedure') }}">Admissions</a>
									</li>
									<li>
										<a href="{{ route('setup.calendar') }}">Calendar</a>
									</li>
									<li>
										<a href="{{ route('contact') }}">Contact</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Get In Touch</h5>
								<ul>
									<li style="word-break: break-all;">
										<a href="tel:{{ content('app.primary_phone') }}"><i class="fas fa-phone"></i> {{ content('app.primary_phone') }}</a>
									</li>
									<li style="word-break: break-all;">
										<a href="tel:{{ content('app.secondary_phone') }}"><i class="fas fa-phone"></i> {{ content('app.secondary_phone') }}</a>
									</li>
									<li style="word-break: break-all;">
										<a href="mailto:{{ content('app.contact_email') }}"><i class="fas fa-envelope-open"></i> {{ content('app.contact_email') }}</a>
									</li>
									<li style="word-break: break-all;">
										<a href="{{ content('app.map_web_address') }}" target="_blank"><i class="fas fa-map-marker"></i> {{ content('app.location') }}</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-4 col-lg-4 col-md-4 col-sm-4">
							<div class="widget footer_widget">
								<h5 class="footer-title">Academics</h5>
								<ul>
									<li>
										<a href="{{ route('academics.creche') }}">Pre-School</a>
									</li>
									<li>
										<a href="{{ route('academics.primary') }}">Primary</a>
									</li>
									{{-- <li>
										<a href="{{ route('academics.upper_primary') }}">Upper Primary</a>
									</li>
									<li>
										<a href="{{ route('academics.jhs') }}">JHS</a>
									</li> --}}
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
					<div class="widget widget_gallery gallery-grid-4">
						<h5 class="footer-title">Find Us</h5>
						<div style="width:100%;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0093941035057!2d-1.6253296857144353!3d6.6457539951945845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb913bfadaeb6b%3A0xfa401b75304550f6!2sSpring%20Side%20Academy!5e0!3m2!1sen!2sgh!4v1637167617199!5m2!1sen!2sgh" style="object-fit:cover; border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">
					<small>Copyright <i class="fas fa-copyright"></i> <span>{{ Carbon\Carbon::now()->format('Y') }}</span> {{ content('app.name') }}</small>
				</div>
			</div>
		</div>
	</div>
</footer>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/functions.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('/js/contact.js') }}" charset="utf-8"></script>
