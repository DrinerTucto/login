

<html>
<head>
<style>

body{
    background-image: url("http://www.vking-argentina.com/img/fondo_clientes.png");
}
.parrafo{
    margin: 0 auto;
    color: black;
    width: 400px;
    height: 480px;
    background-color: white;
    border-radius: 30px;
    padding: -1;

}

img{
    margin-left: 115px;
    border-radius: 50%;
    width: 150px;
    height: 150px;


}
h1{
    text-align: center;
}
.persona{
    border-top: 2px solid black;
    margin-top: 25px;
}
.redes__contenedor{
display: flex;
margin-top: 150px;

}
.redes{

    margin:10px;
    width: 50px;
    height: 60px;
}
.redes:hover{
            background-coolor: bisque;
            border-radius: 50%;
            width:55px ;
            height: 55px;
        }
</style>


</head>
<body>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('INICIO SESION') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido a tu cuenta') }
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="parrafo">
    <h1>Hola Bienvenido</h1>
    
    <img src="https://i.pinimg.com/236x/9c/57/e0/9c57e073791dfc3edfc7d67fe2080f7b--centenarian-aging-gracefully.jpg">
<div class="persona">
    <p>esto es tu portafolio personal actumente tiens solo </p>
</div>
<div class="redes__contenedor">
<a href="https://github.com/DrinerTucto/TrabajophpCon_Laravel/blob/main/resources/views/reservacion/index.blade.php">
<img class="redes" src="https://cdn-icons-png.flaticon.com/128/3670/3670209.png">
</a>
<a href="https://github.com/DrinerTucto/TrabajophpCon_Laravel/blob/main/resources/views/reservacion/index.blade.php">

                    <img class="redes" src="https://i.pinimg.com/736x/b1/5e/ed/b15eedbdafbbdbca3249e3942f4faf3b.jpg"></a>
                    <img class="redes" src="https://cdn-icons-png.flaticon.com/512/732/732200.png">
                    <img class="redes" src="https://cdn-icons-png.flaticon.com/512/733/733579.png">
</div>
</div>

</div>
@endsection

</body>
</html>