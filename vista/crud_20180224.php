<?php



class crud{


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
               
$this->db_conexion = mysqli_connect($this->db_server,$this->db_user,$this->db_pass); 
   
 $db_seleccion = mysqli_select_db($this->db_name,$this->db_conexion); 
   
              
               } 



public function articulos()
{


if(isseT($_POST['buscar'])){

EXTRACT($_POST);


$this->general=mysql_query("SELECT * FROM madrid  WHERE descripcion  LIKE '%$buscar%'  ",$this->db_conexion);

}
elseif(isset($_GET['ca'])){

EXTRACT($_GET);

$this->general=mysql_query("SELECT * FROM madrid  WHERE categoria='$ca'  ",$this->db_conexion);

}
else{
$this->general=mysql_query("SELECT * FROM madrid ",$this->db_conexion);

}



$this->numeros=mysql_num_rows($this->general);

$this->paginas=ceil($this->numeros/30);

EXTRACT($_GET);

$uno=$pg*32;
$dos=$uno-31;



if(isseT($_POST['buscar'])){

EXTRACT($_POST);


$this->datos=mysql_query("SELECT * FROM madrid WHERE descripcion  LIKE '%$buscar%'  ORDER BY id ASC  ",$this->db_conexion);

$this->total=mysql_num_rows($this->datos);

echo "<div style=float:left;width:100%;><h3>La busqueda  <strong> $buscar </strong> obtuvo <strong> ".$this->total."  </sttrong>resultados </h3> </div><br><br>";

}
elseif(isseT($_POST['min'])){

EXTRACT($_POST);

$this->vacio='';

if($min==$this->vacio){$min=0;}else{}
if($max==$this->vacio){$max=0;}else{}

$this->datos=mysql_query("SELECT * FROM madrid WHERE precio  BETWEEN $min AND $max  ORDER BY id ASC  ",$this->db_conexion);

$this->total=mysql_num_rows($this->datos);


echo "<div style=float:left;width:100%;><h3>La busqueda  de precios  obtuvo <strong> ".$this->total."  </strong>resultados </h3> </div><br><br>";


}
elseif(isseT($_GET['ca'])){

EXTRACT($_GET);


$this->datos=mysql_query("SELECT * FROM madrid WHERE categoria='$ca'   ORDER BY id ASC  ",$this->db_conexion);

$this->total=mysql_num_rows($this->datos);


echo "<div style=float:left;width:100%;><h3>  Articulos pertenecientes a la categoria";

if($ca==1){ echo " Real madrid"; 
}elseif($ca==2){ echo " Atletico de madrid"; 
}elseif($ca==3){ echo " Barcelina"; 
}elseif($ca==4){ echo " Santoro"; 
}elseif($ca==5){ echo " Moldova"; 
}elseif($ca==6){ echo " Peliuches";}

 echo "</h3> </div><br><br>";


}
else{

$this->datos=mysql_query("SELECT * FROM madrid WHERE paginacion  BETWEEN $dos AND $uno  ORDER BY id ASC LIMIT 32 ",$this->db_conexion);

}






while($this->row=mysql_fetch_array($this->datos))
{

$this->nom=$this->row['descripcion'];
$this->id=$this->row['id'];
$this->precio=$this->row['precio'];
$this->ruta=$this->row['ruta'];


$this->nombre=substr($this->nom, 0,16);


echo "

<script>


    $(document).on('ready',function(){

      $('#btn-ingresar".$this->id."').click(function(){
        var url = 'modelo/add.php';                                      

        $.ajax({                        
           type: 'POST',                 
           url: url,                    
           data: $('#formulario".$this->id."').serialize(),
           success: function(data)            
           {
             $('#resp".$this->id."').html(data);           
           }
         });
      });
    });

    </script>

<div  class='col-md-4 col-sm-6'>
                    <div class='single-shop-product'>
                        <div class='product-upper'>
                            <img src='madrid/".$this->ruta."' div style=height:230px; alt=''>
                        </div>
                        <h2><a href='?vista=producto.php&id=".$this->id."'>".$this->nombre."..</a></h2>
                        <div class='product-carousel-price'>
                            <ins>€ ".$this->precio."</ins> 
                        </div>  
                        
                        <div class='product-option-shop'>
                     
<form id='formulario".$this->id."' method='post'>


<input type='hidden' name='id' value='".$this->id."' />

<input type='button' class='add_to_cart_button'  id='btn-ingresar".$this->id."' value='Agregar' />

</form>

<div id='resp".$this->id."'></div>

                        </div>                       
                    </div>
                </div>
";

}





   echo "
            <div class='row'>
                <div class='col-md-12'>
                    <div class='product-pagination text-center'>
                        <nav>
                          <ul class='pagination'>
                         ";


for ($i=1; $i <= $this->paginas; $i++) { 
 
 //////////////////////////////////////////////////////


  if(isset($_GET['ca'])){ 



 }
elseif(isset($_POST['min'])){}
elseif(isset($_POST['buscar'])){}

 else{


if($pg==$i){echo "   <li><a href='?vista=tienda.php&pg=$i' div style=background-color:#dddddd;color:black;>$i</a></li>";  }else{  echo "   <li><a href='?vista=tienda.php&pg=$i'>$i</a></li>"; }


 }

//////////////////////////////////////////////////////

}
                 
                            

                            echo "
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>



";




}









public function articulos2()
{


$this->datos=mysqli_query("SELECT * FROM madrid ORDER BY RAND()  LIMIT 6  ",$this->db_conexion);


while($this->row2=mysqli_fetch_array($this->datos))
{

$this->nomb=$this->row2['descripcion'];
$this->id2=$this->row2['id'];
$this->precio2=$this->row2['precio'];
$this->ruta=$this->row2['ruta'];
$this->nombre2=substr($this->nomb, 0,12);

echo "





         <div class='single-product' style=float:left;>
                                <div class='product-f-image'>
                                    <img src='madrid/".$this->ruta."' div stylE=height:200px; >
                                    <div class='product-hover'>
                             
                                        <a href='?vista=producto.php&id=".$this->id2."' class='view-details-link'><i class='fa fa-link'></i> Ver articulo</a>
                                    </div>
                                </div>
                                
                                <h2><a href='?vista=producto.php&id=".$this->id2."'>".$this->nombre2."..</a></h2>
                                

<script>


    $(document).on('ready',function(){

      $('#btn-ingresar".$this->id2."').click(function(){
        var url = 'modelo/add.php';                                      

        $.ajax({                        
           type: 'POST',                 
           url: url,                    
           data: $('#formulario".$this->id2."').serialize(),
           success: function(data)            
           {
             $('#resp".$this->id2."').html(data);           
           }
         });
      });
    });

    </script>

                                <div class='product-carousel-price'>
                                    <ins>€ ".$this->precio2."</ins>

<form id='formulario".$this->id2."' method='post' style=float:right;>


<input type='hidden' name='id' value='".$this->id2."' />

<input type='button' class='btn btn-info'   id='btn-ingresar".$this->id2."'   div style=Font-size:12px;float:left;  VALUE='Agregar'/>

</form>
                                </div> 
                            </div>
                         

";


}


}






public function articulos3()
{


$this->datos3=mysql_query("SELECT * FROM  madrid ORDER BY RAND()  LIMIT 5 ",$this->db_conexion);


while($this->row3=mysql_fetch_array($this->datos3))
{

$this->nommm=$this->row3['descripcion'];
$this->id3=$this->row3['id'];
$this->precio3=$this->row3['precio'];
$this->foto2=$this->row3['ruta'];
$this->nombre3=substr($this->nommm, 0,12);

echo "



<script>


    $(document).on('ready',function(){

      $('#btn-ingresar".$this->id3."').click(function(){
        var url = 'modelo/add.php';                                      

        $.ajax({                        
           type: 'POST',                 
           url: url,                    
           data: $('#formulario".$this->id3."').serialize(),
           success: function(data)            
           {
             $('#resp".$this->id3."').html(data);           
           }
         });
      });
    });

    </script>

                     <div class='thubmnail-recent'>
                            <img src='madrid/".$this->foto2."' class='recent-thumb' alt=''>
                            <h2><a href='?vista=producto.php&id=".$this->id3."'>".$this->nombre3."..</a></h2>
                            <div class='product-sidebar-price'>
                                <ins>€ ".$this->precio3."</ins> 

  <a href='?vista=producto.php&id=".$this->id3."' class='view-details-link' style=float:right;><i class='fa fa-link'></i>  Ver articulo</a>

                            </div>                             
                        </div>
                         

";


}


}










public function articulos4()
{


$this->datos4=mysql_query("SELECT * FROM madrid ORDER BY RAND()  LIMIT 6  ",$this->db_conexion);


while($this->ro=mysql_fetch_array($this->datos4))
{

$this->nomb=$this->ro['descripcion'];
$this->id2=$this->ro['id'];
$this->precio2=$this->ro['precio'];
$this->ruta=$this->ro['ruta'];
$this->nombre2=substr($this->nomb, 0,12);

echo "


     <div class'single-product' >
                                    <div class='product-f-image' style=border:none;>
                                        <img src='madrid/".$this->ruta."' alt=''>
                                        <div class='product-hover'>
                                            <a href='' class='add-to-cart-link'><i class='fa fa-shopping-cart'></i> Add to cart</a>
                                            <a href='' class='view-details-link'><i class='fa fa-link'></i> See details</a>
                                        </div>
                                    </div>

                                    <h4><a href=''>".$this->nombre2."</a></h4>

                                    <div class='product-carousel-price'>
                                        <ins>€ ".$this->precio2."</ins> 

                                        <br>



                                          <a href='?vista=producto.php&id=".$this->id2."'  div style=float:right; class='view-details-link'><i class='fa fa-link'></i>  Ver articulo</a>
                                    </div> 
                                </div>



";


}


}










public function categoria1()
{

$this->datos2=mysqli_query("SELECT * FROM madrid  WHERE categoria='1' ORDER BY RAND() LIMIT 3 ",$this->db_conexion);


while($this->row3=mysqli_fetch_array($this->datos2))
{

$this->nom=$this->row3['descripcion'];
$this->id3=$this->row3['id'];
$this->precio3=$this->row3['precio'];
$this->imagen=$this->row3['ruta'];

$this->nombre3=substr($this->nom, 0,10);


echo "

 



                             
                        <div class='single-wid-product'>
                            <a href='?vista=producto.php&id=".$this->id3."'><img src='madrid/".$this->imagen."' alt='' class='product-thumb'></a>
                            <h2><a href='single-product.html'> ".$this->nombre3." ..</a></h2>
                          
                            <div class='product-wid-price'>
                                <ins>€ ".$this->precio3."</ins> 
                            </div>                           
  <a href='?vista=producto.php&id=".$this->id3."' class='view-details-link'><i class='fa fa-link'></i>  Ver articulo</a>
                        </div>
                         

";


}

}









public function categoria2()
{

$this->datos2=mysqli_query("SELECT * FROM madrid  WHERE categoria='2' ORDER BY RAND() LIMIT 3 ",$this->db_conexion);


while($this->row3=mysqli_fetch_array($this->datos2))
{

$this->nom=$this->row3['descripcion'];
$this->id3=$this->row3['id'];
$this->precio3=$this->row3['precio'];
$this->imagen=$this->row3['ruta'];

$this->nombre3=substr($this->nom, 0,10);


echo "

 



                             
                        <div class='single-wid-product'>
                            <a href='?vista=producto.php&id=".$this->id3."'><img src='madrid/".$this->imagen."' alt='' class='product-thumb'></a>
                            <h2><a href='single-product.html'> ".$this->nombre3." ..</a></h2>
                          
                            <div class='product-wid-price'>
                                <ins>€ ".$this->precio3."</ins> 
                            </div>                           
  <a href='?vista=producto.php&id=".$this->id3."' class='view-details-link'><i class='fa fa-link'></i>  Ver articulo</a>
                        </div>
                         

";


}

}





public function categoria3()
{

$this->datos2=mysql_query("SELECT * FROM madrid  ORDER BY RAND() LIMIT 3 ",$this->db_conexion);


while($this->row3=mysql_fetch_array($this->datos2))
{

$this->nom=$this->row3['descripcion'];
$this->id3=$this->row3['id'];
$this->precio3=$this->row3['precio'];
$this->imagen=$this->row3['ruta'];

$this->nombre3=substr($this->nom, 0,10);


echo "

 



                             
                        <div class='single-wid-product'>
                            <a href='?vista=producto.php&id=".$this->id3."'><img src='madrid/".$this->imagen."' alt='' class='product-thumb'></a>
                            <h2><a href='single-product.html'> ".$this->nombre3." ..</a></h2>
                          
                            <div class='product-wid-price'>
                                <ins>€ ".$this->precio3."</ins> 
                            </div>                           
  <a href='?vista=producto.php&id=".$this->id3."' class='view-details-link'><i class='fa fa-link'></i>  Ver articulo</a>
                        </div>";

                      }

                    }









    public function carrito()
    {


        $this->ip=$_SERVER['REMOTE_ADDR'];
        $this->carro=mysql_query("SELECT * FROM compras WHERE usuario='".$this->ip."' AND enviado!='1' ",$this->db_conexion);

        $this->contador=0;
        $this->acum=0;


        while($this->row3=mysql_fetch_array($this->carro))
        {

            $this->contador+=1;

            $this->arti=$this->row3['articulo'];
            $this->carro2=mysql_query("SELECT * FROM madrid WHERE id='".$this->arti."' ",$this->db_conexion);
            $this->row4=mysql_fetch_array($this->carro2);
            $this->nombrea=$this->row4['descripcion'];
            $this->precio=$this->row4['precio'];
            $this->acum+=$this->precio;
            $this->foto=$this->row4['ruta'];

            echo "


                                        <tr class='cart_item'>
                                            <td class='product-remove'>
                                                <a title='Remove this item' class='remove' href='#'>".$this->contador."</a>
                                            </td>

                                            <td class='product-thumbnail'>
                                               <img width='145' height='145' alt='poster_1_up' class='shop_thumbnail' src='madrid/".$this->foto."'>
                                            </td>

                                            <td class='product-name'>
                                                ".$this->nombrea."
                                            </td>

                                            <td class='product-price'>
                                                <span class='amount'>€".$this->precio."</span>
                                            </td>



                                            <td class='product-subtotal'>
                                                <span class='amount'>€".$this->precio."</span>
                                            </td>

                                             <td class='product-subtotal'>
                                                <form method=\"post\"><input type='hidden' name='borrar' value='".$this->arti."'><input type=\"submit\" class='btn btn-sm' value='Eliminar' /> </form>
                                            </td>
                                        </tr>

";

/////////////////
        }


        echo "

  <tr class='cart_item'>
                                            <td class='product-remove'>
                                                <a title='Remove this item' class='remove' href='#'></a>
                                            </td>

                                            <td class='product-thumbnail'>

                                            </td>

                                            <td class='product-name'>

                                            </td>

                                            <td class='product-price'>
                                                <span class='amount'><strong> Total </strong></span>
                                            </td>



                                            <td class='product-subtotal'>
                                                <span class='amount'>€".$this->acum."</span>
                                            </td>
                                            <td class='product-subtotal'>
                                            </td>
                                        </tr>
";


    }


    public function carrito2()
    {
        $this->ip=$_SERVER['REMOTE_ADDR'];
        $this->carro=mysql_query("SELECT * FROM compras WHERE usuario='".$this->ip."' AND enviado!='1' ",$this->db_conexion);
        $this->contador=0;
        $this->acum=0;

        while($this->row3=mysql_fetch_array($this->carro))
        {
            $this->contador+=1;
            $this->arti=$this->row3['articulo'];
            $this->carro2=mysql_query("SELECT * FROM madrid WHERE id='".$this->arti."' ",$this->db_conexion);
            $this->row4=mysql_fetch_array($this->carro2);
            $this->nombrea=$this->row4['descripcion'];
            $this->precio=$this->row4['precio'];
            $this->acum+=$this->precio;
            $this->foto=$this->row4['ruta'];
            echo $this->nombrea.", ";
        }
    }

public function carrotabla(){

$this->ip=$_SERVER['REMOTE_ADDR'];
$this->carro=mysql_query("SELECT *FROM compras  WHERE usuario='".$this->ip."'  AND enviado!='1' ",$this->db_conexion);

$this->acum=0;
$this->num=mysql_num_rows($this->carro);

$totalNeto = $totalVolumen = 0;

while($this->row4=mysql_fetch_array($this->carro))
{

  $this->articulo2=$this->row4['articulo'];

  $this->carro2=mysql_query("SELECT * FROM madrid WHERE  id='".$this->articulo2."'  ",$this->db_conexion);

  $this->row5=mysql_fetch_array($this->carro2);

  $this->precio2=$this->row5['precio'];
  $this->imagen=$this->row5['ruta'];
  $this->acum+=$this->precio2;

  $totalNeto+=$this->row5['peso_bruto'];
  $totalVolumen+=$this->row5['peso_volumen'];


}

$subTotal = $this->acum;

$portesPeso = ( $totalNeto > $totalVolumen ? $totalNeto : $totalVolumen );

$this->acum +=0;

$iva=$this->acum*0.21;

$this->acum +=$iva;

echo "
   <table cellspacing='0'>
                                    <tbody>

                                        <tr class='shipping'>
                                            <th>Total articulos</th>
                                            <td>".$this->num."</td>
                                        </tr>

                                        <tr class='cart-subtotal'>
                                            <th>Subtotal<input type=\"hidden\" value=\"".$subTotal."\" id=\"subTotalIn\" /></th>
                                            <td><span class='amount'>€ ".$subTotal."</span></td>
                                        </tr>
                                        
                                          <tr class='cart-subtotal'>
                                            <th>Portes(".$portesPeso."Kg)<input type=\"hidden\" value=\"".$portesPeso."\" id=\"portesPeso\" /></th>
                                            <td><span class='amount' id=\"portesDiv\">€ 0,00</span></td>
                                        </tr>

                                        
                                        <tr class='cart-subtotal'>
                                            <th>IVA(21%)</th>
                                            <td><span class='amount' id=\"ivaDiv\">€ ".$iva."</span></td>
                                        </tr>


                                        <tr class='order-total'>
                                            <th>Total a pagar</th>
                                            <td><strong><span class='amount' id=\"totalDiv\">€ ".$this->acum."</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
";

}


public function mapa()
{

if(isset($_GET['lng'])){

EXTRACT($_GET);

echo "

    <script>
      function initMap() {
        var myLatLng = {lat: $lat, lng: $lng};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
          zoom: 15
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
      }

    </script>

";
}else{}
//////////
}




public function addorden(){

    $this->ip=$_SERVER['REMOTE_ADDR'];
IF(isset($_POST['nombre'])){

EXTRACT($_POST);
$this->ip=$_SERVER['REMOTE_ADDR'];


$this->azar=rand(2000,100000);
$this->ip=$_SERVER['REMOTE_ADDR'];

$this->insertar2=mysql_query("INSERT INTO orden (nombre,direccion,telefono,correo,lng,lat,monto,usuario,numero,ip) VALUES ('$nombre','$direccion','$telefono','$correo','$lng','$lat','$monto','".$this->ip."','".$this->azar."','".$this->ip."') ",$this->db_conexion);


mysql_Query("UPDATE compras SET enviado='1' WHERE usuario='".$this->ip."' AND enviado='' ",$this->db_conexion);
mysql_Query("UPDATE compras SET numero='".$this->azar."' WHERE usuario='".$this->ip."' AND enviado='1' AND numero='' ",$this->db_conexion);


if($this->insertar2){echo '
<div class="alert alert-success" role="alert">
 Orden enviada con exito</div>
  ';


}else{echo "No";}

}else{}


////////////////
}


public function borra(){

if(isset($_POST['borrar'])){

  EXTRACT($_POST);

  mysql_query("DELETE FROM compras WHERE articulo='$borrar' ",$this->db_conexion);
  header("location:?vista=carro.php");

}else{}

}


public function articulosimple(){


if(isset($_GET['id'])){

EXTRACT($_GET);

$this->simple=mysql_query("SELECT * FROM madrid WHERE id='$id' ",$this->db_conexion);

$this->bow=mysql_fetch_array($this->simple);


$this->nomm=$this->bow['descripcion'];
$this->pray=$this->bow['precio'];
$this->categoria=$this->bow['categoria'];
$this->foto3=$this->bow['ruta'];
if($this->categoria=='1'){$this->categori="<a href=''>Real Madrid </a>";}else{$this->categori="<a href=''>Atletico de madrid </a>";}
$this->idd=$this->bow['id'];


$this->nom=substr($this->nomm, 0,15);

echo "
<script>


    $(document).on('ready',function(){

      $('#btn-ingresar".$this->idd."').click(function(){
        var url = 'modelo/add.php';                                      

        $.ajax({                        
           type: 'POST',                 
           url: url,                    
           data: {id:".$this->idd."},
           success: function(data)            
           {
              if(data=='1'){
                $('#resp".$this->idd."').html('Agregado correctamente <a href=\'?vista=carro.php\'>Ir al carrito</a>');           
              }
           }
         });
      });
    });

    </script>


    "; 

echo'


                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Inicio</a>
                        '.$this->categori.'
                            <a href="">'.$this->nom.'..</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="madrid/'.$this->foto3.'" alt="">
                                    </div>
                                    
                                 
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">'.$this->nom.'..</h2>
                                    <div class="product-inner-price">
                                        Precio: <ins>€ '.$this->pray.'</ins>
                                    </div>    
                                    
                                   
                                    
                                    <div class="product-inner-category">
                                        <p>Categoria: '.$this->categori.' </p>
                                    </div> 
                                   
                                    
                                    <div class="product-inner-category" >
                                        <p id="resp'.$this->idd.'"><button class="btn btn-default" id="btn-ingresar'.$this->idd.'"><i class="fa fa-plus"></i> Agregar</button> </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p>
'.nl2br($this->nomm).'
                                                </p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">

<form id="formulario" method="post">

                                                    <p><label for="name">Nombre</label>
                                                     <input name="nombre" type="text">
                                                     </p>
<input type="hidden" value="'.$this->idd.'"  name="usuario" />

                                                    <p><label for="email">Email</label> 
                                                    <input name="email" type="email">
                                                    </p>
                                                   
  <p><label for="review">Descripcion</label>
   <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
   </p>



<br>

                                                    <p><input type="button" value="Submit" id="btn-ingresar" class="btn btn-info"></p>



</form>
    
<div id="resp"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
';




}else{}

///////////////
}







}


?>
