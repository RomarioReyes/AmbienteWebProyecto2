@extends('principal')

@section('contenido')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bienvenido {{ session('usuname') }}</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('logeado') }}">Estadisticas<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @if (session('usutipo') === 1) {
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('categoriasAdm') }}">Categorias<span
                                    class="bi bi-chevron-compact-up"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('productosAdmin') }}">Productos <span
                                    class="bi bi-chevron-compact-up"></span></a>
                        </li>
                        }
                    @endif



                    <li class="nav-item">
                        <a class="nav-link" href="{{route('usuario.logout')}}">Cerrar sesion <span
                                class="bi bi-chevron-compact-up"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <H1 class="text-center text-primary">EShop</H1>


        @if (session('mensajeC'))
            <div class="alert alert-succes offset-2 primary">
                {{ session('mensajeC') }}
            </div>
        @endif

    <form action="{{ route('producto.crear') }}" method="POST" class="form-action offset-4" role="form" id="product">
    @csrf
    </div>

    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label class="sr-only" for="">Nombre</label>
        <input type="text" class="form-control" id="" required name="nombre" placeholder="Nombre">
    </div>

    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label class="sr-only" for="">Descripcion</label>
        <input type="text" class="form-control" id="" required name="descripcion" placeholder="Descripcion">
    </div>


    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label class="sr-only" for="">Imagen</label>
        <input type="text" class="form-control" id="" required name="imagen" placeholder="Url imagen">
    </div>

    <!-- <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label class="sr-only" for="">Categoria</label>
        <input type="number" class="form-control" id="" required name="categoria" placeholder="categoria">
    </div> -->
    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label for="categorias" class="text-primary">Categorias:</label>
        <select name="categorias" id="categorias" form="product">

            @foreach ($categorias as $item)
                <option class="text-primary" value="{{ $item->id }}">{{ $item->nombre }}</option>
            @endforeach

            <!-- "<li><a href=\"productos.php?id=" . $fila["id"] . " \">\"" . $fila["nombre"] . "\"</a></li>";
            <option value="volvo">Volvo</option> -->

        </select>
    </div>

    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label class="sr-only" for="">Cantidad</label>
        <input type="number" class="form-control" id="" required name="cantidad" placeholder="Cantidad a agregar">
    </div>

    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label class="sr-only" for="">precio</label>
        <input type="number" class="form-control" id="" required name="precio" placeholder="Precio en $">
    </div>




    <button type="submit" class="btn btn-primary offset-2">Registrar</button>
    </ul>


    </form>
    <br>
    <br>
    <br>
    <br>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; EShop 2020</p>
        </div>
        <!-- /.container -->
    </footer>
@endsection
