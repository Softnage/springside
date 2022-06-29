<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WebsiteFormMail extends Mailable
{
	use Queueable, SerializesModels;

	public $msg = '';
	public $subject = 'Website Form Mail';

	/**
	* Create a new msg instance.
	*
	* @return void
	*/
	public function __construct($params)
	{
		$this->subject = array_key_exists('subject', $params) ? $params['subject'] : 'Website Form Mail';
		$this->msg = $params['message'];
	}

	/**
	* Build the msg.
	*
	* @return $this
	*/
	public function build()
	{
		$host = content('app.host');
		return $this
		->from("noreply@$host", $this->subject)
		->view('mails.plain');
	}
}
