<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
  </head>
  <body>

  
<div class ="container">
    <!-- Default form login -->
<form class="text-center border border-light p-5"  action="?controller=Index&accion=login" method ="POST">

<p class="h4 mb-4 mt-5">Gym Virtual</p>

<!-- Login -->
<input type="text" id="defaultLoginFormEmail" name = "usuario"  class="form-control mb-4" placeholder="Usuario">

<!-- Password -->
<input type="password" id="defaultLoginFormPassword" name = "password" class="form-control mb-4" placeholder="Contraseña">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Recuerdame</label>
        </div>
    </div>
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit">Acceder</button>

<!-- Register -->
<p>No estas registrado?
  
  <!--Cambiar !-->
    <a href="?controller=index&accion=mostrarRegistro">Registrarse</a>
</p>

<!-- Social login -->
<p>Conocenos</p>

<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

</form>
</div>

  </body>
</html>