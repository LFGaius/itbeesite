<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable,SerializesModels;

    public $data;

    public function __construct($data)
    {
       $this->data=$data; 
    }

    public function build()
    {
        return $this->from('liburialgaius@gmail.com')->subject($this->data['subject'])
        ->view('email_template.dynamic_demande_template')->with('data',$this->data);
    }
}
