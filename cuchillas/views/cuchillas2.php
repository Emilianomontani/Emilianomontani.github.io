<!DOCTYPE html>
<html lang="sp" >
<head>
  <meta charset="UTF-8">
  <title>Cuchillas web</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,800;0,900;1,100&display=swap" rel="stylesheet">

<meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="views/style.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

<!--------------------------------
CSS BOOTSTRAP

link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
crossorigin="anonymous"--> 


<!--------------------------------
JS BOOTSTRAP
---------------------------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script>



</head>
<body>

<!--------------------------------
NAVEGACION PHP
---------------------------------->

<?php
include "modules/navegacion.php";
?>

<!--------------------------------
SECCIÓN INICIO
---------------------------------->


<section class="panel b-blue fotoback" id="1">
  <article class="panel__wrapper">
  </article>
</section>

<!--------------------------------
SECCIÓN NOSOTROS
---------------------------------->

<section class="panel b-yellow" id="2">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h2 style="color: white" class="panel__headline">CAMINO</h2>
      <div class="panel__block"></div>
      <p style="color: white;">Cuchillas nace a mediados de 2019 en la ciudad de Zaragoza, punto de encuentro y en ocasiones 
        de inflexión para cuatro amigos de raíces españolas, argentinas y colombianas. Sus integrantes
        Sara cortes a la guitarra y voz, Emiliano Montani (Emont) a la guitarra y lo sientes, 
        Jorge Martínez al bajo y Rafael Charry a la batería, disfrutan experimentando en plena búsqueda 
        de un sonido característico a través de sus temas con canciones de corta duración creadas a base 
        de numerosas capas de ruido en el mejor de los sentidos.</p>
    </div>
  </article>
</section>

<!--------------------------------
SECCIÓN MUSICA
---------------------------------->


<section class="panel b-violet musicback" id="3">
  <article class="panel__wrapper cajafondo">
  <div class="panel__content">
    <h2 style="color: white" class="panel__headline">Pasión de sábado</h2>
    <div class="panel__block"></div>
      <div class="container ">
        <div class="cajados">
          <h3>>> EL NUEVO EP DE CUCHILLAS <<</h3>


          <!--- Botones -------->

          <p>
            <a class="btn btn--svg js-animated-button" href="https://open.spotify.com/artist/1ijMSVBbWChLbwqGPM5ye8?si=K7qESFxIRUytHnirvxe81Q" target="_blank">
          <span class="btn--svg__label"><i class="fa fa-spotify"></i>&nbsp;Ir a Spotify</span>
          <svg class="btn--svg__circle" width="190" x="0px" y="0px" viewBox="0 0 60 60" enable-background="new 0 0 60 60">
        <circle class="js-discover-circle" fill="#FFFFFF" cx="30" cy="30" r="28.7"></circle>
    </svg>
        <svg class="btn--svg__border" x="0px" y="0px" preserveaspectratio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="190">
        <g class="btn--svg__border--left js-discover-left-border" id="Calque_2">
        <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
        </g>
        <g class="btn--svg__border--right js-discover-right-border" id="Calque_3">
            <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
        </g>
    </svg>
  </a>
</p>

    <p>
      <a class="btn btn--svg js-animated-button" href="https://tienda.intromusica.com/" target="_blank">
    <span class="btn--svg__label"><i class="fa fa-shopping-cart"></i>&nbsp;Ir a la Tienda</span>
    <svg class="btn--svg__circle" width="190" x="0px" y="0px" viewBox="0 0 60 60" enable-background="new 0 0 60 60">
        <circle class="js-discover-circle" fill="#FFFFFF" cx="30" cy="30" r="28.7"></circle>
    </svg>
        <svg class="btn--svg__border" x="0px" y="0px" preserveaspectratio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="190">
        <g class="btn--svg__border--left js-discover-left-border" id="Calque_2">
            <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
        </g>
        <g class="btn--svg__border--right js-discover-right-border" id="Calque_3">
            <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
        </g>
    </svg>
  </a>
</p>

        </div>
      </div>
    </div>
  </article>
</section>


<!--------------------------------
SECCIÓN VIDEOS
---------------------------------->

<section class="panel b-yellow" id="4">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h2 style="color: white" class="panel__headline" >VÍDEOS</h2>
      <div class="panel__block"></div>
      <div class="container">
  <div class="caja">
    <div class="espacio">
    <iframe  style="border: 2px solid white" width="100%" height="300" src="https://www.youtube.com/embed/9HsL90zkNfI" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
            gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="espacio">
    <iframe style="border: 2px solid white" width="100%" height="300" src="https://www.youtube.com/embed/vHDENJdhAdk" 
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
      gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="espacio">
    <iframe style="border: 2px solid white" width="100%" height="300" src="https://www.youtube.com/embed/uuCAyhwA59Y" 
      frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
      gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>

    </div>
  </article>
</section>


<!--------------------------------
SECCIÓN CONTACTO
---------------------------------->

<section class="panel b-violet contactoback" id="5">
  <article class="panel__wrapper">
  <div class="panel__content">
    <h2 style="color: white" class="panel__headline">CONTACTO</h2>
    <div class="panel__block"></div>
      <div class="container">
        <div class="cajados">
        <div class="">
          <form action="" method="">
           <div class="">
            <label for="name" class="form-label">Nombre</label><br>
            <input type="text" class="form-control" id="name" placeholder="nombre/name">
           </div>
           <div class="">
            <label for="email" class="form-label">Email</label><br>
            <input type="email" class="form-control" id="email" placeholder="email@email.com">
           </div>
           <div class="">
            <label for="textarea" class="form-label">Mensaje</label><br>
            <textarea class="form-control" id="textarea" rows="6"></textarea>
           </div>
           <button type="submit" class="boton">enviar</button>
          </form>
        </div>
                              <br>
          <div class="">
            <p style="color: white"><strong>Contratación: </strong>intromusica@intromusica.com</p>
            <p style="color: white"><strong>Management: </strong>maximo@intromusica.com</p>
            <p style="color: white"><strong>Sello Discográfico: </strong><a style="color:pink" href="http://www.intromusica.es">Intromúsica</a></p>
            <br>
            <p style="color: white">Zaragoza, España</p>
          </div>

        </div>
    </div>
  </article>
</section>

<!--------------------------------
FOOTER
---------------------------------->

<footer>
  <p>Todos los derechos reservados Cuchillas 2021 & Intromúsica - Diseño <a style="color: white" href="https://behance.net/montani">Montani </a>con template de Scott Pindonga</p>
    </footer>


<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="views/script.js"></script>


</body>
</html>
