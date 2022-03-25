<?php
session_start();
    ob_start();
    // Include header file
    include('header.php');
?>

<?php

// Include cart items if it is not empty
if(isset($_SESSION['user_id'])){
	count($Cart->getCartData($_SESSION['user_id'])) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notFound.php');
}else{
	count($_SESSION['cart'] ?? array()) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notFound.php');
}

// Include wishlist items if it is not empty
if(isset($_SESSION['user_id'])){
	count($product->getWishlistData($_SESSION['user_id'])) ? include('Template/_wishlist_template.php') : include('Template/notFound/_wishlist_notFound.php');
}else{
	count($_SESSION['wishlist'] ?? array()) ? include('Template/_wishlist_template.php') : include('Template/notFound/_wishlist_notFound.php');

}

// Include new-phone-section file
include('Template/_new-phones.php');

?>

<?php
    // Include footer file
        include('footer.php');
?>