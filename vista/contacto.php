<?php

include('crud.php');
$crud = new crud();
$crud->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato');

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sernautavweb</title>
    
    <!-- Google Fonts -->
    
    <link rel="icon" type="image/png" href="madrid/572124-taza.microondas.ico" />
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

  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!--<script src="../js/datos6.js"></script>-->
      <script src="../js/datos_vista.js"></script>
    
<style type='text/css'>

.container-fluid{

   height:500px;
    background-image: linear-gradient(#79a06d, #79a06d); 
}

#box{
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: rgba(200, 200, 200, 0.1);
    border-radius: 4px;
    top:50px;
}

h2{
    text-align:center;
    color:#fff;
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
               
                            <li><a href="carro.php"><i class="fa fa-user"></i> Order</a></li>
                         
                            <li><a href="log.php"><i class="fa fa-user"></i> Login</a></li>
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
   <h1><a href="?vista=index.php">sernautavweb</span></a></h1>
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
                <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                        <li ><a href="../../index.php">START</a></li>
                        <li><a href="tienda.php">SHOP</a></li>
                            <li><a href="login2.php" target="blank">SEARCH ORDER</a></li>
                     <li class="active"><a href="contacto.php">CONTACT</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    


</div>

 <div class="container-fluid">
                <div class="row-fluid" >
                   
                      
                     <div class="col-md-offset-4 col-md-4" id="box">
                      <h2>CONTACT US</h2>
                       
                            <hr>
                           
<input type="hidden" name="arti" value="0" />
                                <form class="form-horizontal" " method="post" id="formulario">
                                    <fieldset>
                                        <!-- Form Name -->


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="nombre" placeholder="Name" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>


                                  
                                        <!-- Text input-->
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                    <input name="correo" placeholder="E-Mail Address" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                    <input name="telefono" placeholder="020 7008 1500" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <textarea class="form-control" name="descripcion" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12">
<input type='button' class="btn btn-warning pull-right" value='Enviar' id='btn-ingresar' />
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>

<div id='resp'></div>
                    </div> 
</div>
</div></div>




 <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                      <h2><a href="?vista=index.php"></a></h2>
                        <p></p>
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
                        <h2 class="footer-wid-title">footer </h2>
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
                                <input type="text" name='SEARCH'  placeholder="search article" div style=margin-bottom:2%;>
                                <input type="submit" value="SEARCH">
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
                        <p>&copy; 2017 All rights reserveds</p></p>
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
    </div> <!-- End footer bottom area -->
   
    <!--- Latest jQuery form server -->
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