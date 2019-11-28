@extends("plantilla")
@section("principal")
<head>
     <link rel="stylesheet" href="css/styleLogin.css">

</head>

<div class="animation">
     <div id="particles-js">
     </div>
</div>
<div class="contenedor">
     <div class="ingreso">
          <h1 class="titulo">Ingreso</h1>
          <hr class="lineahorizontal">
     </div>
     <form  id="ingreso" action="ingreso" method="POST">
          <div class="form-group row">
               <label for="Nombre" class="col-sm-4 col-form-label">Usuario:</label>
               <div class="col-sm-8">
               <input type="nombre" class="form-control" id="nombre" name="nombre" required>
               </div>
          </div>
          <div class="form-group row">
               <label for="contrasena1" class="col-sm-4 col-form-label">Contraseña:</label>
               <div class="col-sm-8">
               <input type="password" class="form-control" id="pass" name="pass" required>
               </div>
          </div>
          <button type="submit" class="btn btn-primary mb-2">Ingresar</button>
     </form>
</div>
@endsection