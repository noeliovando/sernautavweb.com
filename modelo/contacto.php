<?php


class contacto{



function conectar($db_server,$db_user,$db_pass,$db_name){ 
               $this->db_server = $db_server; 
               $this->db_user = $db_user; 
               $this->db_pass = $db_pass; 
               $this->db_name = $db_name; 
               
$this->db_conexion = mysql_connect($this->db_server,$this->db_user,$this->db_pass); 
   
 $db_seleccion = mysql_select_db($this->db_name,$this->db_conexion); 
   
              
               } 
public function con()
{

EXTRACT($_POST);


$this->vacio='';

if($nombre==$this->vacio OR  $telefono==$this->vacio OR $descripcion==$this->vacio OR $correo==$this->vacio)
{  echo '
<div class="alert alert-danger" role="alert">
Debes llenar todos los campos
</div>
';
}else{



$this->insertar=mysql_query("INSERT INTO mensajes (nombre,telefono,correo,descripcion,articulo,visto) VALUES ('$nombre','$telefono','$correo','$descripcion','$arti','1')  ",$this->db_conexion);

if($this->insertar){ echo '
<div class="alert alert-success" role="alert">
Enviado con exito
</div>
';}else{  echo '
<div class="alert alert-danger" role="alert">
Error al enviarlo
</div>
'; }
//////////
}
///////////
}


}

$carro = new contacto();
$carro->conectar('mysql508int.srv-hostalia.com','u5473103_xiri','xiri_499','db5473103_xiri');
$carro->con(); 


?>