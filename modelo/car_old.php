<?php

class car{






function conectar($db_server,$db_user,$db_pass,$db_name){ 
               $this->db_server = $db_server; 
               $this->db_user = $db_user; 
               $this->db_pass = $db_pass; 
               $this->db_name = $db_name; 
               
$this->db_conexion = mysql_connect($this->db_server,$this->db_user,$this->db_pass);

 $db_seleccion = mysql_select_db($this->db_name,$this->db_conexion);


               }




public function carro()
{

$this->ip=$_SERVER['REMOTE_ADDR'];

$this->carro=mysql_query("SELECT *FROM compras  WHERE usuario='".$this->ip."' AND enviado!='1'  ",$this->db_conexion);

$this->acum=0;
$this->num=mysql_num_rows($this->carro);


while($this->row=mysql_fetch_array($this->carro))
{

$this->articulo=$this->row['articulo'];


$this->carro2=mysql_query("SELECT * FROM madrid WHERE  id='".$this->articulo."'  ",$this->db_conexion);

$this->row2=mysql_fetch_array($this->carro2);

$this->precio=$this->row2['precio'];

$this->acum+=$this->precio;
}

echo "

   <div class='shopping-item'>
                        <a href='?vista=carro.php'>Carro - <span class='cart-amunt'> &#8364; ".$this->acum."</span> <i class='fa fa-shopping-cart'></i> <span class='product-count'>".$this->num."</span></a>
                    </div>

";

}



}

$car = new car();
$car->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato.madrid');
$car->carro();


?>