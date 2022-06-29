<form method="post" class="contact-bx ssa-contact-form" action="{{ route('contact.send_email') }}">
	@csrf
	<div class="ajax-message"></div>
	<div class="heading-bx left">
		<h2 class="title-head">Get In <span>Touch</span></h2>
		<p>
			Fill the form below to send us an email. We shall reply as soon as possible.
		</p>
	</div>
	<div class="row placeani">
		<div class="col-lg-6">
			<div class="form-group">
				<div class="input-group">
					<label>Your Name</label>
					<input name="name" type="text" required class="form-control valid-character" />
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<div class="input-group">
					<label>Your Email Address</label>
					<input name="sender_email" type="email" class="form-control" required />
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<div class="input-group">
					<label>Your Phone</label>
					<input name="sender_phone" type="text" class="form-control int-value" />
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<div class="input-group">
					<label>Subject</label>
					<input name="subject" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="form-group">
				<div class="input-group">
					<label>Type Message</label>
					<textarea name="message" rows="4" class="form-control" required></textarea>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<button name="submit" type="submit" value="Submit" class="btn btn-sm">
				Send Message <i class='far fa-paper-plane'></i>
			</button>
		</div>
	</div>
</form>
