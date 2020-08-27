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
                    <a class="nav-link" href="../index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="usu-registro.php">Registrarse <span class="bi bi-chevron-compact-up"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">loguearse <span class="bi bi-chevron-compact-up"></span></a>
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
    <form action="log.php" method="POST" class="form-inline" role="form">
        @csrf
        <div class="form-group">
            <label class="sr-only" for="">Cedula</label>
            <input type="text" class="form-control" id="" required name="username" placeholder="cedula(solo numeros)">
        </div>
        <div class="form-group">
            <label class="sr-only" for="">Password</label>
            <input type="password" class="form-control" id="" required name="password" placeholder="Contraseña">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

    </form>

</div>
@endsection