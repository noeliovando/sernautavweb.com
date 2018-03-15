<?php

class car{






    function conectar($db_server,$db_user,$db_pass,$db_name){
        $this->db_server = $db_server;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;

        $this->db_conexion = mysqli_connect($this->db_server,$this->db_user,$this->db_pass);

        $db_seleccion = mysqli_select_db($this->db_conexion,$this->db_name);


    }




    public function carro()
    {

        //$this->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato');
        $this->ip=$_SERVER['REMOTE_ADDR'];

        $this->carro=mysqli_query($this->db_conexion,"SELECT *FROM compras  WHERE usuario='".$this->ip."' AND enviado!='1'  ");

        $this->acum=0;


        $this->num=mysqli_num_rows($this->carro);



        while($this->row=mysqli_fetch_array($this->carro))
        {

            $this->articulo=$this->row['articulo'];


            $this->carro2=mysqli_query($this->db_conexion,"SELECT * FROM madrid WHERE  id='".$this->articulo."'  ");

            $this->row2=mysqli_fetch_array($this->carro2);

            $this->precio=$this->row2['precio'];

            $this->acum+=$this->precio;
        }

        echo "

   <div class='shopping-item'>
                        <a href='carro.php'>Car - <span class='cart-amunt'> &#163; ".$this->acum."</span> <i class='fa fa-shopping-cart'></i> <span class='product-count'>".$this->num."</span></a>
                    </div>

";

    }



}

$car = new car();
$car->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato');
$car->carro();


?>