<?php 

function validate_input_text($textValue) {
    if(!empty($textValue)) {
        $trim_text = trim($textValue);
        //removes illegal characters
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return'';
}

function validate_input_email($emailValue) {
    if(!empty($emailValue)) {
        $trim_text = trim($emailValue);
        //removes illegal characters
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    return'';
}

//profileImage
function upload_profile($path, $file){
    $targetDir = $path;
    $default = "./assets/default-profile.png";

    //get the filename
    $filename = basename($file['name']);
    $targetFilePath = $targetDir.$filename;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if(!empty($filename)){
        //allow specific file types
        $allowType = array('png', 'jpg', 'jpeg', 'gif', 'pdf');
        if(in_array($fileType, $allowType)){
            //upload file to db
            if(move_uploaded_file($file['tmp_name'], $targetFilePath)){
                return $targetFilePath;
            }
        }
    }
    //return default image
    return $path .$default;
}

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
        header('Location:cart.php');
    }else{
        print "record failed to insert";
    }

    }else{
        echo 'not validate';
    }

?>