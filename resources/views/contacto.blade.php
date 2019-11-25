@extends("plantilla")
@section("principal")

<head>
          <link rel="stylesheet" href="css/styleContacto.css">

</head>


<div class="animation">
    <div id="particles-js">
    </div>
</div>
          
<div class="contacto">
    <h1 class="titulo">Contacto</h1>
    <hr class="lineahorizontal">
    <form action="contacto.html" method="POST">

        <div class=email>
            <label for="email">Email</label>
            <div >
            <input type="email" id="email" name="email">
            </div>
        </div>

        <div class=comentario>
            <label for="comentario">Comentarios</label>
            <div id="textarea">
            <textarea name="comentario" id="" cols="90" rows="5">                    
            </textarea>
            </div>
        </div> 

        <div>
            
            <div>
            <button type="submit" class="btn btn-warning mb-2 boton-submit">Enviar Comentario</button>
            </div>
        </div>   

    </form>
</div>

@endsection