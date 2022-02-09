<?php
    ob_start();
    // Include header file
    include('header.php');
?>

<?php

// Include cart-template file
include('Template/_cart-template.php');

// Include new-phone-section file
include('Template/_new-phones.php');

?>

<?php
    // Include footer file
        include('footer.php');
?>