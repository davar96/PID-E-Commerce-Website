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
    <link rel="stylesheet" href="register.css">

    <?php
    // Require Functions.php file
    require('functions.php');
    ?>
</head>

<body>

  <!-- Main start -->
  <main class="main-site">

<!-- registration start -->
<section id="register">
    <div class="row m-0">
       <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Enregistrement</h1>
                <p class="p-1 m-0 font-baloo text-black-50">Register and enjoy additional features</p>
                <span class="font-baloo text-black-50">J'ai déjà un <a href="login.php">compte</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img class="camera-icon" src="./assets/imageNotFound.jpg" alt="camera">
                    </div>
                    <img src="./assets/imageNotFound.jpg" style="width: 200px; height: 200px;" class="img rounded-circle" alt="profile">
                    <small class="form-text text-black-50">Choisissez une image</small>
                    <input type="file" class="form-control-file" name="profileUpload" id="upload-profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">

                    <div class="form-row">

                        <div class="col">
                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Prénom">
                        </div>

                        <div class="col">
                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Nom">
                        </div>

                    </div>

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

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirmation MDP*">
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check-input" required>
                        <label for="agreement" class="form-check-label font-ruby text-black-50">J'accept <a href="#">les termes et conditions et la politique de confidentialité</a>(*)</label>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Poursuivre</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- registration end -->

<?php
// Include footer file
    include('footer.php');
?>