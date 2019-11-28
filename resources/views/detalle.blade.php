@extends("plantilla")
@section("principal")

     <head>
          <link rel="stylesheet" href="css/styleDetalle.css">

     </head>

<div class="contenedor">
        <div class="cursos">

          <section id="video">
            <article class="curso">
              <div id="titulo">
                <h1  class="titulo">PHP y MySQL</h1>
                <h2>Acerca de este curso</h2>
                <p>Aprende a programar de forma sencilla y amena en el lenguaje de servidor más extendido y poderoso del mundo: PHP y MySQL</p>
                <ul>
                  <li>Nivel de habilidad: Todos los niveles</li>
                  <li>Idiomas: Español</li>
                  <li>Subtítulos: No</li>
                  <li>Clases: 545</li>
                  <li>Vídeo: 63 horas</li>
                </ul>
                <h3>Características</h3>
                <p>Disponible en iOS y Android - Certificado de finalización</p>

              </div>
              
              <video  controls>
                <source src=videos\video1.mp4 type=video/mp4>
                <source src=videos\video1.mp4 type=video/ogg>
              </video>
            </article>
            <div class="enlace">
                <a href="carrito">Agregar al Carrito</a>
            </div>
            
            <div class="precio">
              <h2>Precio</h2>
              <div class="circulo">
                <h3>$ 12</h3>
              </div>
            </div>
   
          </section>

        </div>
@endsection