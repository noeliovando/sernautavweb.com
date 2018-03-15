<?php

include('crud.php');
$crud = new crud();
$crud->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato');

if(isset($_GET['pg'])){}else{header("location:?&pg=1&ca=28");}

EXTRACT($_GET);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sernautavweb - Shop</title>
        <link rel="icon" type="image/png" href="madrid/572124-taza.microondas.ico" />
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
   <link rel="stylesheet" href="http://demos.wpexpand.com/html/eElectronics/css/owl.carousel.css">
    <link rel="stylesheet" href="http://demos.wpexpand.com/html/eElectronics/style.css">
    <link rel="stylesheet" href="http://demos.wpexpand.com/html/eElectronics/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="../js/datos_vista.js"></script>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    function buscar_ajax(cadena){
        $.ajax({
        type: 'POST',
        url: 'modelo/buscar.php',
        data: 'cadena=' + cadena,
        success: function(respuesta) {
            //Copiamos el resultado en #mostrar
            $('#mostrar').html(respuesta);
       }
    });
    }



</script>

<style type='text/css'>
#barra{
width:100%;
height:40px;
background-color:#414141;
list-style: none;
}
#bor{
    border-bottom:solid 1px #dddddd;
    margin-left:2%;
}
#lateral{

    border-right:solid 1px #dddddd;
    margin-top:2%;
}
</style>


  </head>
  <body>
   
     <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
               
                            <li><a href="?vista=carro.php"><i class="fa fa-user"></i> My Car</a></li>
                         
                            <li><a href="?vista=log.php"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
              
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
           <h1><a href="http://sernautavweb.com/">sernautavweb</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                 <div id="myWatch"></div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                 <ul class="nav navbar-nav">
                        <li ><a href="../index.php">Home</a></li>
                        <li class="active"><a href="vista/tienda.php">Shop</a></li>
                     <li><a href="contacto.php">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    

    <div class="product-big-title-area" style=background-color:#333333;>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<div id='lateral' style=width:20%;float:left;>


<div style=width:95%; id='bor'>

<h1> Filter </h1> 


<h3> Categories </h3>


<h5> <a href='?vista=tienda.php&pg=1&ca=28'> Electrodomestic </a></h5>
<!--<h5> <a href='?vista=tienda.php&pg=1&ca=6'> Teddies </a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=7'> Funko </a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=8'> Children</a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=9'> Munich Watches </a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=11'> Emoji </a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=12'> StarWars </a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=13'> Kimmidoll </a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=15'> Benetton </a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=16'> Parfum </a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=17'>Watches</a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=18'>Stationery</a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=19'>Honey</a></h5>
<h5> <a href='?vista=tienda.php&pg=1&ca=20'>Sound</a></h5>-->
</div>



<div style=width:95%;margin-top:3%; id='bor'>


<h3> Article </h3>

<form action="?vista=tienda.php&pg=<?php echo $pg; ?>" method="post">

<input type='text' name='buscar'  class='form-control' div style=Width:90%;margin-left:2%; placeholder='Article..'  />

<br>
<div align="right">
<input type='submit' value='Search'   class='btn btn-info'  />
</div>
</form>

<br>

</div>



<div style=width:95%;margin-top:3%; id='bor'>


<h3> Price</h3>

<form action="?vista=tienda.php&pg=<?php echo $pg; ?>" method="post">

<input type='number' class='form-control' div style=Width:40%;margin-left:2%;margin-right:2%;float:left; placeholder='Min..' name='min'  />



<input type='number' class='form-control' div style=Width:40%; placeholder='Max..'  name='max' />


<br>
<div align="right">
<input type='submit' value='Buscar'   class='btn btn-info'  />
</div>
</form>

<br>

</div>



<div style=width:95%;margin-top:3%; >


<span div style=float:right;> <strong></strong> 



<br>





</div>





</div>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">


            <div class="row">
              
           


              </div>


              <div class='col-md-10'>

<?php $crud->articulos(); ?>

</div>
         </div></div></div></div>
 <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                      <h2><a href="?vista=index.php"></span></a></h2>
                        <p>in Sernauta you can get hundreds of products, stationery, watches, sound and others, at the best price, we deliver it to you at a collection point, closer to your home, through Parcel Shop</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Footer</h2>
                        <ul>
                                  <li><a href="?vista=index.php">Start</a></li>
                        <li><a href="?vista=tienda.php">Shop</a></li>
                     <li><a href="?vista=contacto.php">Contact</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title"></h2>
                        <ul>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Search</h2>
                        <p>look for an article</p>
                        <div class="newsletter-form">
                         <form action="?vista=tienda.php&pg=1" method="post">
                                <input type="text" name='buscar'  placeholder="Buscar articulo.." div style=margin-bottom:2%;>
                                <input type="submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy;    <p>&copy; 2017 All rights reserved </p></p>
                        <p></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Latest jQuery form server -->
 <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="http://demos.wpexpand.com/html/eElectronics/js/owl.carousel.min.js"></script>
    <script src="http://demos.wpexpand.com/html/eElectronics/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="http://demos.wpexpand.com/html/eElectronics/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="http://demos.wpexpand.com/html/eElectronics/js/main.js"></script>
  </body>
</html>