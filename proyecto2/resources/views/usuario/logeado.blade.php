@extends('usuario.Admin')

@section('contenidoAdmin')



<!-- Page Content -->
<section>
    
<div class="container">
    
    <H1 class="text-center text-primary">EShop</H1>

    <div class="row">
        <div class="col-lg-10">

            <div class="card mt-4 bg-sucess">
                
                    <div class="card-body">
                        
                        
                        <h3 class="card-title text-danger text-center">Estadisticas Administrativas</h3>
                        <p>Cantidad clientes: {{$usus}}</p>
                        <p>productos vendidos: {{session('pv')}}</p>
                        <p>monto total de ventas:{{$ventasT}} </p>

                    </div>
                
            </div>

        </div>



    </div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


</section>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; EShop 2020</p>
    </div>
    
</footer>
@endsection