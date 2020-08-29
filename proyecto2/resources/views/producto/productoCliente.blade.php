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
                    <a class="nav-link" href="{{route('logeadoC')}}">Estadisticas<span class="sr-only">(current)</span>
                    </a>
                </li>
                
                    <li class="nav-item">
                        <div class="col-lg-3">

                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="container">
                                        <ul class="nav">
                                            <li class="dropdown" id="accountmenu">
                                                <a class="dropdown-toggle text-muted" data-toggle="dropdown" href="#">Categorias</a>
                                                <ul class="dropdown-menu">
                                                    @foreach ($categorias as $item)
                                                    <li><a href="{{route('producto.cliente',$item->id)}}" >{{$item->nombre}}</a></li>    
                                                    @endforeach
                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('producto.cliente',0)}}">Productos <span class="bi bi-chevron-compact-up"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Carrito <span class="bi bi-chevron-compact-up"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Historial de compras<span class="bi bi-chevron-compact-up"></span></a>
                    </li>


               
                <li class="nav-item">
                    <a class="nav-link" href="{{route('usuario.logout')}}">Cerrar sesion <span class="bi bi-chevron-compact-up"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>  
<div class="container">
    <H1 class="mt-1 text-left text-primary">EShop</H1>
    <div class="row">


        <!-- /.col-lg-3 -->

        <div class="col-lg-7 offset-2">

            <div class="card mt-4">

                @foreach ($productos as $item)
                <img class="card-img-top img-fluid" src="{{$item->imagen}}"  >
                <div class="card-body">
                <h3 class="card-title\">  {{$item->nombre}} </h3>
                <h4>${{$item->precio}}</h4>
                <a href="{{route('vermas',$item)}}"class="btn btn-primary">Ver mas</a>
                </div>
                @endforeach
                

            </div>
            <!-- /.card -->


            <!-- /.card -->
            {{$productos->links()}}
        </div>
        <!-- /.col-lg-9 -->

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