@extends('principal')

@section('contenido')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Bienvenido {{session('usuname')}}</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('logeado')}}">Estadisticas<span class="sr-only">(current)</span>
                    </a>
                </li>
                 @if (session('usutipo') === 1) {
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('categoriasAdm')}}">Categorias<span class="bi bi-chevron-compact-up"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('productosAdmin')}}">Productos <span class="bi bi-chevron-compact-up"></span></a>
                    </li>
                }@endif
                

                    
                <li class="nav-item">
                    <a class="nav-link" href="{{route('usuario.logout')}}">Cerrar sesion <span class="bi bi-chevron-compact-up"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@if(session('mensajeC'))
<div class="alert alert-succes offset-2 primary">
    {{session('mensajeC')}}
</div>
@endif
@if(session('mensajeE'))
<div class="alert alert-succes offset-2 primary">
    {{session('mensajeE')}}
</div>
@endif

@if(session('mensajeA'))
<div class="alert alert-succes offset-2 primary">
    {{session('mensajeC')}}
</div>
@endif
<div class="container offset-2">
<div class="row">
<h1>Lista de Categorias</h1>


<table class="table table-light">
    <tr>
        <th>Nombre</th>
        <th></th>
        <th></th>
    </tr>
    <tbody>
       @foreach ($categorias as $item)
       
        <tr>
        <td>{{$item->nombre}}</td>
        <td><a href="{{route('categoria.editar',$item)}}"class="btn btn-primary btn-sm">Editar</a>
        <form action="{{route('categoria.eliminar',$item)}}" method="Post" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
        </form>

        </td>
        
            
        </tr>
        @endforeach
    </tbody>
</table>
<form action="{{route('categoria.crear')}}" method="POST" class="form-action" role="form">
    @csrf
    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label class="sr-only" for="">Nombre</label>
        <input type="text" class="form-control" id="" required name="nombre" placeholder="Nombre">


    </div>

    <button type="submit" class="btn btn-primary btn-primary"> Crear nueva </button>
</form>
</div>
</div>


@section('contenido')