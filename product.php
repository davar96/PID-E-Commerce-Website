<?php
ob_start();
    // Include header file
    include('header.php');
?>

<?php

// Include _products file
include('Template/_products.php');

// Include top-sale-section file
include('Template/_top-sale.php');

?>

<?php
    // Include footer file
        include('footer.php');
?>