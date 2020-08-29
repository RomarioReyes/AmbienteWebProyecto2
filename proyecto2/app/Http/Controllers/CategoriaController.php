<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**Metodo que direcciona a categorias del admin */
    public function Admin()
    {
        //Cantidad de clientes: 6
        // Cantidad productos vendidos: 0
        // Monto total ventas: 0

        if (session('usutipo') === 1) {
            $categorias = App\Categoria::all();
            return view('categoria.admin', compact('categorias'));
        } else {
            return view('inicio.home');
        }
    }
    /**metodo que crea categorias */
    public function CrearCategoria(Request $request)
    {
        $categoria = new App\Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return back()->with('mensajeC', 'Categoria agregada');
    }
    /** metodo que alleva los datos al form para ser editados */
    public function EditarCategoria($id)
    {
        $categorias = App\Categoria::all();
        $categoria = App\Categoria::find($id);
        return view('categoria.editar', compact('categoria', 'categorias'));
    }
    /**funcion que termina de actualizar*/
    public function EditCategoria(Request $request, $id)
    {

        $categoria = App\Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->save();
        $categorias = App\Categoria::all();
        return view('categoria.admin', compact('categorias'))->with('mensajeA', 'Categoria editada correctamente');
    }
    /**funcion que elimina categorias pregunta primero si tiene productos asociados*/
    public function ElimarCategoria($id)
    {
        $categoria = App\Categoria::find($id);
        $productos = DB::table('productos')->where('id_categoria', $id)->count();

        if ($productos > 0) {
            return back()->with('mensajeE', 'Categoria asociada a producto');
        } else {
            
            $categoria->delete();
            $categorias = App\Categoria::all();
            return view('categoria.admin', compact('categorias'));
        }
    }
}
