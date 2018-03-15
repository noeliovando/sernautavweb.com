<?php


class add{



    function conectar($db_server,$db_user,$db_pass,$db_name){
        $this->db_server = $db_server;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;

        $this->db_conexion = mysqli_connect($this->db_server,$this->db_user,$this->db_pass);

        $db_seleccion = mysqli_select_db($this->db_conexion,$this->db_name);
    }


    public function agregar()
    {

        EXTRACT($_POST);

        $this->ip=$_SERVER['REMOTE_ADDR'];

        $this->insertar=mysqli_query($this->db_conexion,"INSERT INTO compras (articulo,usuario) VALUES ('$id','".$this->ip."')  ");




    }

}

$add = new add();
$add->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato');
$add->agregar();


?>