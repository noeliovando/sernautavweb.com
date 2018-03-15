<?php

include('crud.php');
$crud = new crud();
$crud->conectar('mysql.hostinger.es','u565655629_antuk','mGcLfN7E','u565655629_usato');
$crud->addorden();


EXTRACT($_POST);

$factura = time();

$totalpedido=5;
$concepto = "Compra en sernautavweb.com";
$version = "HMAC_SHA256_V1";
$clave = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7'; //poner la clave SHA-256
$name = 'tiendadepapeleria.com';
$code = '343686002';


include "apiRedsys.php";
$rsObj = new RedsysAPI;
$url_tpv = 'https://sis-t.redsys.es:25443/sis/realizarPago'; // PRUEBAS (sandbox)

$terminal='1';

$order=$factura;
$amount=intval($monto*100);
$currency = '978'; // EURO
$consumerlng = '001';
$transactionType = '0';
$urlMerchant = 'http://sernautavweb.com/vista/pago.php'; // URL DEL COMERCIO CMS
$urlOK = 'http://xiritoys.com'; // URL OK
$urlNO = 'http://xiritoys.com'; // URL NOK



$rsObj->setParameter("DS_MERCHANT_AMOUNT",$amount);
$rsObj->setParameter("DS_MERCHANT_CURRENCY",$currency);
$rsObj->setParameter("DS_MERCHANT_ORDER",$order);
$rsObj->setParameter("DS_MERCHANT_MERCHANTCODE",$code);
$rsObj->setParameter("DS_MERCHANT_TERMINAL",$terminal);
$rsObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE",$transactionType);
$rsObj->setParameter("DS_MERCHANT_MERCHANTURL",$urlMerchant);
$rsObj->setParameter("DS_MERCHANT_URLOK",$urlOK);
$rsObj->setParameter("DS_MERCHANT_URLKO",$urlNO);
$rsObj->setParameter("DS_MERCHANT_MERCHANTNAME",$name);
$rsObj->setParameter("DS_MERCHANT_CONSUMERLANGUAGE",$consumerlng);
$rsObj->setParameter("DS_MERCHANT_PRODUCTDESCRIPTION",$concepto);

$params = $rsObj->createMerchantParameters();
$signature = $rsObj->createMerchantSignature($clave);


?>


<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="madrid/572124-taza.microondas.ico" />
    <title></title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="" crossorigin="anonymous">
</head>
<body>

<div class="alert alert-success" role="alert" style=text-align:Center;>
    <h1>Welcome to the payment area </h1>

    <div align="center">

        <div style=Width:70%;margin-left:15%;> <label>Then you can make the payment of the selected items, click on the "Buy now" button to send the payment.</label> </div></div></div>

<div align="center">

    <div class="row">
        <div class="col-md-6">PayPal</div>
        <div class="col-md-6">Tarjeta</div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="https://www.paypal.com/es/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_xclick">
                <!-- Email que recibirá el pago -->
                <input type="hidden" name="business" value="antonio580@hotmail.es">
                <!-- Nombre del producto  -->
                <input type="hidden" name="item_name" value="Pedido">
                <!-- Tipo de moneda -->
                <input type="hidden" name="currency_code" value="EUR">
                <!-- Precio del producto -->
                <input type="hidden" name="amount" value="<?php echo $monto; ?>">
                <!-- Redirección al pagar -->
                <input type="hidden" name="return" value="http://localhost/pagospureba/index2.php">
                <!-- Redirección al cancelar -->
                <input type="hidden" name="cancel_return" value="http://localhost/pagospureba/index2.php">
                <!-- Imagen de botón -->
                <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
            </form>

        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2">

            <form id="realizarPago" action="<?php echo $url_tpv; ?>" method="post" target="_self">
                <input type='hidden' name='Ds_SignatureVersion' value='<?php echo $version; ?>'>
                <input type='hidden' name='Ds_MerchantParameters' value='<?php echo $params; ?>'>
                <input type='hidden' name='Ds_Signature' value='<?php echo $signature; ?>'>
                <input type="image" src="https://singaporecreditcards.files.wordpress.com/2013/07/masterandvisacard.png?w=816&h=9999" alt="Pagar facilmente con tu tarjeta" name="submitPayment" value="PAGAR" />
            </form>

        </div>
        <div class="col-md-2"></div>
    </div>

</div>
</body>
</html>