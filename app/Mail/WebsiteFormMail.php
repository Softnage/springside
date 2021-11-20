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

	/**
	* Create a new msg instance.
	*
	* @return void
	*/
	public function __construct($params)
	{
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
		->from("noreply@$host", 'Website Form Mail')
		->view('mails.plain');
	}
}
