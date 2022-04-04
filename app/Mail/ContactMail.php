<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
  use Queueable, SerializesModels;

  public $content;
  public $email;
  public $name;

  public function __construct($content)
  {
    $this->email = auth()->user()->email;
    $this->name = auth()->user()->name;
    $this->content = $content;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->view('email.contact')->subject($this->content['subject']);
  }
}
