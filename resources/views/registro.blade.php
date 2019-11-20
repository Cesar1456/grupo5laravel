@extends("plantilla")

@section("principal")


<head>
    
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleRegistro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>


     <div class="animation">
          <div id="particles-js">
          </div>
     </div>
     <div class="registro">
          <h1 class="titulo">Registro</h1>
          <hr class="lineahorizontal">
          <form class="registro" action="registro.html" method="POST">
               <div class="form-group row">
                    <label for="apellido" class="col-sm-4 col-form-label">Apellido:</label>
                    <div class="col-sm-8">
                         <input type="apellido" class="form-control" id="apellido" name="apellido">
                    </div>
               </div>

              <div class="form-group row">
                    <label for="nombre" class="col-sm-4 col-form-label">Nombre:</label>
                    <div class="col-sm-8">
                         <input type="nombre" class="form-control" id="nombre" name="nombre">
                    </div>
              </div>

              <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email:</label>
                    <div class="col-sm-8">
                         <input type="email" class="form-control" id="email" name="email">
                    </div>
              </div>

              <div class="form-group row">
                    <label for="contrasena1" class="col-sm-4 col-form-label">Contraseña:</label>
                    <div class="col-sm-8">
                         <input type="password" class="form-control" id="password" name="password">
                    </div>
              </div>

              <div class="form-group row">
                    <label for="contrasena2" class="col-sm-4 col-form-label">Repetir Contraseña:</label>
                    <div class="col-sm-8">
                         <input type="password" class="form-control" id="password" name="contrasena2">
                    </div>
              </div>
          

              <button type="submit" class="btn btn-warning mb-2 boton-submit">Registrar</button>
          </form>
     </div>
@endsection
     
