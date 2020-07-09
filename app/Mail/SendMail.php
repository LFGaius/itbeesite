<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable,SerializesModels;
    public function senddemandeformation(Request $request)
    {
        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|required|regex:/(01)[0-9]{9}/'    
        ]);
    }
}
