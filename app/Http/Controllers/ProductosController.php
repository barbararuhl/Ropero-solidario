<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    
	public function mostrar () {
		return view('productos');

	}

	public function mostrarMujeres(){
		return view('productos.mujeres');
	}

	public function mostrarHombres(){
		return view('productos.hombres');
	}

	public function mostrarNenes (){
		return view('productos.nenes');
	}
}
