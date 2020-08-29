@extends('principal')

@section('contenido')
     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bienvenido</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route ('inicio')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
    
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route ('registro')}}">Registrarse <span class="bi bi-chevron-compact-up"></span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route ('login')}}">loguearse <span class="bi bi-chevron-compact-up"></span></a>
                    </li>
    
    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4 text-primary">EShop</h1>

            </div>
            <!-- /.col-lg-3 -->


        </div>
        <div class="msg">
            
        </div>
    <form action="{{ route('usuario.crear') }}" method="POST" class="form-action" role="form">
            @csrf
            </div>
            
                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="sr-only" for="">Nombre</label>
                        <input type="text" class="form-control" id="" required name="nombre" placeholder="Nombre">
                    </div>
                
                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="sr-only" for="">Apellidos</label>
                        <input type="text" class="form-control" id="" required name="apellidos" placeholder="Apellidos">
                    </div>
                

                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="sr-only" for="">Numero de Telefono</label>
                        <input type="number" class="form-control" id="" required name="numero" placeholder="Numero de telefono">
                    </div>
                
                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="sr-only" for="">Correo</label>
                        <input type="email" class="form-control" id="" required name="correo" placeholder="Correo">
                    </div>
                
                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="sr-only" for="">Direccion</label>
                        <input type="text" class="form-control" id="" required name="direccion" placeholder="Direccion Domicilio">
                    </div>
                
                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="sr-only" for="">Cedula</label>
                        <input type="text" class="form-control" id="" required name="cedula" placeholder="Cedula eje:20890222">
                    </div>
                
                
                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label class="sr-only" for="">Password</label>
                        <input type="password" class="form-control" id="" required name="contra" placeholder="Contraseña">
                    </div>
                
                <button type="submit" class="btn btn-primary col-xs-6 col-sm-6 col-md-6 col-lg-6">Registrar</button>
            </ul>


        </form>

    </div>
@endsection