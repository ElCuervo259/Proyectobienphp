


<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
  </head>
  <body>
   

  <?php echo "Hola " . $_SESSION['nombre'] ?>


  <a href="?controller=User&accion=listado"  ><p class="h4 mb-4 mt-5">Listar Usuarios</p></a>
  <a href="?controller=Home&accion=cerrarSesion"  ><p class="h4 mb-4 mt-5">Cerrar Sesion</p></a>


  </body>
</html>