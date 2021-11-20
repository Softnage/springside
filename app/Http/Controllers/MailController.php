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
}
