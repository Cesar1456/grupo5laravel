@extends("plantilla")
@section("principal")
<head>
    <link rel="stylesheet" href="css/stylePerfil.css">
</head>

<div class="animation">
     <div id="particles-js">
     </div>
</div>
<h1 class="perfil">Perfil</h1>
<hr class="lineahorizontal">
<div class="central">
    <div class="cuerpoperfil">
        <img class="imagenperfil" src="img/usuario.png" alt="Perfil de Usuario">
        <div class="textoperfil">
            <h3>Bienvenido a GRUPO 5</h3>
            <span>usuario@grupo5.com</span><br>
            <span>Estado: Activo - 10/09/2019</span><br>
            <span>Ultima conexion: 12/09/2019 15:00 hs.</span><br>
        </div>
    </div>
</div>




@endsection