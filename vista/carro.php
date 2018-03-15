<?php

include('crud.php');
$crud = new crud();
$crud->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato');
$crud->borra();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carro</title>

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

    <script src="../js/datos_vista.js"></script>
    <!--<script src="../js/datos.js"></script>

<script src="../js/datos2.js"></script>
<script src="../js/datos3.js"></script>-->
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
                    <li class="active"><a href="../../index.php">Start</a></li>
                    <li><a href="tienda.php">Shop</a></li>
                    <!--<li><a href="login2.php" target="blank">Look an article</a></li>-->
                    <li><a href="contacto.php">Contact</a></li>
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
                                <th class="product-remove">items</th>
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
                                    <!--<strong> ( Once made the payment by paypal it is necessary that you click on send purchase order to process your order ) </strong>-->
                                    <br><br>

                                    <form id='formulari' method='post' action="pago.php">

                                        <div class='col-md-6'>
                                            <input type='text' name='nombre' class='form-control'  placeholder='Enter your name ..'  />
                                        </div>



                                        <div class='col-md-6'>
                                            <input type='text' id="mapsearch" name='direccion'  size="50" class='form-control' placeholder="Address where the article will arrive..">
                                        </div>

                                        <br><br>

                                        <div class='col-md-6'>
                                            <input type='text' name='telefono' class='form-control'  placeholder='Enter your phone ..'  />
                                        </div>



                                        <div class='col-md-6'>
                                            <input type='text' name='correo' class='form-control'  placeholder='Enter your email'  />
                                        </div>


                                        <div class='col-md-12'>
                                            <input type='text' name='cupon' class='form-control'  placeholder='add coupon, optional'  div style=margin-top:1%;margin-bottom:1%; />
                                        </div>
                                        <div class='col-md-12'>
    <select name='ciudad' class='form-control' onchange="setPortes(this.value)" id="portesInit" placeholder='Select shipping location'  style="margin-top:1%;margin-bottom:1%;" required >
        <option value="" selected>select shipping location</option>
        <option value="peninsular">Northumberland</option>
        <option value="uk">Tyne y Wear</option>
        <option value="uk">Durham</option>
        <option value="uk">Cumbria</option>
        <option value="uk">Lancashire</option>
        <option value="uk">Yorkshire del Norte</option>
        <option value="uk">Yorkshire del Este</option>
        <option value="uk">Yorkshire del Sur</option>
        <option value="ukr">Yorkshire del Oeste</option>
        <option value="uk">Gran Manchester</option>
        <option value="uk">Merseyside</option>
        <option value="uk">Cheshire</option>
        <option value="uk">Derbyshire</option>
        <option value="uk">Nottinghamshire</option>
        <option value="uk">Lincolnshire</option>
        <option value="uk">Rutland</option>
        <option value="uk">Leicestershire</option>
        <option value="uk">Staffordshire</option>
        <option value="uk">Shropshire</option>
        <option value="uk">Herefordshire</option>
        <option value="uk">Worcestershire</option>
        <option value="uk">West Midlands</option>
        <option value="uk">Warwickshire</option>
        <option value="uk">Northamptonshire</option>
        <option value="uk">Cambridgeshire</option>
        <option value="uk">Norfolk</option>
        <option value="uk">Suffolk</option>
        <option value="uk">Essex</option>
        <option value="uk">Hertfordshire</option>
        <option value="uk">Bedfordshire</option>
        <option value="uk">Buckinghamshire</option>
        <option value="uk">Oxfordshire</option>
        <option value="uk">Gloucestershire</option>
        <option value="uk">Bristol</option>
        <option value="uk">Somerset</option>
        <option value="uk">Wiltshire</option>
        <option value="uk">Berkshire</option>
        <option value="uk">London</option>
        <option value="uk">Kent</option>
        <option value="uk">Sussex del Este</option>
        <option value="uk">Sussex del Oeste</option>
        <option value="uk">Surrey</option>
        <option value="uk">Hampshire</option>
        <option value="uk">Isla de Wight</option>
        <option value="uk">Dorset</option>
        <option value="uk">Devon</option>
        <option value="uk">Cornwall</option>

    </select>
        
    </div>
                                        <div class="cart_totals ">
                                            <h2>shopping cart</h2>

                                            <?php $crud->carrotabla(); ?>
                                        </div>
                                        <br><br>
                                        <input type="hidden" name="monto" id="monto" value="0">
                                        <input type="submit" value="Buy" id="btn-ingresa" class='btn btn-info'>

                                    </form>





                                    <div id='res' ></div>



                                </td>
                            </tr>
                            </tbody>
                        </table>



                        <div class="cart-collaterals">


                            <div class="cross-sells">

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
                    <h2><a href="?vista=index.php"></a>How to place orders></span></a></h2>
                    <p> Once you have selected the items you prefer, check that the sizes, colors, are correct, and enter your data in the form. Then, choose your payment method. And your order, will be underway</p>
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
                    <h2 class="footer-wid-title">Footer </h2>
                    <ul>
                        <li><a href="?vista=index.php">Start</a></li>
                        <li><a href="?vista=tienda.php">Shop</a></li>
                        <li><a href="?vista=contacto.php">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href='?vista=tienda.php&pg=1&ca=1'> </a></li>
                        <li><a href='?vista=tienda.php&pg=1&ca=2'> </a></li>

                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Search</h2>
                    <p>look for an article</p>
                    <div class="newsletter-form">
                        <form action="?vista=tienda.php&pg=1" method="post">
                            <input type="text" name='buscar'  placeholder="Look for an article" div style=margin-bottom:2%;>
                            <input type="submit" value="Search">
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
                    <p>&copy;    <p>&copy; 2017 all rights reserved</p></p>
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

function setPortes(ciudad){
    var portesPeso = $("#portesPeso").val();
    var portesPrecio = 0; 

    if(ciudad=='baleares'){
        if(portesPeso<=1){
            portesPrecio=5.81;
        }else if(portesPeso<=5){
            portesPrecio=7.95;
        }else if(portesPeso<=10){
            portesPrecio=10.95;
        }else if(portesPeso<=15){
            portesPrecio=11.95; 
        }else if(portesPeso>15){
            portesPeso = portesPeso-15;
            portesPrecio=11.95+(Math.ceil(portesPeso)*0.70);
        }
    }else if(ciudad == 'peninsular'){
        if(portesPeso<=1){
            portesPrecio=5;
        }else if(portesPeso>2){
            portesPeso = portesPeso-2;
            portesPrecio=5.12+(Math.ceil(portesPeso)*1.04);
        }
    }else if(ciudad == 'canarias'){
        if(portesPeso<=1){
            portesPrecio=14.95;
        }else if(portesPeso>1){
            portesPeso = portesPeso-1;
            portesPrecio=14.95+(Math.ceil(portesPeso)*6.85);
        }
    }
    var subTotal = parseFloat($("#subTotalIn").val());
    var iva = (subTotal+portesPrecio) * 0.21;
    var total = (subTotal+portesPrecio+iva);
    $("#ivaDiv").text("€" + (iva).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
    $("#portesDiv").text("€" + (portesPrecio).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
    $("#totalDiv").text("€" + (total).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
    $("#monto").val(total


$("#portesInit").change();
</script>



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