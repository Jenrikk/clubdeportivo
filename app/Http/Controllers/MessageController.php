<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function store(Request $request)
   {
   		$mensaje = request()->validate([
   			'nombre' => 'required',
   			'email' => 'required',
   			'subject' => 'required',
   			'content' => 'required|min:3'
   		]);
   		//enviar email
   		Mail::to('henrix427@gmail.com')->queue(new MessageReceived($mensaje));

   		return back()->with('status', 'Recibimos tu mensaje, te responderemos cuanto antes');
   }

}
