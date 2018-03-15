<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php



$con=mysql_connect('mysql.hostinger.es','u565655629_antuk','mGcLfN7E');
mysql_select_db('u565655629_usato.madrid',$con);

$conta=0;

$info=mysql_query("SELECT * FROM madrid  ",$con);
       while($row=mysql_fetch_array($info)){

EXTRACT($row);


$conta+=1;

   $copy = preg_replace("(,+)", ".", $precio);
   
echo 
"
$copy - $id<br>
";
mysql_query("UPDATE madrid SET precio='$copy' WHERE id='$id' ",$con);

}


echo $_SERVER['REMOTE_ADDR'];

?>


</body>
</html>