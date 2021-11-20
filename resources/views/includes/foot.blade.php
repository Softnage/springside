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
							Summis esse labore amet export irure ipsum quorum enim enim dolore duis magna
							noster fore amet nulla quae esse quis esse minim aliqua eram sint tempor sint
							sint tamen dolore minim magna nisi summis aute dolor illum veniam sint enim
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
										<a href="{{ route('admission_procedure') }}">Admisions</a>
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
									<li>
										<a href="tel:{{ content('app.primary_phone') }}"><i class="fas fa-phone"></i> {{ content('app.primary_phone') }}</a>
									</li>
									<li>
										<a href="mailto:{{ content('app.contact_email') }}"><i class="fas fa-envelope-open"></i> {{ content('app.contact_email') }}</a>
									</li>
									<li>
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
										<a href="{{ route('academics.creche') }}">Creche</a>
									</li>
									<li>
										<a href="{{ route('academics.lower_primary') }}">Lower Primary</a>
									</li>
									<li>
										<a href="{{ route('academics.upper_primary') }}">Upper Primary</a>
									</li>
									<li>
										<a href="{{ route('academics.jhs') }}">JHS</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
					<div class="widget widget_gallery gallery-grid-4">
						<h5 class="footer-title">Find Us</h5>
						<div style="width100%; height: 260px;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0093941035057!2d-1.6253296857144353!3d6.6457539951945845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb913bfadaeb6b%3A0xfa401b75304550f6!2sSpring%20Side%20Academy!5e0!3m2!1sen!2sgh!4v1637167617199!5m2!1sen!2sgh" style="object-fit:cover; border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						{{-- <ul class="magnific-image">
							<li>
							<a href="{{ asset('assets/images/gallery/pic1.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic1.jpg') }}" alt=""></a>
						</li>
							<li>
							<a href="{{ asset('assets/images/gallery/pic2.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic2.jpg') }}" alt=""></a>
						</li>
							<li>
							<a href="{{ asset('assets/images/gallery/pic3.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic3.jpg') }}" alt=""></a>
						</li>
							<li>
							<a href="{{ asset('assets/images/gallery/pic4.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic4.jpg') }}" alt=""></a>
						</li>
							<li>
							<a href="{{ asset('assets/images/gallery/pic5.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic5.jpg') }}" alt=""></a>
						</li>
							<li>
							<a href="{{ asset('assets/images/gallery/pic6.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic6.jpg') }}" alt=""></a>
						</li>
							<li>
							<a href="{{ asset('assets/images/gallery/pic7.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic7.jpg') }}" alt=""></a>
						</li>
							<li>
							<a href="{{ asset('assets/images/gallery/pic8.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic8.jpg') }}" alt=""></a>
						</li>
						</ul> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">
					<small>Copyright <i class="fas fa-copyright"></i> <span onload="event.target.innerHTML = new Date().getFullYear();">2021</span> {{ content('app.name') }}</small>
				</div>
			</div>
		</div>
	</div>
</footer>
{{-- <button class="back-to-top fas fa-chevron-up" ></button> --}}


<!-- External JavaScripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('assets/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('assets/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('assets/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
{{-- <script src='{{ asset('assets/vendors/switcher/switcher.js'></script> --}}
<!-- Revolution JavaScripts Files -->
<script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script>
jQuery(document).ready(function() {
	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"{{ asset('assets/vendors/revolution/js/') }}",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"on",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style: "uranus",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},

			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[768,600,600,600],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
</script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('/js/contact.js') }}" charset="utf-8"></script>
