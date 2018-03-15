<?php


$crud = new crud();
$crud->conectar('mysql508int.srv-hostalia.com','u5473103_xiri','xiri_499','db5473103_xiri');

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Xiritoys - Carro</title>
    
    <!-- Google Fonts -->
    <link rel="icon" type="image/png" href="madrid/572124-taza.microondas.ico" />
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
   <link rel="stylesheet" href="http://demos.wpexpand.com/html/eElectronics/css/owl.carousel.css">
    <link rel="stylesheet" href="http://demos.wpexpand.com/html/eElectronics/style.css">
    <link rel="stylesheet" href="http://demos.wpexpand.com/html/eElectronics/css/responsive.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/datos.js"></script>

<script src="js/datos2.js"></script>
<script src="js/datos3.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

  </head>
  <body>










    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
               
                            <li><a href="?vista=carro.php"><i class="fa fa-user"></i> Mi carro</a></li>
                         
                            <li><a href="?vista=log.php"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
              
                </div>
            </div>
        </div>
    </div>

     <!-- End header area -->
    

         
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                      <h1><a href="?vista=index.php">Xiri<span>toys</span></a></h1>
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
                        <li class="active"><a href="?vista=index.php">Inicio</a></li>
                        <li><a href="?vista=tienda.php">Tienda</a></li>
                        <li><a href="?vista=login2.php" target="blank">Buscar pedido</a></li>
                     <li><a href="?vista=contacto.php">Contacto</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  
                    
                  
                    
                    <div class="single-sidebar">
                       
                          <?php $crud->articulos5(); ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                    
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                         
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   





                                  <?php $crud->carrito(); ?>






                                      



                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                  
                                                </div>
                                             <strong> ( Una vez realizado el pago por paypal es necesario que hagas click en enviar orden de compra para procesar tu pedido ) </strong>
                                             <br><br>

<form id='formulari' method='post'>

<div class='col-md-6'>
<input type='text' name='nombre' class='form-control'  placeholder='Ingresa tu nombre..'  />
</div>



<div class='col-md-6'>
 <input type='text' id="mapsearch" name='direccion'  size="50" class='form-control' placeholder="Direccion donde llegara el articulo.."> 
</div>

<br><br>

<div class='col-md-6'>
<input type='text' name='telefono' class='form-control'  placeholder='Ingresa tu telefono..'  />
</div>



<div class='col-md-6'>
<input type='text' name='correo' class='form-control'  placeholder='Ingresa tu correo..'  />
</div>


<div class='col-md-12'>
<input type='text' name='cupon' class='form-control'  placeholder='Agregar cupon.. (Opcional)'  div style=margin-top:1%;margin-bottom:1%; />
</div>

<br><br>

<input type="button" value="Pagar"  id="btn-ingresa" class='btn btn-info'>

</form>

<div id='res' ></div>
 


                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
  


                            <div class="cart-collaterals">


                            <div class="cross-sells">
                               
                                                       </div>


                            <div class="cart_totals ">
                                <h2>Carro</h2>

                             <?php $crud->carrotabla(); ?>
                            </div>






                            <form method="post" action="#" class="shipping_calculator">
                                <h2><a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap"></a></h2>

                                <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

                            



                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state" name="calc_shipping_state" placeholder="State / county" value="" class="input-text"> </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text"></p>


                                <p><button class="button" value="1" name="calc_shipping" type="submit">Update Totals</button></p>

                                </section>
                            </form>


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
                 

    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                      <h2><a href="?vista=index.php">Xiri<span>toys</span></a></h2>
                        <p> En Xiritoys podras conseguir un sin fin de  items referentes a los equipos de fubotl, Real madrid y atletico de madrid,  si eres fanatico de estos equipos no puedes dejar de visitar nuestra tienda online</p>
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
                        <h2 class="footer-wid-title">Pagina </h2>
                        <ul>
                                  <li><a href="?vista=index.php">Inicio</a></li>
                        <li><a href="?vista=tienda.php">Tienda</a></li>
                     <li><a href="?vista=contacto.php">Contacto</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <li><a href='?vista=tienda.php&pg=1&ca=1'> Real madrid </a></li>
                            <li><a href='?vista=tienda.php&pg=1&ca=2'> Atletico de madrid </a></li>
               
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Busqueda</h2>
                        <p>Busca algun articulo</p>
                        <div class="newsletter-form">
                         <form action="?vista=tienda.php&pg=1" method="post">
                                <input type="text" name='buscar'  placeholder="Buscar articulo.." div style=margin-bottom:2%;>
                                <input type="submit" value="Buscar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy;    <p>&copy; 2017 xiritoys todos los derechos reservados</p></p>
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

    <!-- Latest jQuery form server -->




<script >
    
   function initMap() {



var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));



google.maps.event.addListener(searchBox, 'places_changed',function(){


var places = searchBox.getPlaces();

var bounds= new google.maps.LatLngBounds();
var i,place;

for (i = 0; place= place[i];i++)
{

bounds.extend(place.geometry.location);
marker.setPosition(place.geometry.location);

}


map.fitBounds(bounds);
map.setZoom(15);

});

}


</script>




<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0GnaRm5_37GO0iCB1fbMYDnQYhxYiYX8&callback=initMap&libraries=places"
        async defer></script>
  </body>
</html>