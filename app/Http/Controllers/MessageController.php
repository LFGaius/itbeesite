<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;;

class MessageController extends Controller
{
    public function senddemandeformation(Request $request)
    {
        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'    
        ]);
    }

    public function senddemandecoaching(Request $request)
    {
        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'    
        ]);
    }

    public function senddemandeconsulting(Request $request)
    {
        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'    
        ]);
    }

    public function senddemandeservicemaintinfo(Request $request)
    {
        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'    
        ]);
    }

    public function senddemandeservicesecretbureau(Request $request)
    {
        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/'    
        ]);
    }

    public function sendreservationmateriel(Request $request)
    {
        $this->validate($request,[
            'completename'=>'required',  
            'email'=>'required|email',
            'phone'=>'required|regex:/[0-9]+/',
            'quantite'=>'required|regex:/[0-9]+'
        ]);
    }
}
