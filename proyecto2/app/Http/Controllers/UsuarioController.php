<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class UsuarioController extends Controller
{
    public function login()
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $usus = DB::table('usuarios')->where('tipo', 2)->count();
                $produc = App\Compra::all()->count();
                $ventas = App\Compra::all();
                $ventasT = 0;
                foreach ($ventas as $item) {
                    $ventasT += $item->precio;
                }

                session(['pv' => $produc]);
                return view('usuario.logeado', compact('usus'), compact('ventasT'));
            } else {
                $categorias = App\Categoria::all();
                $produC = DB::table('compras')->where('id_usuario', session('usuid'))->count();
                $produT = DB::table('compras')->where('id_usuario', session('usuid'));
                $total = 0;
                // foreach($produT as $item){
                //     $total+=$item->precio;
                // }

                return view('usuario.logeadoC', compact('categorias', 'produC', 'total'));
            }
        } else {
            return view('inicio.login');
        }
    }
    public function registro()
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $usus = DB::table('usuarios')->where('tipo', 2)->count();
                $produc = App\Compra::all()->count();
                $ventas = App\Compra::all();
                $ventasT = 0;
                foreach ($ventas as $item) {
                    $ventasT += $item->precio;
                }

                session(['pv' => $produc]);
                return view('usuario.logeado', compact('usus'), compact('ventasT'));
            } else {
                $categorias = App\Categoria::all();
                $produC = DB::table('compras')->where('id_usuario', session('usuid'))->count();
                $produT = DB::table('compras')->where('id_usuario', session('usuid'));
                $total = 0;
                // foreach($produT as $item){
                //     $total+=$item->precio;
                // }

                return view('usuario.logeadoC', compact('categorias', 'produC', 'total'));
            }
        } else {
            return view('inicio.registro');
        }
    }
    public function logeado()
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $usus = DB::table('usuarios')->where('tipo', 2)->count();
                $produc = App\Compra::all()->count();
                $ventas = App\Compra::all();
                $ventasT = 0;
                foreach ($ventas as $item) {
                    $ventasT += $item->precio;
                }

                session(['pv' => $produc]);
                return view('usuario.logeado', compact('usus'), compact('ventasT'));
            } else {
                $categorias = App\Categoria::all();
                $produC = DB::table('compras')->where('id_usuario', session('usuid'))->count();
                $produT = DB::table('compras')->where('id_usuario', session('usuid'));
                $total = 0;
                // foreach($produT as $item){
                //     $total+=$item->precio;
                // }

                return view('usuario.logeadoC', compact('categorias', 'produC', 'total'));
            }
        } else {
            return view('inicio.registro');
        }
    }

    public function LogeadoC()
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $usus = DB::table('usuarios')->where('tipo', 2)->count();
                $produc = App\Compra::all()->count();
                $ventas = App\Compra::all();
                $ventasT = 0;
                foreach ($ventas as $item) {
                    $ventasT += $item->precio;
                }

                session(['pv' => $produc]);
                return view('usuario.logeado', compact('usus'), compact('ventasT'));
            } else {
                $categorias = App\Categoria::all();
                $produC = DB::table('compras')->where('id_usuario', session('usuid'))->count();
                $produT = DB::table('compras')->where('id_usuario', session('usuid'));
                $total = 0;
                // foreach($produT as $item){
                //     $total+=$item->precio;
                // }

                return view('usuario.logeadoC', compact('categorias', 'produC', 'total'));
            }
        } else {
            return view('inicio.registro');
        }
    }

    public function log(Request $request)
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $usus = DB::table('usuarios')->where('tipo', 2)->count();
                $produc = App\Compra::all()->count();
                $ventas = App\Compra::all();
                $ventasT = 0;
                foreach ($ventas as $item) {
                    $ventasT += $item->precio;
                }

                session(['pv' => $produc]);
                return view('usuario.logeado', compact('usus'), compact('ventasT'));
            } else {
                $categorias = App\Categoria::all();
                $produC = DB::table('compras')->where('id_usuario', session('usuid'))->count();
                $produT = DB::table('compras')->where('id_usuario', session('usuid'));
                $total = 0;
                // foreach($produT as $item){
                //     $total+=$item->precio;
                // }

                return view('usuario.logeadoC', compact('categorias', 'produC', 'total'));
            }
        } else {
            $usu = new App\Usuario;

            $usu = DB::table('usuarios')->where('cedula', $request->cedula)->where('contra', $request->contra)->first();
            session(['usuid' => $usu->id]);
            session(['usuname' => $usu->nombre . ' ' . $usu->apellidos]);
            session(['usutipo' => $usu->tipo]);
            if (session('usutipo') === 1) {
                return redirect()->route('logeado');
            } else {
                return redirect()->route('logeadoC');
            }
        }
    }
    public function crear(Request $request)
    {
        // return $request->all();

        $usuarioNuevo = new App\Usuario;
        $usuarioNuevo->nombre = $request->nombre;
        $usuarioNuevo->apellidos = $request->apellidos;
        $usuarioNuevo->numero = $request->numero;
        $usuarioNuevo->correo = $request->correo;
        $usuarioNuevo->direccion = $request->direccion;
        $usuarioNuevo->cedula = $request->cedula;
        $usuarioNuevo->contra = $request->contra;

        $usuarioNuevo->save();

        $usu = new App\Usuario;

        $usu = DB::table('usuarios')->where('cedula', $request->cedula)->where('contra', $request->contra)->first();
        session(['usuid' => $usu->id]);
        session(['usuname' => $usu->nombre . ' ' . $usu->apellidos]);
        session(['usutipo' => $usu->tipo]);
        if (session('usutipo') === 1) {
            return redirect()->route('logeado');
        } else {
            return redirect()->route('logeadoC');
        }
    }
    public function Logout()
    {
        session()->flush();
        $categorias = App\Categoria::all();
        $productos = App\Producto::paginate(4);
        return view('inicio.home', compact('productos', 'categorias'));
    }
    public function Inicio()
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $usus = DB::table('usuarios')->where('tipo', 2)->count();
                $produc = App\Compra::all()->count();
                $ventas = App\Compra::all();
                $ventasT = 0;
                foreach ($ventas as $item) {
                    $ventasT += $item->precio;
                }

                session(['pv' => $produc]);
                return view('usuario.logeado', compact('usus'), compact('ventasT'));
            } else {
                $categorias = App\Categoria::all();
                $produC = DB::table('compras')->where('id_usuario', session('usuid'))->count();
                $produT = DB::table('compras')->where('id_usuario', session('usuid'));
                $total = 0;
                // foreach($produT as $item){
                //     $total+=$item->precio;
                // }

                return view('usuario.logeadoC', compact('categorias', 'produC', 'total'));
            }
        } else {
            $categorias = App\Categoria::all();
            $productos = App\Producto::paginate(4);
            return view('inicio.home', compact('productos', 'categorias'));
        }
    }
}
