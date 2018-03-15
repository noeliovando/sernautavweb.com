<?php

class envio{






function conectar($db_server,$db_user,$db_pass,$db_name){ 
               $this->db_server = $db_server; 
               $this->db_user = $db_user; 
               $this->db_pass = $db_pass; 
               $this->db_name = $db_name; 
               
$this->db_conexion = mysql_connect($this->db_server,$this->db_user,$this->db_pass); 
   
 $db_seleccion = mysql_select_db($this->db_name,$this->db_conexion); 
   
              
               } 




public function enviar()
{


$this->ip=$_SERVER['REMOTE_ADDR'];

$this->carro=mysql_query("SELECT *FROM compras  WHERE usuario='".$this->ip."' AND enviado!='1'  ",$this->db_conexion);

$this->acum=0;
$this->num=mysql_num_rows($this->carro);


while($this->row4=mysql_fetch_array($this->carro))
{

$this->articulo2=$this->row4['articulo'];


$this->carro2=mysql_query("SELECT * FROM madrid WHERE  id='".$this->articulo2."'  ",$this->db_conexion);

$this->row5=mysql_fetch_array($this->carro2);

$this->precio2=$this->row5['precio'];

$this->acum+=$this->precio2;
}





EXTRACT($_POST);

$this->vacio='';

if($nombre==$this->vacio OR $direccion==$this->vacio OR $correo==$this->vacio OR $telefono==$this->vacio){

echo '
<div class="alert alert-danger" role="alert">
Debes llenar todos los campos
 ';

}
else{



if(preg_match('/@/i', $correo)) {


$this->direccion_google = "$direccion";
$this->resultado = file_get_contents(sprintf('https://maps.googleapis.com/maps/api/geocode/json?sensor=false&address=%s', urlencode($this->direccion_google)));
$this->resultado = json_decode($this->resultado, TRUE);

$this->lat = $this->resultado['results'][0]['geometry']['location']['lat'];
$this->lng = $this->resultado['results'][0]['geometry']['location']['lng'];

echo "
<div style=>
<h2> Datos ingresados </h2>

<strong> Nombre : </strong> $nombre  <br>
<strong> Direccion : </strong> $direccion  <a href='?vista=mapa.php&lat=".$this->lat."&lng=".$this->lng."' target='blank'> Ver en el mapa </a>  <br>
<strong> Telefono : </strong> $telefono <br>
<strong> Correo : </strong> $correo <br>
";



$this->cupon=mysql_query("SELECT * FROM  cupon WHERE codigo='$cupon' ",$this->db_conexion);

$this->numcu=mysql_num_rows($this->cupon);

if($cupon==''){ $this->suma=$this->acum; echo "<strong> Total : </strong>  &#8364; ".$this->acum." <br>"; } else{

if($this->numcu>0){
$this->cow=mysql_fetch_array($this->cupon);

$this->porcentaje=$this->cow['porcentaje'];

$this->descuento=$this->porcentaje/100*$this->acum;

$this->suma=$this->acum-$this->descuento;

echo "<strong> Total : </strong>  &#8364; ".$this->acum." <br>";
echo "<strong> Descuento : </strong> &#8364; ".$this->suma." <br>";

}else{
$this->suma=$this->acum;
echo "  <strong> El cupon que metiste no es valido </strong><br> ";
echo "<strong> Total : </strong>  &#8364; ".$this->suma." <br>";
}


}

echo "

<br><br>


&nbsp;&nbsp;
<script type='text/javascript'>
<!--
function procesar(xform){
window.open(xform, 'nventana', 'width=450,height=300,status=yes,resizable=yes,scrollbars=yes');
}
-->
</script>


<form action='?vista=pago.php'  target='nventana' onsubmit='procesar(this.action);' method='post' div style=float:left;>
<input type='hidden' name='monto' value='".$this->suma."'>

<input type='submit' value='Pagar'  class='btn btn-warning' div style=float:left; />

</form>

<form action='?vista=orden.php' method='post'  div style=float:left; >


<input type='hidden'  name='nombre' value='$nombre' />
<input type='hidden'  name='direccion' value='$direccion' />
<input type='hidden'  name='telefono' value='$telefono' />
<input type='hidden'  name='correo' value='$correo' />
<input type='hidden'  name='lng' value='".$this->lng."' />
<input type='hidden'  name='lat' value='".$this->lat."' />
<input type='hidden'  name='monto' value='".$this->suma."' />

<input type='submit' value='Enviar orden de compra'  class='btn btn-warning' div style=float:left;margin-left:2%; />



</form>




</div>
 ";

  
}else{

echo '
<div class="alert alert-danger" role="alert">
La direccion de correo debe contener el signo @ </div>
';

}



}

///////////////////////////////////
}



}

$envio = new envio();
$envio->conectar('mysql508int.srv-hostalia.com','u5473103_xiri','xiri_499','db5473103_xiri');
$envio->enviar();


?>