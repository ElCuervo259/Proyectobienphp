<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
  </head>
  <body>

    <div class ="container">
        <form class="text-center border border-light p-5"  action="?controller=User&accion=adduser" method ="POST">

        <p class="h4 mb-4 mt-5">Registro de Usuarios</p>
        <!-- Login -->
        <input type="text" id="defaultLoginFormEmail" name = "txtlogin"  class="form-control mb-4" placeholder="Login">
    
        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name = "txtpass" class="form-control mb-4" placeholder="Contraseña">

        <input type="email" id="defaultLoginFormPassword" name = "txtemail" class="form-control mb-4" placeholder="Email">
       

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" name = "submit" type="submit">Registarse</button>

        </form>


    </div>




  </body>
  </html>