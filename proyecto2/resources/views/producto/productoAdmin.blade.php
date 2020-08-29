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
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('categoriasAdm')}}">Categorias<span class="bi bi-chevron-compact-up"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Productos <span class="bi bi-chevron-compact-up"></span></a>
                    </li>
                }@endif
                

                    
                <li class="nav-item">
                    <a class="nav-link" href="{{route('usuario.logout')}}">Cerrar sesion <span class="bi bi-chevron-compact-up"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">

    <H1 class="text-center text-primary">EShop</H1>
    @if(session('mensajeE'))
    <div class="alert alert-succes offset-2 primary">
        {{session('mensajeE')}}
    </div>
@endif
    <div class="row ">
        <div class="col-lg-6"id="productoAdmin">
            <!-- href=\"editarCategoria.php?id=" . $fila["id"] . " \" -->
            <div class="card mt-4 bg-sucess">
               
       
        
        
                
                 @foreach ($productos as $item)

                        <div class="card-body">
                        <h3 class="card-title offset-3">Nombre: {{$item->nombre}}</h3>
                        <h3 class="card-title offset-3">Cantidad: {{$item->cantidad}}</h3>
                        <h4 class="card-title offset-3">Precio: {{$item->precio}}</h4>
                        <a href="{{route('producto.editar',$item)}}"class="btn btn-primary offset-3">Editar</a>
                        <form action="{{route('producto.eliminar',$item)}}" method="Post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                
                        </div>
                


                @endforeach
                
            </div>
            <a href="{{route('crearProducto')}}" class="btn btn-primary btn-block">Crear</a> 
            {{$productos->links()}} 
        </div>

    </div>
    
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; EShop 2020</p>
    </div>
    <!-- /.container -->
</footer>


@section('contenido')