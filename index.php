<?php
session_start();
ob_start();
    // Include header file
    include('header.php');

?>
       
<?php
    // Include banner-area file
    include('Template/_banner-area.php');

    // Include top-sale-section file
    include('Template/_top-sale.php');

    // Include special-price-section file
    include('Template/_special-price.php');

     // Include banner-ads file
     include('Template/_banner-ads.php');

     // Include new-phones file
     include('Template/_new-phones.php');

     // Include news file
     include('Template/_news.php');
     
?>

<?php
// Include footer file
    include('footer.php');
?>