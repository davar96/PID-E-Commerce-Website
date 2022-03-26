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
    session_start();
    // Require Functions.php file
    require('functions.php');
    ?>
</head>

<?php 
    $user =array();

    if(isset($_SESSION['user_id'])){
        $user = get_user_info($con, $_SESSION['user_id']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('login-process.php');
    }
?>

<body>

<nav class="navbar navbar-expand-lg color-second-bg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PID-E-Commerce-Website</a>
        </div>
    </nav>
  <!-- Main start -->
  <main class="main-site">

<!-- authentification start -->
<section id="login-form">
    <div class="row m-0">
       <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Authentification</h1>
                <p class="p-1 m-0 font-baloo text-black-50">Authentifiez-vous pour pouvoir ajouter des articles a votre panier</p>
                <span class="font-baloo text-black-50">Pas de compte? <a href="register.php">Enregistrez-vous</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                <img src="<?php echo isset($user['profile_image']) ? $user['profile_image']:'./assets/default-profile.png'; ?>" style="width: 200px; height: 200px;" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="Mot de passe*">
                        </div>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">S'authentifier</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- authentification end -->


    <?php
    // Include footer file
        include('footer.php');
    ?>