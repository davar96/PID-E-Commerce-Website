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
                <a class="navbar-brand" href="#">PID-E-Commerce-Website</a>
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
                        <a href="#" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
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
        <!-- OwlCarousel start -->
        <section id="banner-area">

            <div class="owl-carousel owl-theme">

                <div class="item">
                    <img src="assets/audi_rs6.jpg" alt="image1">
                </div>

                <div class="item">
                    <img src="assets/audi_rs6.jpg" alt="image2">
                </div>

                <div class="item">
                    <img src="assets/audi_rs6.jpg" alt="image3">
                </div>

            </div>

        </section>
        <!-- OwlCarousel end -->

        <!-- Top sale start -->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Les plus vendus</h4>
                <hr>
                <!-- OwlCarousel start -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- OwlCarousel end -->
            </div>
        </section>
        <!-- Top sale end -->

        <!-- Special price start -->
        <section id="special-price">
            <div class="container">
                <h4 class="font-rubik font-size-20">
                    Prix spécial
                </h4>
                <hr>
                <div id="filters" class="button-group text-right font-baloo font-size-16">
                    <button class="btn is-checked" data-filter="*">Toutes les marques</button>
                    <button class="btn" data-filter=".Apple">Apple</button>
                    <button class="btn" data-filter=".Samsung">Samsung</button>
                    <button class="btn" data-filter=".OnePlus">OnePlus</button>
                </div>

                <div class="grid">
                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Apple IPhone 13 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>

                                    <div class="price py-2">
                                        <span>€1000</span>
                                    </div>

                                    <button type="submit" class="btn btn-warning font-size-12">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Apple IPhone 13 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>

                                    <div class="price py-2">
                                        <span>€1000</span>
                                    </div>

                                    <button type="submit" class="btn btn-warning font-size-12">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="grid-item Samsung border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Samsung Z Flip 3</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>

                                    <div class="price py-2">
                                        <span>€1000</span>
                                    </div>

                                    <button type="submit" class="btn btn-warning font-size-12">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="grid-item Samsung border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Samsung Z Flip 3</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>

                                    <div class="price py-2">
                                        <span>€1000</span>
                                    </div>

                                    <button type="submit" class="btn btn-warning font-size-12">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="grid-item OnePlus border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>OnePlus 10 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>

                                    <div class="price py-2">
                                        <span>€1000</span>
                                    </div>

                                    <button type="submit" class="btn btn-warning font-size-12">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="grid-item OnePlus border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>OnePlus 10 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>

                                    <div class="price py-2">
                                        <span>€1000</span>
                                    </div>

                                    <button type="submit" class="btn btn-warning font-size-12">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Special price start -->

        <!-- Banner Adds start -->
        <section id="banner-adds">
            <div class="container py-5 text-center">
                <img src="assets/audi_rs6.jpg" alt="banner1" class="img-fluid">
                <img src="assets/audi_rs6.jpg" alt="banner1" class="img-fluid">
            </div>
        </section>
        <!-- Banner Ads end -->

        <!-- New phones start -->
        <section id="new-phones">
            <div class="container">
                <h4 class="font-rubik font-size-20">Les Nouveautés</h4>
                <hr>
                <!-- OwlCarousel start -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#"><img src="assets/audi_rs6.jpg" alt="image4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                                <div class="price py-2">
                                    <span>€1000</span>
                                </div>

                                <button type="submit" class="btn btn-warning font-size-12">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- OwlCarousel end -->
            </div>
        </section>
        <!-- New phones end -->

        <!-- News start -->
        <section id="news">
            <div class="container py-4">
                <h4 class="font-rubik font-size-20">Les actualités</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width:18rem;">
                            <!-- <h5 class="card-title font-size-16">Upcoming phones</h5> -->
                            <img src="assets/audi_rs6.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit ut fugiat provident esse architecto animi error magnam sed magni voluptates.</p>
                            <a href="#" class="color-second text-left">Lire l'article</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width:18rem;">
                            <!-- <h5 class="card-title font-size-16">Upcoming phones</h5> -->
                            <img src="assets/audi_rs6.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit ut fugiat provident esse architecto animi error magnam sed magni voluptates.</p>
                            <a href="#" class="color-second text-left">Lire l'article</a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width:18rem;">
                            <!-- <h5 class="card-title font-size-16">Upcoming phones</h5> -->
                            <img src="assets/audi_rs6.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit ut fugiat provident esse architecto animi error magnam sed magni voluptates.</p>
                            <a href="#" class="color-second text-left">Lire l'article</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- News end -->

    </main>
    <!-- Main end -->

    <!-- Footer start -->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <!--  Specifies 3 column space -->
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">PID-Website</h4>
                    <p class="font-rale font-size-14 text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro doloremque, cupiditate sit reprehenderit sint tempora nihil minima ullam! Excepturi, neque?</p>
                </div>

                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">Newsletter</h4>
                    <form class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>

                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">S'enregistrer</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">A propos de nous</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Information de livraison</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Politique de confidentialité</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Conditions générales</a>
                    </div>
                </div>

                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Compte</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Mon compte</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Historique de commandes</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Liste d'envies</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newsletter</a>
                    </div>
                </div>


            </div>
        </div>
    </footer>

    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-rale font-size-14">&copy;2022 <a href="https://github.com/davar96" class="color-second">Arustamyan David</a>. All rights reserved</p>
    </div>
    <!-- Footer end -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- OwlCarousel JS File -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Isotop plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- My JS File Link -->
    <script src="./index.js"></script>
</body>

</html>