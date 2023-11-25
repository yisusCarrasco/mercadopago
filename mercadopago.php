<?php

    require "vendor/autoload.php";

    MercadoPago\SDK::setAccessToken('Agregar token secreto');

    $preference = new MercadoPago\Preference();

    $item = new MercadoPago\Item();
    $item-> id= '0001';
    $item -> quantity = 1;
    $item -> unit_price =50;
    $item -> currency_id = "SO"; //En duda

    $preference ->items = array($item);

    $preference -> save();






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Pago online</title>
    // SDK MercadoPago.js
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<body>

    <h3>Mercado Pago</h3>

    <div class="checkout-btn">  

    </div>
    <script>
        const mp = new MercadoPago('TEST-c9ca594f-8751-4729-b446-3ff08123b7bc'),{
            locale :'es-PE'
        };

        mp.checkout({
            preference:{
                id: '<?php echo  $preference->id;  ?>'
            },
            render:{
                container: '.checkout-btn',
                label : 'Pagar con MP'
            }
        })
    </script>
    
</body>
</html>