<?php
    // Require MySql Connection
    require('database/DBController.php');

    // Require Product class
    require('database/Product.php');

    // DBController Object
    $db = new DBController();

    // Product object
    $product = new Product($db);

    // print_r($product->getData());

?>