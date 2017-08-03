<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

class ContactoController extends Controller
{
    
	public function mostrar () {
		return view('contacto');
	}

	public function validar(Request $request) {

		$this->validate($request, [
        'nombre' => 'required|max:100',
		'email' => 'required|email|unique:users',
		'telefono' => 'required|numeric|min:1',
		'mensaje' => 'required|max:255',
    	]);


    	Mail::send('contactoEnviado', array('dato', $request), function ($message) {
    		$message->to('digitalhousebarbi@gmail.com', 'nombre')->subject('hellouuu');
    	});

		//cuando terminen lo importante ver de enviar con gmail
		return view('contactoEnviado');
	}
}
