<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Mail\SendMail;

class MessageController extends Controller
{
    public function senddemandeformation(Request $request)
    {
        
    
        $customMessages = [
            'completename.required' => 'Le nom complet est requis !',
            'email.required' => 'L\'email complet est requis !',
            'message.required' => 'Le message est requis !',
            'phone.required' => 'Le numéro de téléphone est requis !',
            'email' => 'Email incorrect !',
            'phone.regex' => 'Format incorrect du numéro de téléphone !'
        ];
    
        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'
        ],$customMessages);

        $data=array(
            'completename'=>$request->completename,
            'subject'=>'Demande de formation',
            'email'=>$request->email,
            'gender'=>$request->gender,
            'category'=>$request->category,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'message'=>$request->message,
            'trainingtype'=>$request->trainingtype
        );

        Mail::to(env('EMAIL_ADMIN_ITBEE'))->send(new SendMail($data));

        return back()->with('success','Thanks!');
    }

    public function senddemandecoaching(Request $request)
    {
        $customMessages = [
            'completename.required' => 'Le nom complet est requis !',
            'email.required' => 'L\'email complet est requis !',
            'message.required' => 'Le message est requis !',
            'phone.required' => 'Le numéro de téléphone est requis !',
            'email' => 'Email incorrect !',
            'phone.regex' => 'Format incorrect du numéro de téléphone !'
        ];

        $this->validate($request,[
            'completename'=>'required', 
            'message'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'
        ],$customMessages);

        $data=array(
            'completename'=>$request->completename,
            'subject'=>'Demande de coaching',
            'email'=>$request->email,
            'gender'=>$request->gender,
            'category'=>$request->category,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'message'=>$request->message
        );

        Mail::to(env('EMAIL_ADMIN_ITBEE'))->send(new SendMail($data));

        return back()->with('success','Thanks!');
    }

    public function senddemandeconsulting(Request $request)
    {
        $customMessages = [
            'completename.required' => 'Le nom complet est requis !',
            'email.required' => 'L\'email complet est requis !',
            'message.required' => 'Le message est requis !',
            'phone.required' => 'Le numéro de téléphone est requis !',
            'email' => 'Email incorrect !',
            'phone.regex' => 'Format incorrect du numéro de téléphone !'
        ];

        $this->validate($request,[
            'completename'=>'required', 
            'message'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'
        ],$customMessages);

        $data=array(
            'completename'=>$request->completename,
            'subject'=>'Demande de consulting',
            'email'=>$request->email,
            'gender'=>$request->gender,
            'category'=>$request->category,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'message'=>$request->message
        );

        Mail::to(env('EMAIL_ADMIN_ITBEE'))->send(new SendMail($data));

        return back()->with('success','Thanks!');
    }

    public function senddemandeservicemaintinfo(Request $request)
    {
        $customMessages = [
            'completename.required' => 'Le nom complet est requis !',
            'email.required' => 'L\'email complet est requis !',
            'message.required' => 'Le message est requis !',
            'phone.required' => 'Le numéro de téléphone est requis !',
            'email' => 'Email incorrect !',
            'phone.regex' => 'Format incorrect du numéro de téléphone !'
        ];

        $this->validate($request,[
            'completename'=>'required', 
            'message'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'
        ],$customMessages);

        $data=array(
            'completename'=>$request->completename,
            'subject'=>'Demande de service en maintenance informatique',
            'email'=>$request->email,
            'gender'=>$request->gender,
            'category'=>$request->category,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'message'=>$request->message
        );

        Mail::to(env('EMAIL_ADMIN_ITBEE'))->send(new SendMail($data));

        return back()->with('success','Thanks!');
    }

    public function senddemandeservicesecretbureau(Request $request)
    {
        $customMessages = [
            'completename.required' => 'Le nom complet est requis !',
            'email.required' => 'L\'email complet est requis !',
            'message.required' => 'Le message est requis !',
            'phone.required' => 'Le numéro de téléphone est requis !',
            'email' => 'Email incorrect !',
            'phone.regex' => 'Format incorrect du numéro de téléphone !'
        ];

        $this->validate($request,[
            'completename'=>'required', 
            'message'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'
        ],$customMessages);

        $data=array(
            'completename'=>$request->completename,
            'subject'=>'Demande de service en sécrétariat',
            'email'=>$request->email,
            'gender'=>$request->gender,
            'category'=>$request->category,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'message'=>$request->message
        );

        Mail::to(env('EMAIL_ADMIN_ITBEE'))->send(new SendMail($data));

        return back()->with('success','Thanks!');
    }

    public function sendreservationmateriel(Request $request)
    {
        $customMessages = [
            'quantity.required' => 'La quantité est requise !',
            'completename.required' => 'Le nom complet est requis !',
            'email.required' => 'L\'email complet est requis !',
            'message.required' => 'Le message est requis !',
            'phone.required' => 'Le numéro de téléphone est requis !',
            'email' => 'Email incorrect !',
            'phone.regex' => 'Format incorrect du numéro de téléphone !',
            'quantity.regex' => 'Format incorrect pour le champ :attribute !'
        ];

        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/',
            'quantity'=>'required|regex:/[0-9]+/'
        ],$customMessages);

        $data=array(
            'completename'=>$request->completename,
            'subject'=>'Réservation de matériel informatique',
            'email'=>$request->email,
            'gender'=>$request->gender,
            'category'=>$request->category,
            'phone'=>$request->phone,
            'materialtype'=>$request->materialtype,
            'quantity'=>$request->quantity,
            'message'=>$request->message
        );

        Mail::to(env('EMAIL_ADMIN_ITBEE'))->send(new SendMail($data));

        return back()->with('success','Thanks!');
    }
}
