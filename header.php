<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PID-E-Commerce-Website</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-Carousel CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- FontAwesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style.css">

    <?php
    // Require Functions.php file
    require('functions.php');
    ?>
</head>

<body>

    <!-- Header start -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">David Arustamyan EICE</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Connexion</a>
                <a href="#" class="px-3 border-right border-left text-dark">Liste d'envies</a>
            </div>
        </div>

        <!-- Primary navigation start -->
        <nav class="navbar navbar-expand-lg color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">PID-E-Commerce-Website</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">En vente</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Catégories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Produits<i class="fas fa-chevron-down"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Nouvelles</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Catégories<i class="fas fa-chevron-down"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Bientôt disponible</a>
                        </li>

                    </ul>

                    <form action="#" class="font-size-14 font-rale">
                        <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                        </a>
                    </form>

                </div>
            </div>
        </nav>
        <!-- Primary navigation end -->
    </header>
    <!-- Header end -->

    <!-- Main start -->
    <main class="main-site">