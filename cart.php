<?php
    ob_start();
    // Include header file
    include('header.php');
?>

<?php

// Include cart items if it is not empty
count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notFound.php');

// Include wishlist items if it is not empty
count($product->getData('wishlist')) ? include('Template/_wishlist_template.php') : include('Template/notFound/_wishlist_notFound.php');

// Include new-phone-section file
include('Template/_new-phones.php');

?>

<?php
    // Include footer file
        include('footer.php');
?>