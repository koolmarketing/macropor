<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaginasController extends Controller
{
	public function VerIcopor(){
		return view("icopor");
	}

	public function VerBovedillasCasetones(){
		return view("bovedillas_casetones");
	}

	public function VerIngenieriaCivil(){
		return view("ingenieria_civil");
	}

	public function VerAligeramientos(){
		return view("aligeramientos");
	}

	public function VerOtrasAplicaciones(){
		return view("otras_aplicaciones");
	}
	public function EnviarMail(Request $request){
		$name = $request->input('name');
		$email = $request->input('email');
		$phone = $request->input('phone');
		$city = $request->input('city');
		$message= $request->input('message');


		$para      = 'camoranns@gmail.com';
		$titulo    = 'Contacto sitio web';
		$mensaje   = '<h3Una persona nos ha contactado</h3>
		<p><b>Nombre: </b>                '. $name .'</p>	  
		<p><b>Email:</b>                       '. $email.' </p>
		<p><b>Teléfono:</b>               '. $phone .'</p>		
		<p><b>Ciudad: </b>                      '. $city .' </p>
		<p><b>Mensaje:  </b>                     '. $message .'</p>
		
		<p></p>
		'	;
		$cabeceras = 'From: icoporcali@gmail.com' . "\r\n" .
		
		"Content-type: text/html; charset=UTF-8" . "\r\n".
		'X-Mailer: PHP/' . phpversion();
		if (mail($para, $titulo, $mensaje, $cabeceras)) {
			return response()->json(['mensaje' => 'El mensaje se ha enviado ','tipo'=>'Exito']);
		}else{
			return response()->json(['mensaje' => 'El mensaje no pudo ser enviado ','tipo'=>'Error']);
		}
		

		
	}
}
