<?php



class borrar{


private $user;
private $db_server;
private $db_user;
private $db_pass;
private $db_name;
protected $nombre;
protected $descripcion;




function conectar($db_server,$db_user,$db_pass,$db_name){ 
               $this->db_server = $db_server; 
               $this->db_user = $db_user; 
               $this->db_pass = $db_pass; 
               $this->db_name = $db_name; 
               
$this->db_conexion = mysql_connect($this->db_server,$this->db_user,$this->db_pass); 
   
 $db_seleccion = mysql_select_db($this->db_name,$this->db_conexion); 
   
              
               } 


public function borro()
{
EXTRACT($_POST);

$this->cambio=mysql_query("DELETE FROM madrid WHERE id='$id' ",$this->db_conexion);


if($this->cambio)
{

echo '
<div class="alert alert-success" role="alert">
Borrado con exito
</div>
';

}else{}
//////
}


}

$borrar= new borrar(); 
$borrar->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato.madrid');
$borrar->borro(); 


?>