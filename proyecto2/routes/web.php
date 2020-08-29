<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**generales */
Route::get('/','UsuarioController@Inicio')->name('inicio');
Route::get('inicio','UsuarioController@Inicio')->name('inicio');

/**usuarios */
Route::get('logeado','UsuarioController@logeado')->name('logeado');
Route::get('logeadoC','UsuarioController@LogeadoC')->name('logeadoC');
Route::get('login','UsuarioController@login')->name('login');
Route::post('login','UsuarioController@log')->name('usuario.logear');

Route::get('registro','UsuarioController@registro')->name('registro');
Route::post('registro','UsuarioController@crear')->name('usuario.crear');
Route::get('logout','UsuarioController@Logout')->name('usuario.logout');
/**categorias admin*/
Route::get('categoriasAdm','CategoriaController@Admin')->name('categoriasAdm');
Route::post('crearCategoria','CategoriaController@CrearCategoria')->name('categoria.crear');
Route::get('editarCategoria/{id}','CategoriaController@EditarCategoria')->name('categoria.editar');
Route::put('editarCategoria/{id}','CategoriaController@EditCategoria')->name('categoria.edit');
Route::delete('eliminarCategoria/{id}','CategoriaController@ElimarCategoria')->name('categoria.eliminar');

/**productos admin */
Route::get('productosAdmin','ProductoController@ProductosAdmin')->name('productosAdmin');
Route::get('crearProducto','ProductoController@CrearProducto')->name('crearProducto');
Route::post('crearProducto','ProductoController@CreaProducto')->name('producto.crear');
Route::get('editarProducto/{id}','ProductoController@EditarProducto')->name('producto.editar');
Route::put('editarProducto/{id}','ProductoController@EditProducto')->name('producto.edit');
Route::delete('eliminarProducto/{id}','ProductoController@ElimarProducto')->name('producto.eliminar');
/**productos clientes */
Route::get('productoCliente/{id}','ProductoController@ProductosCliente')->name('producto.cliente');
Route::get('vermas/{id}','ProductoController@VerMas')->name('vermas');