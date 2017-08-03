<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    
	public function mostrar () {
		return view('productos');

	}

	public function mostrarMujeres(){
		$productos = Producto::where('clase', 'mujer')->paginate(1);

		return view('productos.mujeres')->with('productos', $productos);
	}

	public function mostrarHombres(){
		$productos = Producto::where('clase', 'hombre')->paginate(8);

		return view('productos.hombres')->with('productos', $productos);
	}

	public function mostrarNenes (){
		$productos = Producto::where('clase', 'nene')->paginate(8);

		return view('productos.nenes')->with('productos', $productos);
	}
	

	public function crear(Request $request ) {
		$producto = new Producto;

		$producto->prenda = $request->prenda;
		$producto->precio = $request->precio;
		$producto->talle = $request->talle;
		$producto->detalle = $request->detalle;
		$producto->clase = $request->clase;
		//$producto->avatar = $request->avatar;

		$producto->save();

		return view('/admin/dashboard');

	}

	public function eliminar(Request $request) {
		$producto = Producto::find($request->idProducto);

		$producto->delete();

		return view('/admin/dashboard');
	}
}
