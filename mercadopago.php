<?php

    require "vendor/autoload.php";

    MercadoPago\SDK::setAccessToken('');

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
    <title>Document</title>
</head>
<body>
    
</body>
</html>