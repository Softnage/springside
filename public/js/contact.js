document.querySelector('.ssa-contact-form').addEventListener('submit', async e => {
	e.preventDefault();

	const submitButton = e.target.querySelector("button[type='submit']");

	const formData = new FormData(e.target);

	try {
		submitButton.setAttribute('disabled', '');
		submitButton.innerHTML = "Send Message <i class='fas fa-spinner fa-spin'></i>";
		const res = await axios.post(e.target.getAttribute('action'), formData);
		alertify.success('Mail delivered');
	}
	catch(error) {
		alertify.error('Failed to send mail');

		if(error.response.status == 422) {
			const errors = Object.values(error.response.data.errors)
			.map((valueArr) => valueArr.join("<br />"))
			.join("<br />");

			alertify.alert(errors);
		}
	}
	finally {
		submitButton.removeAttribute('disabled');
		submitButton.innerHTML = "Send Message <i class='fas fa-paper-plane'></i>";

	}

});
