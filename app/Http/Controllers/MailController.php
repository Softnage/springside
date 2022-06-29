<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Mail\WebsiteFormMail;

class MailController extends Controller
{
	public function sendMail(Request $req) {
		$req->validate([
			'name' => 'required',
			// 'subject' => 'required',
			'sender_email' => 'required',
			// 'sender_phone' => 'required',
			'message' => 'required',
		]);

		$mail_message = "New message from your website contact form<br />";
		$mail_message .= "Sender's Details:<br />";
		$mail_message .= "Name: {$req->name}<br />";
		$mail_message .= "Email: {$req->sender_email}<br />";
		$mail_message .= "Phone: {$req->sender_phone}<br />";
		$mail_message .= "Subject: {$req->subject}<br />";
		$mail_message .= "Message:<br />";
		$mail_message .= "{$req->message}<br />";

		Mail::to(content('app.web_contact_email'))->send(new WebsiteFormMail([
			'message' => $mail_message,
		]));

		return response()->json([
			'data' => null,
			'message' => 'Mail delivered'
		]);
	}

	public function onlineApplication(Request $req) {
		$req->validate([
			'guardian_name' => 'required',
			'guardian_phone' => 'required',
			'ward_name' => 'required',
			// 'ward_first_name' => 'required',
			'ward_age' => 'required',
			'ward_class' => 'required',
		]);

		$mail_message = "New online application<br />";
		$mail_message .= "Parent Details:<br />";
		$mail_message .= "Name: {$req->guardian_name}<br />";
		// $mail_message .= "Email: {$req->guardian_email}<br />";
		$mail_message .= "Phone: {$req->guardian_phone}<br />";
		// $mail_message .= "Subject: {$req->subject}<br />";
		$mail_message .= "Ward Details:<br />";
		$mail_message .= "Name: {$req->ward_name}<br />";
		// $mail_message .= "First Name: {$req->ward_first_name}<br />";
		// $mail_message .= "Other Names: {$req->ward_other_names}<br />";
		$mail_message .= "Age: {$req->ward_age}<br />";
		$mail_message .= "Class: {$req->ward_class}<br />";

		Mail::to(content('app.web_contact_email'))->send(new WebsiteFormMail([
			'message' => $mail_message,
			'subject' => 'Online Application',
		]));

		return back()
		->with('successMessage', 'Your application has been submitted');
	}

}
