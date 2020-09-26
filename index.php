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
    <div class="card-deck row p-5 bg-cornsilk height-550  ml-1 mr-1">
    <div class="card">
      <img class="card-img-top" src="assets/images/remeras/palmera.jpg" alt="Card image cap">
        <div class="card-body bg-cornsilk">
          <h5 class="card-title color-texto-negro text-center font-weight-bold ">REMERA "PALM"</h5>
          <p class="card-text color-texto-negro text-center ">$850.</p>
          <button type="button" class="d-block mx-auto btn btn-dark">Agregar al carrito</button>
      </div>
    </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assets/images/remeras/kanguro.jpg" alt="Card image cap">
      <div class="card-body bg-cornsilk">
      <h5 class="card-title color-texto-negro text-center font-weight-bold ">REMERA "KANGAROO"</h5>
      <p class="card-text color-texto-negro text-center ">$850</p>
      <button type=" float-center button" class=" d-block mx-auto  btn btn-dark">Agregar al carrito</button>
    </div>
    </div>
    <div class="card">
    <img class="card-img-top" src="assets/images/remeras/conejo.jpg" alt="Card image cap">
    <div class="card-body bg-cornsilk">
    <h5 class="card-title color-texto-negro text-center font-weight-bold ">REMERA "CRAZZY RABBIT"</h5>
    <p class="card-text color-texto-negro text-center "><del>$1100 </del> $980.</p>
    <button type=" float-center button" class=" d-block mx-auto  btn btn-dark">Agregar al carrito</button>
        </div>
        </div>  
    </div>
    <div class="card-deck row p-5 bg-cornsilk height-550  ml-1 mr-1">
      <div class="card">
        <img class="card-img-top" src="assets/images/remeras/palmera2.jpg" alt="Card image cap">
        <div class="card-body bg-cornsilk">
          <h5 class="card-title color-texto-negro text-center font-weight-bold ">REMERA "PALM"</h5>
          <p class="card-text color-texto-negro text-center font-weight-bold">$850.</p>
          <button type=" float-center button" class=" d-block mx-auto  btn btn-dark">Agregar al carrito</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="assets/images/remeras/gorro.jpg" alt="Card image cap">
        <div class="card-body bg-cornsilk">
          <h5 class="card-title color-texto-negro text-center  font-weight-bold ">   GORRO "SOUL REBEL"</h5>
          <p class="card-text color-texto-negro text-center ">  <del>$650 </del>$550</p>
          <button type=" float-center button" class=" d-block mx-auto  btn btn-dark">Agregar al carrito</button>
        </div>
      </div>
    <div class="card">
        <img class="card-img-top" src="assets/images/remeras/soul.jpg" alt="Card image cap">
        <div class="card-body bg-cornsilk">
        <h5 class="card-title color-texto-negro text-center font-weight-bold ">REMERA "SOUL REBEL"</h5>
        <p class="card-text color-texto-negro text-center font-weight-bold "> <del>$1100 </del> $980.</p>   
        <button type="button  " class=" d-block mx-auto btn btn-dark ">Agregar al carrito</button>
        </div>
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



