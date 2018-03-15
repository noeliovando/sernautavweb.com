<?php


$crud = new crud();
$crud->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato.madrid');

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="madrid/572124-taza.microondas.ico" />
	<title></title>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity= src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

<?php $crud->addorden(); ?>

</body>
</html>