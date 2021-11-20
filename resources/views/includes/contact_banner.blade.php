<div class="bg-primary text-white contact-info-bx">
	<h2 class="m-b10 title-head font-2">Contact <span>Information</span></h2>
	<p style="font-size:14px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="widget widget_getintuch">
		<ul>
			<li style="font-size:14px;">
				<a style='color:#fff;' href="{{ content('app.map_web_address') }}" target="_blank"><i class="fas fa-map-marker"></i>{{ content('app.location') }}</a>
			</li>
			<li style="font-size:14px;">
				<a style='color:#fff;' href="tel:{{ content('app.primary_phone') }}"><i class="fas fa-phone"></i>{{ content('app.primary_phone') }}</a>
			</li>
			<li style="font-size:14px;">
				<a style='color:#fff;' href="mailto:{{ content('app.contact_email') }}"><i class="fas fa-envelope-email"></i>{{ content('app.contact_email') }}</a>
			</li>
		</ul>
	</div>
	<h5 class="m-t0 m-b20">Follow Us</h5>
	<ul class="list-inline contact-social-bx">
		<li><a href="{{ content('app.social.twitter.address') }}" target="_blank" class="btn outline"><i class="fab fa-twitter"></i></a></li>
		<li><a href="{{ content('app.social.instagram.address') }}" target="_blank" class="btn outline"><i class="fab fa-instagram"></i></a></li>
		<li><a href="{{ content('app.social.facebook.address') }}" target="_blank" class="btn outline"><i class="fab fa-facebook"></i></a></li>
		<li><a href="{{ content('app.social.linkedin.address') }}" target="_blank" class="btn outline"><i class="fab fa-linkedin"></i></a></li>
	</ul>
</div>
