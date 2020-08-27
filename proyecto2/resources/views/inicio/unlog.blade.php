<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Principal</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bienvenido</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li>
                        <div class="col-lg-3">

                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="container">
                                        <ul class="nav">
                                            <li class="dropdown" id="accountmenu">
                                                <a class="dropdown-toggle text-muted" data-toggle="dropdown" href="#">Categorias</a>
                                                <ul class="dropdown-menu">
                                                    
                                                    <a href=""></a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="php/usu-registro.php">Registrarse <span class="bi bi-chevron-compact-up"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/login.php">loguearse <span class="bi bi-chevron-compact-up"></span></a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    
    
    <!-- Page Content -->
    <div class="container">
        <H1 class="mt-1 text-left text-primary">EShop</H1>
        <div class="row">


            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div class="card mt-4">

                    
                </div>
                <!-- /.card -->


                <!-- /.card -->

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

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
<script type="text/javascript">
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>
</body>

</html>