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

    <title>Soul Rebel</title>
  </head>
  <body>
    <div class="container-fluid">
      <?php require('header.html'); ?>
   <div class="col-12   ">
    <div class="float-right">
      <i class="color-texto-gris fas fa-search"></i>
      <i class="color-texto-gris fas fa-shopping-cart"></i>
      <input type="text" id="inputSearch" placeholder="Buscar">
     </div>
   </div>
  
  <br><br>
  <form>
    <div class="form-row">
      <div class="col">
        <label for="inputEmail4">Nombre</label>
        <input type="text" class="form-control" placeholder="Nombre">
      </div>
      <div class="col">
        <label for="inputEmail4">Apellido</label>
        <input type="text" class="form-control" placeholder="Apellido">
      </div>
    </div>
  </form>
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">E-mail</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Contraseña</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Telefono</label>
      <input type="number" class="form-control" id="inputAddress" placeholder="Telefono / celular ">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Direccion</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Calle falsa 123">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Ciudad</label>
        <input type="text" class="form-control" id="inputCity" placeholder=" Ciudad">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Localidad</label>
        <select id="inputState" class="form-control">
          <option selected>...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Codigo Postal</label>
        <input type="text" class="form-control"placeholder="C.P">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Recibir noticias
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Registrarme</button>
  </form>
      <br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br>
</main>
     
      <footer>
      <?php require('redes.html'); ?>

  </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>



