<?php

class envio2{






function conectar($db_server,$db_user,$db_pass,$db_name){ 
               $this->db_server = $db_server; 
               $this->db_user = $db_user; 
               $this->db_pass = $db_pass; 
               $this->db_name = $db_name; 
               
$this->db_conexion = mysql_connect($this->db_server,$this->db_user,$this->db_pass); 
   
 $db_seleccion = mysql_select_db($this->db_name,$this->db_conexion); 
   
              
               } 




public function enviar2()
{


echo "hola";

}



}

$envio2 = new envio2();
$envio2->conectar('mysql508int.srv-hostalia.com','u5473103_xiri','xiri_499','db5473103_xiri');
$envio2->enviar2();


?>