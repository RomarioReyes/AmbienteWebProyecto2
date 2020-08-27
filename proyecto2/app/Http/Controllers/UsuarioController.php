<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class UsuarioController extends Controller
{
    public function login(){
        return view('inicio.login');
    }
    public function registro(){
        return view('inicio.registro');
    }

    public function crear(Request $request){
        // return $request->all();
        $usuarioNuevo = new App\Usuario;
        $usuarioNuevo->nombre=$request->nombre;
        $usuarioNuevo->apellidos=$request->apellidos;
        $usuarioNuevo->numero=$request->numero;
        $usuarioNuevo->correo=$request->correo;
        $usuarioNuevo->direccion=$request->direccion;
        $usuarioNuevo->cedula=$request->cedula;
        $usuarioNuevo->contra=$request->contra;

        //  if($usuarioNuevo->save()){
            
        //  }
         session(['usuario'=>$usuarioNuevo]);
        return session('usuario');
    }
    
}
