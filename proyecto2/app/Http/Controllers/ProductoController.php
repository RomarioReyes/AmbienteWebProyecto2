<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /** Funcion que carga los productos para el admin*/
    public function ProductosAdmin()
    {
        $productos = App\Producto::paginate(4);
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {

                return view('producto.productoAdmin', compact('productos'));
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
    /** funcion qu ecarga los productos al cliente por medio de id de categoria 
     * 0 carga todas
    */
    public function ProductosCliente($id)
    {
        $productos = App\Producto::paginate(4);

        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                
                return view('producto.productoAdmin', compact('productos'));
            } else {
                $productos = App\Producto::paginate(4);
                $categorias = App\Categoria::all();
                if ($id < 1) {
                    $productos = App\Producto::paginate(4);
                } else {
                    $productos = DB::table('productos')->where('id_categoria', $id)->paginate(4);
                }
                return view('producto.productoCliente', compact('categorias', 'productos'));
            }
        } else {
            $categorias = App\Categoria::all();
            $productos = App\Producto::paginate(4);
            return view('inicio.home', compact('productos', 'categorias'));
        }


        // if(session('usutipo')===1){


        // }else{


        //     // foreach($produT as $item){
        //     //     $total+=$item->precio;
        //     // }

        // }

    }
    /**funcion que crea producto */
    public function CrearProducto()
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $categorias = App\Categoria::all();
                return view('producto.crearProducto', compact('categorias'));
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
/**funcion que pide los datos del form para crear productos */
    public function CreaProducto(Request $request)
    {
        // $usu= DB::table('usuarios')->where('tipo', 1)->count();
        // return $usu;
        // 'nombre', 'descripcion', 'imagen', 'cantidad', 'precio', 'activo', 'id_categoria
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $producto = new App\Producto();
                $producto->nombre = $request->nombre;
                $producto->descripcion = $request->descripcion;
                $producto->imagen = $request->imagen;
                $producto->cantidad = $request->cantidad;
                $producto->precio = $request->precio;
                $producto->id_categoria = $request->categorias;
                $producto->activo = true;


                $producto->save();
                return back()->with('mensajeC', 'Producto creado');
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
    /**funcion que edita productos */
    public function EditarProducto($id)
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $categorias = App\Categoria::all();
                $producto = App\Producto::find($id);
                return view('producto.editar', compact('producto', 'categorias'));
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
    /**funcion que toma los datos de un form para editar un producto */
    public function EditProducto(Request $request, $id)
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $producto = App\Producto::find($id);
                $producto->nombre = $request->nombre;
                $producto->descripcion = $request->descripcion;
                $producto->imagen = $request->imagen;
                $producto->cantidad = $request->cantidad;
                $producto->precio = $request->precio;
                $producto->id_categoria = $request->categorias;
                $producto->activo = true;;
                $producto->save();
                $productos = App\Producto::paginate(4);
                return view('producto.productoAdmin', compact('productos'))->with('mensajeC', 'Producto editado correctamente');
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
    /**funcion que elimina productos */
    public function ElimarProducto($id)
    {
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $producto = App\Producto::find($id);
                $producto->delete();
                return back()->with('mensajeE', 'Producto Eliminado');
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
    public function VerMas(Request $request){
        if (session()->has('usutipo')) {
            if (session('usutipo') === 1) {
                $productos = App\Producto::paginate(4);
                return view('producto.productoAdmin', compact('productos'));
            } else {
                return $request;
            }
        } else {
            $categorias = App\Categoria::all();
            $productos = App\Producto::paginate(4);
            return view('inicio.home', compact('productos', 'categorias'));
        }

    }
}
