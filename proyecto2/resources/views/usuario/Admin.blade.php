@extends('principal')

@section('contenido')
@yield('contenidoAdmin')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Bienvenido {{session('usuname')}}</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="">Estadisticas<span class="sr-only">(current)</span>
                    </a>
                </li>
                 @if (session('usutipo') === 1) {
                    <li class="nav-item">
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

@endsection