<?php
    // Require MySql Connection
    require('database/DBController.php');

    // Require MySql Connection
    require('database/RegisterDBController.php');

    // Require Product class
    require('database/Product.php');

     // Require Cart class
     require('database/Cart.php');

     // Require Cart class
     require('database/Register.php');

    // DBController Object
    $db = new DBController();

    // Product object
    $product = new Product($db);
    $product_shuffle = $product->getData();

    // cart object
    $Cart = new Cart($db);

    function Debuggage($data) { 
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
?>