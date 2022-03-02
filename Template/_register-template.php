<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('register-process.php');
    }

?>

<!-- registration start -->
<section id="register">
    <div class="row m-0">
       <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Enregistrement</h1>
                <p class="p-1 m-0 font-baloo text-black-50">Enregistrez vous pour pouvoir ajouter des articles a votre panier</p>
                <span class="font-baloo text-black-50">J'ai déjà un <a href="login.php">compte</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                    </div>
                    <img src="./assets/default-profile.png" style="width: 200px; height: 200px;" class="img rounded-circle" alt="profile">
                    <small class="form-text text-black-50">Choisissez une image</small>
                    <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">

                    <div class="form-row">

                        <div class="col">
                            <input type="text" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>" name="firstName" id="firstName" class="form-control" placeholder="Prénom">
                        </div>

                        <div class="col">
                            <input type="text" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>" name="lastName" id="lastName" class="form-control" placeholder="Nom">
                        </div>

                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required name="email" id="email" class="form-control" placeholder="Email*">
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
                            <small id="confirm_error" class="text-danger"></small>
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
