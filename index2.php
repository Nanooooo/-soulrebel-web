<?php

$tituloPagina = "Soul Rebel";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/icononuevo.ico">
     <!--fontaswesome-->
     <link rel="stylesheet" 
     href =" https://use.fontawesome.com/releases/v5.3.1/css/all.css " 
     integrity =" SHA384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt + Y8vEf7N7fWAU " crossorigin =" anonymous " >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
  </head>

  <body>
    <div class="contenedor">
      <div class="container pb-4">
        <?php require('header.html'); ?>
        <?php require('registro.html'); ?>
    </div>
  <main>
    <div class="container">
      <div id="carouselExampleIndicators" class="p-5 carousel slide" data-ride="carousel">
        <ol class="  p-4 carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class=" d-block w-100" src="assets/images/SKATE.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class=" d-block w-100 " src="assets/images/remeras/kanguro2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class=" d-block w-100 " src="assets/images/remeras/soul.jpg" alt="Third slide">
          </div>
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

          <!-- CARD -->
          <div class="container">
       
       <div class="card">
           <img src="assets/images/remeras/palmera.jpg">
           <h4>Naturaleza</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
           <a href="#">Leer más</a>
       </div>
       
       <div class="card">
           <img src="assets/images/remeras/kanguro.jpg">
           <h4>Comida</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
           <a href="#">Leer más</a>
       </div>
       
       <div class="card">
           <img src="assets/images/remeras/conejo.jpg">
           <h4>Tecnología</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
           <a href="#">Leer más</a>
       </div>
       
   </div>
         
         <!-- FIN CARD -->
  </main>
      <?php require('footer.html'); ?>
      <?php require('redes.html'); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>



