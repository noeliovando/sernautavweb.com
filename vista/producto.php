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
    <title>sernautavweb - Producto</title>

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
    <script src="../js/datos_vista.js"></script>
    <!--<script src="../js/datos4.js"></script>-->


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
                    <h1><a href="?vista=index.php">Sernautav<span>web</span></a></h1>
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
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="tienda.php">Shop</a></li>
                    <!--<li><a href="login2.php" target="blank">Search Product</a></li>-->
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
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Search product</h2>
                    <form action="?vista=tienda.php&pg=1" method="post">
                        <input type="text"  name='buscar'  placeholder="Search ...">
                        <input type="submit" value="Search">
                    </form>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>

                    <?php $crud->articulos3(); ?>


                </div>
            </div>

            <?php $crud->articulosimple(); ?>

            <div class="related-products-wrapper">
                <h2 class="related-products-title">Other products</h2>
                <div class="related-products-carousel">

                    <?php $crud->articulos4(); ?>


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
                    <h2><a href="?vista=index.php">Sernautav<span>web</span></a></h2>
                    <p> In Xiritoys you can get an endless number of items referring to the teams of fubotl, Real madrid and atletico de madrid, if you are a fan of these teams you can not stop visiting our online store</p>
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
                    <h2 class="footer-wid-title">Site </h2>
                    <ul>
                        <li><a href="?vista=index.php">Home</a></li>
                        <li><a href="?vista=tienda.php">Shop</a></li>
                        <li><a href="?vista=contacto.php">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Search</h2>
                    <p>Search som article</p>
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