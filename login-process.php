<?php 

$error = array();

$email = validate_input_email($_POST['email']);
if(empty($email)){
    $error[] = "Vous avez oublié(e) de d'introduire votre email";
}

$password = validate_input_text($_POST['password']);
if(empty($password)){
    $error[] = "Vous avez oublié(e) de d'introduire votre MDP";
}

if(empty($error)){
    //sql query
    $query = "SELECT user_id, first_name, last_name, email, password, profile_image FROM user WHERE email = ?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

    //bind parameter
    mysqli_stmt_bind_param($q, 's', $email);

    //execute query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(!empty($row)){
        //verify password
        if(password_verify($password, $row['password'])){
            header("location: payement.php");
            exit();
        }
    }
    
}else{
    echo "Introduisez votre email et MDP pour vous authentifier !";
}


?>