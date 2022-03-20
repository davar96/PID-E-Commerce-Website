<?php 

$error = array();

$firstName = validate_input_text($_POST['firstName']);
if(empty($firstName)){
    $error[] = "Vous avez oublié(e) de d'introduire votre prénom";
}

$lastName = validate_input_text($_POST['lastName']);
if(empty($lastName)){
    $error[] = "Vous avez oublié(e) de d'introduire votre nom";
}

$email = validate_input_email($_POST['email']);
if(empty($email)){
    $error[] = "Vous avez oublié(e) de d'introduire votre email";
}

$password = validate_input_text($_POST['password']);
if(empty($password)){
    $error[] = "Vous avez oublié(e) de d'introduire votre MDP";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if(empty($confirm_pwd)){
    $error[] = "Vous avez oublié(e) de confirmer votre MDP";
}

$files = $_FILES['profileUpload'];

$profileImage = upload_profile('./assets/profile/', $files);

if(empty($error)){
    //register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require('database\RegisterDBController.php');

    //make a query
    $query = "INSERT INTO user(user_id, first_name, last_name, email, password, profile_image, register_date )";
    $query .= "VALUES('', ?,?,?,?,?, NOW())";

    //initialize statement
    $q = mysqli_stmt_init($con);

    //prepare sql statement
    mysqli_stmt_prepare($q, $query);

    //bind values
    mysqli_stmt_bind_param($q, 'sssss', $firstName, $lastName, $email, $hashed_pass, $profileImage);

    //execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q)==1){
        //start new session
        session_start();

        //create session variable
        $_SESSION['user_id'] = mysqli_insert_id($con);

        header('Location:login.php');
    }else{
        print "erreur";
    }

    }else{
        echo 'Veuillez entrer votre nom ET votre prenom';
    }

    // $mailCheck = mysqli_query("SELECT * FROM user WHERE email = '$email'");
    // if(mysqli_num_rows($mailCheck)>0){
    //     echo'Email existe';
    // }

?>