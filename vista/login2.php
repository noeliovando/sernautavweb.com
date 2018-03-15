<?php
include('crud.php');
$crud = new crud();
$crud->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato');


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
        <link rel="icon" type="image/png" href="madrid/572124-taza.microondas.ico" />
<link rel="icon" type="image/png" href="images/ico.png" />
    <title>Agendas - Buscar pedido</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/signin/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

    <form class="form-signin" action='?vista=login2.php' method='post'>
        <h2 class="form-signin-heading">Ingresa tus datos</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name='usuario' class="form-control" placeholder="Correo electronico.." required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name='clave' class="form-control" placeholder="Codigo de pedido.." required autofocus />

     
<input type='submit' value='Buscar pedido' class='btn btn-lg btn-primary btn-block' />
      </form>
<?php $crud->buscarpe(); ?>
    </div> <!-- /container -->
  </body>
</html>